<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
		$this->data['page_js'] = 'page_news.js';
		$this->data['h1'] = "Новости";
		$this->load->view('news', $this->data);
	}

}