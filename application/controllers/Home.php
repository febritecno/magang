<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Home extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {   
       $query = $this->db->query("SELECT * FROM tbl_product ORDER BY createtime DESC");
       $data['kolom']=$query->result();
       $this->load->view('home',$data);

    }

    public function sendemail()
    {
        
    }

}
  
?>