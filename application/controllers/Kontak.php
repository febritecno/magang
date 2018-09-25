<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Kontak extends BaseController
{
    /**
     * This is default constructor of the class
     */

    var $view;

    public function __construct()
    {
        parent::__construct();
        $this->isLoggedIn();
        $this->load->model('User_model');
        $this->load->library('form_validation');
            
        //global variable untuk folder page
        $this->view= "page/admin/kontak/";
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {

        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            
            $data['kontak'] = $this->User_model->kontak();
            
            $this->global['pageTitle'] = 'Garuda Informatics : Contacts';
            $this->loadViews($this->view."contact", $this->global,$data, NULL);
        
        }
    }

    public function save()
    {
        $this->load->database();
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->form_validation->set_rules('headline','headline','trim|required|max_length[128]');
            $this->form_validation->set_rules('address','address','trim|required|max_length[128]');
            $this->form_validation->set_rules('phone','phone','trim|required|max_length[128]');
            $this->form_validation->set_rules('mail','mail','trim|required|max_length[128]');
            $this->form_validation->set_rules('lat','lat','trim|required|max_length[128]');
            $this->form_validation->set_rules('long','long','trim|required|max_length[128]');

            if($this->form_validation->run() == FALSE)
            {
                $this->session->set_flashdata('error', 'Post Contacts creation failed');
                redirect('kontak');
            }
            else
            {
                $headline = $this->security->xss_clean($this->input->post('headline'));
                $address = $this->security->xss_clean($this->input->post('address'));
                $phone = $this->security->xss_clean($this->input->post('phone'));
                $mail = $this->security->xss_clean($this->input->post('mail'));
                $lat = $this->security->xss_clean($this->input->post('lat'));
                $long = $this->security->xss_clean($this->input->post('long'));
                
                $save = array('headline'=>$headline, 'address'=>$address, 'phone' =>$phone,'mail'=>$mail, 'lat'=>$lat, 'long' =>$long); //kumpul 

                $result=$this->db->where('id','1')->update('tbl_kontak',$save);

                
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'Post Contacts Creation successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Post Contacts creation failed');
                }

            }

            redirect('kontak');   
        }
    }
    


}

?>