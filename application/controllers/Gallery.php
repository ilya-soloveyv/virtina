<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function index()
	{
		$this->data['page_js'] = 'page_gallery.js';
		$this->data['h1'] = "Галерея";
		$this->load->view('gallery', $this->data);
	}

}