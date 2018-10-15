<?php

    class Article_model extends CI_Model {

        public function getArticle($p = array())
        {
            if(isset($p['iArticleID']) && is_numeric($p['iArticleID']))
            {
                $this->db->where("t1.iArticleID", $p['iArticleID']);
            }
            if(isset($p['iArticleCatID']) && is_numeric($p['iArticleCatID']))
            {
                $this->db->where("t1.iArticleCatID", $p['iArticleCatID']);
            }            
            if(isset($p['sArticleAlias']))
            {
                $this->db->where("t1.sArticleAlias", $p['sArticleAlias']);
            }
            if(isset($p['order_by']))
            {
                $this->db->order_by($p['order_by'][0], $p['order_by'][1]);
            }
            if(isset($p['limit']))
            {
                $this->db->limit($p['limit']);
            }
            $this->db->join("article_cat t2", "t1.iArticleCatID = t2.iArticleCatID", "LEFT");
            $query = $this->db->get("article t1");
            return $query->result();
        }

        public function getArticleCat($p = array())
        {
            if(isset($p['iArticleCatID']) && is_numeric($p['iArticleCatID']))
            {
                $this->db->where("t1.iArticleCatID", $p['iArticleCatID']);
            }
            if(isset($p['sArticleCatAlias']))
            {
                $this->db->where("t1.sArticleCatAlias", $p['sArticleCatAlias']);
            }
            $this->db->order_by("t1.iArticleCatSort", "ASC");
            $query = $this->db->get("article_cat t1");
            return $query->result();
        }

    }

?>