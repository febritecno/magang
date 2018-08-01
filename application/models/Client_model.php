<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class client_model extends CI_Model
{
    function clientcount($searchText = '')
    {
       $this->db->select('BaseTbl.id, BaseTbl.title, BaseTbl.type, BaseTbl.file, BaseTbl.progress ,BaseTbl.status,BaseTbl.deadline');
        $this->db->from('tbl_order as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.title  LIKE '%".$searchText."%'
                            OR BaseTbl.type  LIKE '%".$searchText."%'
                            OR BaseTbl.status  LIKE '%".$searchText."%'
                            OR BaseTbl.progress  LIKE '%".$searchText."%'
                            OR BaseTbl.deadline  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('userId',$this->session->userdata('userId'));
        $this->db->order_by("timestamp", "DESC");
        $query = $this->db->get();
        return $query->num_rows();
    }

    function clientlisting($searchText = '', $page, $segment)
    {
        $this->db->select('BaseTbl.id, BaseTbl.title, BaseTbl.type, BaseTbl.file, BaseTbl.progress ,BaseTbl.status,BaseTbl.deadline');
        $this->db->from('tbl_order as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.title  LIKE '%".$searchText."%'
                            OR BaseTbl.type  LIKE '%".$searchText."%'
                            OR BaseTbl.status  LIKE '%".$searchText."%'
                            OR BaseTbl.progress  LIKE '%".$searchText."%'
                            OR BaseTbl.deadline  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('userId',$this->session->userdata('userId'));
        $this->db->limit($page, $segment);
        $this->db->order_by("timestamp", "DESC");
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    function delete($id)
    {   
        $this->db->where('id',$id);
        $this->db->delete('tbl_order');

        //mengurutkan autoincrement cuma update
        // $this->db->query('SET  @num := 0');
        // $this->db->query('UPDATE tbl_client SET id = @num := (@num+1)');
        // $this->db->query('ALTER TABLE tbl_client AUTO_INCREMENT =1');
        //untuk jika ditambah bisa urut
        // MAX(id) + 1
    }


}

  