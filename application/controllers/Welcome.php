<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->data['page_js'] = 'page_welcome.js';
		$this->data['staff'] = $this->staff->getStaff();
		$this->data['preim'] = $this->preim->getPreim();
		$this->data['preload'] = true;
		$this->load->view('welcome_message', $this->data);
	}

	public function sitemap()
	{
		$this->data['title'] = "Карта сайта";

		$sitemap = $this->db->select("*")->get("sitemap")->result();
		foreach ($sitemap as $k => $v) {
			$this->data['sitemap'][$v->parent][$v->id] = array(
				"name" => $v->name,
				"url" => $v->url
			);
		}

		$this->load->view('sitemap', $this->data);
	}

	public function sitemap_gen()
	{
		$this->db->empty_table('sitemap');

		$data = array(
			'name' => 'Главная страница',
			'url' => $this->config->item("base_url"),
			'parent' => 0
		);
		$this->db->insert('sitemap', $data);

		$data = array(
			'name' => 'Каталог',
			'url' => $this->config->item("base_url")."catalog",
			'parent' => 0
		);
		$this->db->insert('sitemap', $data);
		$id = $this->db->insert_id();

		$data = array(
			array(
				'name' => '1.100',
				'url' => $this->config->item("base_url")."catalog/dom1",
				'parent' => $id
			),
			array(
				'name' => '1.210',
				'url' => $this->config->item("base_url")."catalog/dom2",
				'parent' => $id
			),
			array(
				'name' => '2.340',
				'url' => $this->config->item("base_url")."catalog/dom3",
				'parent' => $id
			),
			array(
				'name' => '2.170',
				'url' => $this->config->item("base_url")."catalog/dom4",
				'parent' => $id
			),
		);
		$this->db->insert_batch('sitemap', $data);

		$data = array(
			'name' => 'Галерея',
			'url' => $this->config->item("base_url")."gallery",
			'parent' => 0
		);
		$this->db->insert('sitemap', $data);

		$data = array(
			'name' => 'Энциклопедия',
			'url' => $this->config->item("base_url")."blog",
			'parent' => 0
		);
		$this->db->insert('sitemap', $data);
		$id = $this->db->insert_id();

		$data = array(
			'name' => 'Популярные статьи',
			'url' => $this->config->item("base_url")."blog/popular",
			'parent' => $id
		);
		$this->db->insert('sitemap', $data);

		$arr = array();
		$result = $this->db
			->select("
				t1.iArticleID,
				t1.sArticleTitle,
				t1.sArticleAlias,
				t1.iArticleCatID,
				t2.sArticleCatTitle,
				t2.sArticleCatAlias
			")
			->join("article_cat t2", "t2.iArticleCatID = t1.iArticleCatID", "LEFT")
			->order_by("t2.iArticleCatSort", "ASC")
			->order_by("t1.iArticleID", "ASC")
			->get("article t1");
		foreach ($result->result() as $k => $v) {
			$arr[$v->iArticleCatID]['sArticleCatTitle'] = $v->sArticleCatTitle;
			$arr[$v->iArticleCatID]['sArticleCatAlias'] = $v->sArticleCatAlias;
			$arr[$v->iArticleCatID]['article'][$v->iArticleID]['sArticleTitle'] = $v->sArticleTitle;
			$arr[$v->iArticleCatID]['article'][$v->iArticleID]['sArticleAlias'] = $v->sArticleAlias;
		}
		foreach ($arr as $k => $v) {
			$data = array(
				'name' => $v['sArticleCatTitle'],
				'url' => $this->config->item("base_url")."blog/".$v['sArticleCatAlias'],
				'parent' => $id
			);
			$this->db->insert('sitemap', $data);
			$id2 = $this->db->insert_id();
			foreach ($v['article'] as $k2 => $v2) {
				$data = array(
					'name' => $v2['sArticleTitle'],
					'url' => $this->config->item("base_url")."blog/".$v2['sArticleAlias'],
					'parent' => $id2
				);
				$this->db->insert('sitemap', $data);
			}
		}

		$data = array(
			'name' => 'Новости',
			'url' => $this->config->item("base_url")."news",
			'parent' => 0
		);
		$this->db->insert('sitemap', $data);

		$data = array(
			'name' => 'Контакты',
			'url' => $this->config->item("base_url")."contact",
			'parent' => 0
		);
		$this->db->insert('sitemap', $data);


		$q = $this->db->get("sitemap");

		$dom = new domDocument("1.0", "utf-8");
		$root = $dom->createElement("urlset");
		$root->setAttribute("xmlns", "http://www.sitemaps.org/schemas/sitemap/0.9");
		$dom->appendChild($root);
		foreach ($q->result() as $k => $v) {
			$url = $dom->createElement("url");
			$root->appendChild($url);
			$loc = $dom->createElement("loc", $v->url);
			$url->appendChild($loc);
		}
		$dom->save("sitemap.xml");

		// echo'<pre>';print_r($arr);echo'</pre>';
	}

	public function get_preim()
	{
		$this->data['preim'] = $this->preim->getPreim(array("iPreimID"=>$this->input->post("iPreimID")));
		$this->data['preim_prev_next'] = $this->preim->getPrevAndNextPreim($this->input->post("iPreimID"));
		$this->load->view('modal/modal_preim.php');
	}

	public function zay()
	{
		$mess = "<h1>Сообщение с сайта virtina.ru</h1>";
		if ($this->input->post("name")) {
			$mess.= "<p>Имя: ".$this->input->post("name")."</p>";
		}
		if ($this->input->post("phone")) {
			$mess.= "<p>Телефон: ".$this->input->post("phone")."</p>";
		}
		if ($this->input->post("email")) {
			$mess.= "<p>Электронная почта: ".$this->input->post("email")."</p>";
		}
		if ($this->input->post("text")) {
			$mess.= "<p>Сообщение: ".$this->input->post("text")."</p>";
		}
		if ($this->input->post("call_from") || $this->input->post("call_to")) {
			$mess.= "<p>Время звонка: ";
			if ($this->input->post("call_from")) {
				$mess.= "c  ".$this->input->post("call_from").' ';
			}			
			if ($this->input->post("call_to")) {
				$mess.= "по  ".$this->input->post("call_to");
			}			
			$mess.= "</p>";
		}

		$this->mailgun->send(
			array(
				"to" => "info@virtina.ru",
				"sub" => $this->input->post("subject"),
				"mess" => $mess
			)
		);

		// mail("ilya.soloveyv@gmail.com", "test", $text);
	}

	public function mailgun () {
		$this->mailgun->send(
			array(
				"to" => "ilya.soloveyv@gmail.com",
				"sub" => "Тестовое письмо",
				"mess" => "Привте! Это текст в тестовомм письме"
			)
		);
	}

	public function mailgun_bounces () {
		$this->mailgun->bounces();
	}

	public function mailgun_bounces_delete () {
		$this->mailgun->bounces_delete();
	}

}