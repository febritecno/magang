<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Inbox_model extends CI_Model
{
     function productcount($searchText = '')
    {
        $this->db->select('BaseTbl.id, BaseTbl.name, BaseTbl.email, BaseTbl.phone, BaseTbl.website, BaseTbl.website,BaseTbl.pesan');
        $this->db->from('tbl_pesan as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.name  LIKE '%".$searchText."%'
                            OR BaseTbl.email  LIKE '%".$searchText."%'
                            OR BaseTbl.phone  LIKE '%".$searchText."%'
                            OR BaseTbl.website  LIKE '%".$searchText."%'
                            OR  BaseTbl.pesan  LIKE '%".$searchText."%')";
             $this->db->where($likeCriteria);
        }
        $this->db->order_by("timestamp", "DESC");
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function productlisting($searchText = '', $page, $segment)
    {
        $this->db->select('BaseTbl.id, BaseTbl.name, BaseTbl.email, BaseTbl.phone, BaseTbl.website,BaseTbl.pesan');
        $this->db->from('tbl_pesan as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.name  LIKE '%".$searchText."%'
                            OR BaseTbl.email  LIKE '%".$searchText."%'
                            OR BaseTbl.phone  LIKE '%".$searchText."%'
                            OR BaseTbl.website  LIKE '%".$searchText."%'
                            OR  BaseTbl.pesan  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->limit($page, $segment);
        $this->db->order_by("timestamp", "DESC");
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    function delete($id)
    {   
        $this->db->where('id',$id);
        $this->db->delete('tbl_pesan');
    }


}

  