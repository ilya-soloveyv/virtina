<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->data['article_cat'] = $this->article->getArticleCat();
		$this->data['article_last'] = $this->article->getArticle(array("limit"=>3, "order_by"=>array("t1.dArticleDateCreate", "DESC")));
	}

	public function index()	{
		$this->data['page_js'] = 'page_article.js';
		$this->data['h1'] = "Энциклопедия";
		$this->data['article'] = $this->article->getArticle(array("order_by"=>array("dArticleDateCreate", "DESC")));
		$this->load->view('article', $this->data);
	}

	public function item($alias = false) {
		$this->data['page_js'] = 'page_article.js';
		$this->data['h1'] = "Энциклопедия";
		$this->data['article_cat_active'] = $this->article->getArticleCat(array("sArticleCatAlias"=>$alias));
		if($alias == 'popular')
		{
			$this->data['article'] = $this->article->getArticle(array("order_by"=>array("t1.iArticleView", "DESC")));
			$this->load->view('article', $this->data);
		}
		elseif(!empty($this->data['article_cat_active']))
		{
			$this->data['article'] = $this->article->getArticle(array("iArticleCatID"=>$this->data['article_cat_active'][0]->iArticleCatID));
			$this->load->view('article', $this->data);
		}
		else
		{
			$this->data['article'] = $this->article->getArticle(array("sArticleAlias"=>$alias));
			if(isset($this->data['article'][0]->iArticleID))
			{
				$this->load->view('article_item', $this->data);
			}
			else
			{
				show_404();
			}
		}
	}

}