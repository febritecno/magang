<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Chat extends BaseController
{
    /**
     * This is default constructor of the class
     */

    var $view;
    public function __construct()
    {
        parent::__construct();
        $this->isLoggedIn();
        $this->load->database();
        $this->load->library('ci_chat');
        @session_start();

        $this->view="/page/chat/";
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {

        if($this->isAdmin() == TRUE && $this->isAdmin()==FALSE)
        {
            $this->loadThis();
        }
        else
        {   
            $admin=$this->db->select('userId,email,name,mobile,roleId')->from('tbl_users')->order_by('roleId,userid', 'DESC')->get()->result();
            $client=$this->db->select('userId,email,name,mobile,roleId')->from('tbl_users')->order_by('userId','DESC')->where('roleId!=',3)->get()->result();
            if( !isset( $_SESSION['chatusername'] )  || !isset( $_SESSION['username'] )  ){
                $_SESSION['chatusername'] = $this->session->userdata('name');
                $_SESSION['username'] = $this->session->userdata('userId');
            }
            $data['records']= $admin;
            $data['client_records']= $client;
            $this->global['pageTitle'] = 'Garuda Informatics : Chat Listing';
            $this->loadViews($this->view."chat", $this->global,$data, NULL);
        
        }
    }

   
}

?>