<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$this->data['page_js'] = 'page_contact.js';
		$this->data['h1'] = "Контакты";
		$this->load->view('contact', $this->data);
	}

}