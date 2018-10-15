<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index()	{
        header("Location: /admin/dom");
        exit();
    }

    public function dom () {
        $this->data['catalog'] = $this->dom->getDom(array("order_by"=>"iSort"));
		$this->load->view('admin/dom/index', $this->data);
    }

    public function dom_item () {
        $this->data['dom'] = $this->dom->getDom(array("order_by"=>"iSort", "iDomID"=>$this->uri->segment(3)));
		$this->load->view('admin/dom/item', $this->data);
    }

    public function dom_update () {
        $iDomID = $this->input->post('iDomID');


        if ($this->input->post('sDomTitle')) {
            $sDomTitle = (!empty(trim($this->input->post('sDomTitle')))) ? trim($this->input->post('sDomTitle')) : null;
            $this->db->set('sDomTitle', $sDomTitle);
        }
        if ($this->input->post('sDomAlias')) {
            $sDomAlias = (!empty(trim($this->input->post('sDomAlias')))) ? trim($this->input->post('sDomAlias')) : null;
            $this->db->set('sDomAlias', $sDomAlias);
        }
        if ($this->input->post('iDomArea')) {
            $iDomArea = (!empty(trim($this->input->post('iDomArea')))) ? trim($this->input->post('iDomArea')) : null;
            $this->db->set('iDomArea', $iDomArea);
        }
        if ($this->input->post('iDomFloor')) {
            $iDomFloor = (!empty(trim($this->input->post('iDomFloor')))) ? trim($this->input->post('iDomFloor')) : null;
            $this->db->set('iDomFloor', $iDomFloor);
        }
        if ($this->input->post('iDomRoomCount')) {
            $iDomRoomCount = (!empty(trim($this->input->post('iDomRoomCount')))) ? trim($this->input->post('iDomRoomCount')) : null;
            $this->db->set('iDomRoomCount', $iDomRoomCount);
        }
        if ($this->input->post('iDomSanuzelCount')) {
            $iDomSanuzelCount = (!empty(trim($this->input->post('iDomSanuzelCount')))) ? trim($this->input->post('iDomSanuzelCount')) : null;
            $this->db->set('iDomSanuzelCount', $iDomSanuzelCount);
        }
        if ($this->input->post('dom1_title')) {
            $dom1_title = (!empty(trim($this->input->post('dom1_title')))) ? trim($this->input->post('dom1_title')) : null;
            $this->db->set('dom1_title', $dom1_title);
        }
        if ($this->input->post('dom3_title')) {
            $dom3_title = (!empty(trim($this->input->post('dom3_title')))) ? trim($this->input->post('dom3_title')) : null;
            $this->db->set('dom3_title', $dom3_title);
        }
        if ($this->input->post('dom3_text')) {
            $dom3_text = (!empty(trim($this->input->post('dom3_text')))) ? trim($this->input->post('dom3_text')) : null;
            $this->db->set('dom3_text', $dom3_text);
        }

        
        if ($iDomID) {
            $this->db->where('iDomID', $iDomID);
            $this->db->update('dom');
        } else {
            $this->db->insert('dom');
            $iDomID = $this->db->insert_id();
        }

        $this->session->set_flashdata('udpate', 'Страница сохранена');
        
        header('Location: /admin/dom/'.$iDomID);
        exit();

        // echo'<pre>';print_r($this->input->post());echo'</pre>';
    }

    public function news () {
        $this->data['news'] = array();
		$this->load->view('admin/news/index', $this->data);
    }

    public function blog () {
        $this->data['blog'] = array();
		$this->load->view('admin/blog/index', $this->data);
    }

}