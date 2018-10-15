<?php

    class Dom_model extends CI_Model {

        public function getDom($p = array())
        {
            if(isset($p['iDomID']) && is_numeric($p['iDomID']))
            {
                $this->db->where("iDomID", $p['iDomID']);
            }
            if(isset($p['sDomAlias']))
            {
                $this->db->where("sDomAlias", $p['sDomAlias']);
            }
            if(isset($p['order_by']))
            {
                $this->db->order_by($p['order_by'], "ASC");
            }
            $query = $this->db->get("dom");
            return $query->result();
        }

        public function getDomPoint($p = array())
        {
            if(isset($p['iDomID']) && is_numeric($p['iDomID']))
            {
                $this->db->where("iDomID", $p['iDomID']);
            }
            $query = $this->db->get("dom_point");
            return $query->result();
        }

        public function getColor($p = array())
        {
            $query = $this->db->get("dom_color");
            return $query->result();
        }

        public function getDomSection3($p = array())
        {
            if(isset($p['iDomID']) && is_numeric($p['iDomID']))
            {
                $this->db->where("iDomID", $p['iDomID']);
            }
            $query = $this->db->get("dom_section_3");
            $result = array();
            foreach ($query->result() as $k => $v) {
                $result[$v->iRakursValue]['iRakursValue'] = $v->iRakursValue;
                $result[$v->iRakursValue]['color'][$v->iColorID] = $v->sFileName;
            }
            $result = array_values($result);
            return $result;
        }

        public function getDomSection4($p = array())
        {
            if(isset($p['iDomID']) && is_numeric($p['iDomID']))
            {
                $this->db->where("iDomID", $p['iDomID']);
            }
            $query = $this->db->get("dom_section_4");
            $result = array();
            foreach ($query->result() as $k => $v) {
                $result[$v->iRakursValue]['iRakursValue'] = $v->iRakursValue;
                $result[$v->iRakursValue]['color'][$v->iColorID] = $v->sFileName;
            }
            $result = array_values($result);
            return $result;
        }

        public function getDomRoom($p = array())
        {
            $this->db->select("
                t1.iRoomID,
                t1.sRoomTitle,
                t1.tRoomDesc,
                t1.tRoomText,
                t1.iArea,
                t1.iFloorID,
                t1.iPointPosX,
                t1.iPointPosY,
                t2.id,
                t2.sFileName
            ");
            if(isset($p['iDomID']) && is_numeric($p['iDomID']))
            {
                $this->db->where("t1.iDomID", $p['iDomID']);
            }
            if(isset($p['iRoomID']) && is_numeric($p['iRoomID']))
            {
                $this->db->where("t1.iRoomID", $p['iRoomID']);
            }
            $this->db->join("dom_section_6 t2", "t2.iRoomID = t1.iRoomID", "LEFT");
            $this->db->order_by("t1.iSort, t2.iSort");
            $query = $this->db->get("dom_room t1");
            foreach ($query->result() as $k => $v) {
                $res[$v->iRoomID]['iRoomID'] = $v->iRoomID;
                $res[$v->iRoomID]['sRoomTitle'] = $v->sRoomTitle;
                $res[$v->iRoomID]['tRoomDesc'] = $v->tRoomDesc;
                $res[$v->iRoomID]['tRoomText'] = $v->tRoomText;
                $res[$v->iRoomID]['iArea'] = $v->iArea;
                $res[$v->iRoomID]['iFloorID'] = $v->iFloorID;
                $res[$v->iRoomID]['iPointPosX'] = $v->iPointPosX;
                $res[$v->iRoomID]['iPointPosY'] = $v->iPointPosY;
                if (!empty($v->sFileName)) {
                    $res[$v->iRoomID]['photo'][$v->id]['id'] = $v->id;
                    $res[$v->iRoomID]['photo'][$v->id]['sFileName'] = $v->sFileName;
                    $res[$v->iRoomID]['photo'] = array_values($res[$v->iRoomID]['photo']);
                }
            }
            $res = array_values($res);
            // echo'<pre>';print_r($res);echo'</pre>'; exit();
            return $res;
        }

    }

?>