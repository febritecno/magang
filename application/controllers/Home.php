<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Home extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('user_model');
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {   
       $product = $this->db->query("SELECT * FROM tbl_product ORDER BY createtime DESC");
       $data['link']= $this->user_model->links();
       $data['kontak']=$this->user_model->kontak();
       $data['kolom']=$product->result();
       $this->load->view('home',$data);

    }

    public function send()
    {
      $name = $this->input->post('name');
      $email = $this->input->post('email');
      $phone = $this->input->post('phone');
      $website = $this->input->post('website');
      $pesan = $this->input->post('pesan');
      
      $save = array('name'=>$name, 'email'=>$email, 'phone' =>$phone,'website'=>$website, 'pesan'=>$pesan); //kumpul 

      $result= $this->db->insert('tbl_pesan',$save);

      if($result > 0)
      {
           echo "<script>alert('Pesan Telah Terkirim, kami akan segera merespon pesan anda lewat email anda');</script>";
            redirect('','refresh');
      }
      else
      {
           redirect();
      }
      
      
    }



}
  
?>