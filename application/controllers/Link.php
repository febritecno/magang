<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Link extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->isLoggedIn();
        $this->load->model('User_model');
        $this->load->library('form_validation');
            
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
            
            $data['links'] = $this->User_model->links();
            
            $this->global['pageTitle'] = 'Garuda Informatics : Social Link';
            $this->loadViews("links", $this->global,$data, NULL);
        
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
            $this->form_validation->set_rules('fb','facebook','trim|required|max_length[128]');
            $this->form_validation->set_rules('tw','twitter','trim|required|max_length[128]');
            $this->form_validation->set_rules('ig','instagtam','trim|required|max_length[128]');

             if($this->form_validation->run() == FALSE)
            {
                $this->session->set_flashdata('error', 'Post Social Links creation failed');
                redirect('link');
            }
            else
            {

                $fb = $this->security->xss_clean($this->input->post('fb'));
                $tw = $this->security->xss_clean($this->input->post('tw'));
                $ig = $this->security->xss_clean($this->input->post('ig'));

                $save = array('facebook'=>$fb, 'twitter'=>$tw, 'instagram' =>$ig ); //kumpul data

                $result=$this->db->where('id','1')->update('tbl_link',$save);

                
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'Post Social Links Creation successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Post Social Links creation failed');
                }
 
            }

            redirect('link');
            
        }
    }

}

?>