<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends CI_Controller {

	public function index()
	{
		$this->data['page_js'] = 'page_catalog.js';
		$this->data['h1'] = "Каталог";
		$this->data['catalog'] = $this->dom->getDom(array("order_by"=>"iSort"));
		$this->load->view('catalog', $this->data);
	}

	public function dom($sDomAlias = false)
	{
		$this->load->library('my');
		$this->data['page_js'] = 'page_dom.js';
		$this->data['preload'] = true;
		$this->data['color'] = $this->dom->getColor();
		$this->data['dom'] = $this->dom->getDom(array("sDomAlias"=>$sDomAlias));
		$this->data['dom_section_3'] = $this->dom->getDomSection3(array("iDomID"=>$this->data['dom'][0]->iDomID));
		$this->data['dom_section_4'] = $this->dom->getDomSection4(array("iDomID"=>$this->data['dom'][0]->iDomID));
		$this->data['dom_room'] = $this->dom->getDomRoom(array("iDomID"=>$this->data['dom'][0]->iDomID));
		// $this->data['point'] = $this->dom->getDomPoint(array("iDomID"=>$this->data['dom'][0]->iDomID));
		$this->data['h1'] = $this->data['dom'][0]->sDomTitle;
		$this->load->view('dom', $this->data);
	}

	public function dom6()
	{
		$iRoomID = $this->input->post("iRoomID");
		$this->data['room'] = $this->dom->getDomRoom(array("iRoomID"=>$iRoomID));
		$this->load->view('modal/modal_dom6');
	}

	public function test()
	{
		$this->load->view('test');
	}

}