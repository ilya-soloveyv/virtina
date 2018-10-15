<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	public function get()
	{
		$iStaffID = $this->input->get('iStaffID');
		$iStaffID = $this->input->post('iStaffID');
		$this->data['staff'] = $this->staff->getStaff(array("iStaffID"=>$iStaffID));
		if(isset($this->data['staff'][0]->iStaffID))
		{
			$iStaffID = $this->data['staff'][0]->iStaffID;

			$staff = $this->staff->getStaff();
			$temp = array();
			foreach ($staff as $k => $v)
			{
				$temp[] = $v->iStaffID;
			}

			foreach ($temp as $k => $v)
			{
				if($v == $iStaffID)
				{
					$this->data['prev'] = (isset($temp[$k-1])) ? $temp[$k-1] : array_pop($temp);
					$this->data['next'] = (isset($temp[$k+1])) ? $temp[$k+1] : array_shift($temp);
				}
			}

			$this->load->view('modal/modal_staff.php');
		}
	}

}