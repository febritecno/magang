<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Order extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->isLoggedIn();
        $this->load->model('order_model');
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

            $count = $this->order_model->ordercount($searchText);

            $returns = $this->paginationCompress ( "order/index/", $count, 5,3);
            
            $data['orderRecords'] = $this->order_model->orderlisting($searchText, $returns["page"], $returns["segment"]);

            $this->global['pageTitle'] = 'Garuda Informatics : order Listing';

            $this->loadViews("order", $this->global, $data, NULL);
        
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
            $query = $this->db->get('tbl_order')->row();
            if($query) 
            {
                $this->session->set_flashdata('success', 'Delete Operation Successfully');
                $this->order_model->delete($id);
                redirect('order');
            } else {
                $this->session->set_flashdata('error', 'Error Delete Operation');
                redirect('order');
            }
        }
    }
}

?>