<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Inbox extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->isLoggedIn();
        $this->load->model('inbox_model');
        $this->load->database();
            
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
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');

            $count = $this->inbox_model->productcount($searchText);

            $returns = $this->paginationCompress ( "inbox/index/", $count, 5,3);
            
            $data['productRecords'] = $this->inbox_model->productlisting($searchText, $returns["page"], $returns["segment"]);

            $this->global['pageTitle'] = 'Garuda Informatics : Inbox Listing';

            $this->loadViews("inbox", $this->global, $data, NULL);
        
        }
    }
    

    public function delete()
    {
        if($this->isadmin()== TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $id = $this->uri->segment(3);
            $this->db->where('id',$id);
            $this->db->truncate('tbl_pesan');
            $query = $this->db->get('tbl_pesan')->row();
            if($query) 
            {
                $this->session->set_flashdata('success', 'Delete Operation Successfully');
                $this->inbox_model->delete($id);
                redirect('inbox');
            } else {
                $this->session->set_flashdata('error', 'Error Delete Operation');
                redirect('inbox');
            }
        }
    }

    public function all()
    {
        $query=$this->db->empty_table('tbl_pesan');
        $this->db->truncate('tbl_pesan');
        if($query) 
            {
                $this->session->set_flashdata('success', 'Delete All Data Operation Successfully');
                redirect('inbox');
            } else {
                $this->session->set_flashdata('error', 'Error Delete Operation');
                redirect('inbox');
            }
    }
}

?>