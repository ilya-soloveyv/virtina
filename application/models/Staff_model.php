<?php

    class Staff_model extends CI_Model {

        public function getStaff($p = array())
        {
            if(isset($p['iStaffID']) && is_numeric($p['iStaffID']))
            {
                $this->db->where("iStaffID", $p['iStaffID']);
            }
            $query = $this->db->get("staff");
            return $query->result();
        }

    }

?>