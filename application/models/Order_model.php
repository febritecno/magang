<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Order_model extends CI_Model
{
    function ordercount($searchText = '')
    {
       $this->db->select('BaseTbl.id, BaseTbl.title, BaseTbl.type, BaseTbl.file, BaseTbl.progress ,BaseTbl.status,BaseTbl.deadline,BaseTbl.timestamp,User.mobile,User.name,User.email,User.userId');
        $this->db->join('tbl_users as User','User.userId=BaseTbl.userId','left');
        $this->db->from('tbl_order as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.title  LIKE '%".$searchText."%'
                            OR BaseTbl.type  LIKE '%".$searchText."%'
                            OR User.name  LIKE '%".$searchText."%'
                            OR User.mobile  LIKE '%".$searchText."%'
                            OR User.email  LIKE '%".$searchText."%'
                            OR BaseTbl.status  LIKE '%".$searchText."%'
                            OR BaseTbl.progress  LIKE '%".$searchText."%'
                            OR BaseTbl.timestamp  LIKE '%".$searchText."%'
                            OR BaseTbl.deadline  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where("User.roleId!=",1);
        $this->db->where("User.roleId!=",2);
        $this->db->order_by("timestamp", "DESC");
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function orderlisting($searchText = '', $page, $segment)
    {
        $this->db->select('BaseTbl.id, BaseTbl.title, BaseTbl.type, BaseTbl.file, BaseTbl.progress ,BaseTbl.status,BaseTbl.deadline,BaseTbl.timestamp,User.mobile,User.name,User.email,User.userId');
        $this->db->join('tbl_users as User','User.userId=BaseTbl.userId','left');
        $this->db->from('tbl_order as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.title  LIKE '%".$searchText."%'
                            OR BaseTbl.type  LIKE '%".$searchText."%'
                            OR User.name  LIKE '%".$searchText."%'
                            OR User.mobile  LIKE '%".$searchText."%'
                            OR User.email  LIKE '%".$searchText."%'
                            OR BaseTbl.status  LIKE '%".$searchText."%'
                            OR BaseTbl.progress  LIKE '%".$searchText."%'
                            OR BaseTbl.timestamp  LIKE '%".$searchText."%'
                            OR BaseTbl.deadline  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where("User.roleId!=",1);
        $this->db->where("User.roleId!=",2);
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
        // $this->db->query('UPDATE tbl_order SET id = @num := (@num+1)');
        // $this->db->query('ALTER TABLE tbl_order AUTO_INCREMENT =1');
        //untuk jika ditambah bisa urut
        // MAX(id) + 1
    }


}

  