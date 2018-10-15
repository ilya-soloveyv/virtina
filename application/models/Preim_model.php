<?php

    class Preim_model extends CI_Model {

        public function getPreim($p = array())
        {
            $this->db->select("*");
            if(isset($p['iPreimID']) && is_numeric($p['iPreimID']))
            {
                $this->db->where("iPreimID", $p['iPreimID']);
            }
            if(isset($p['iPreimID_less']))
            {
                $this->db->where("iPreimID <", $p['iPreimID_less']);
            }
            if(isset($p['iPreimID_more']))
            {
                $this->db->where("iPreimID >", $p['iPreimID_more']);
            }
            if(isset($p['order_by']))
            {
                $this->db->order_by($p['order_by'][0], $p['order_by'][1]);
            }
            if(isset($p['limit']))
            {
                $this->db->limit($p['limit']);
            }
            $query = $this->db->get("preim");
            return $query->result();
        }
        public function getPrevAndNextPreim($iPreimID = false)
        {
            if($iPreimID)
            {
                $result = array();

                $prev = $this->getPreim(array("iPreimID_less"=>$this->input->post("iPreimID"), "order_by"=>array("iPreimID", "DESC"), "limit"=>1));
                if(empty($prev))
                {
                    $prev = $this->getPreim(array("order_by"=>array("iPreimID", "DESC"), "limit"=>1));
                }
                $result['prev'] = $prev[0];

                $next = $this->getPreim(array("iPreimID_more"=>$this->input->post("iPreimID"), "order_by"=>array("iPreimID", "ASC"), "limit"=>1));
                if(empty($next))
                {
                    $next = $this->getPreim(array("order_by"=>array("iPreimID", "ASC"), "limit"=>1));
                }
                $result['next'] = $next[0];                

                return $result;
            }
        }

    }

?>