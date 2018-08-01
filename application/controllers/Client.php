<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Client extends BaseController
{
    /**
     * This is default constructor of the class
     */

    var $view;

    public function __construct()
    {
        parent::__construct();
        $this->isLoggedIn();
        $this->load->model('client_model');
        $this->load->database();

        //global variable untuk folder page
        $this->view= "page/client/";
            
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {

        if($this->isAdmin() == FALSE)
        {
            $this->loadThis();
        }
        else
        {
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');

            $count = $this->client_model->clientcount($searchText);

            $returns = $this->paginationCompress ( "client/index/", $count, 5,3);
            
            $data['clientRecords'] = $this->client_model->clientlisting($searchText, $returns["page"], $returns["segment"]);

            $this->global['pageTitle'] = 'Garuda Informatics : client Listing';

            $this->loadViews($this->view."client", $this->global, $data, NULL);
        
        }
    }


    public function progress()
    {

        if($this->isAdmin() == FALSE && $this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {   

            $orderId=$this->uri->segment(2);
            $data['pro'] = $this->client_model->show_progress($orderId);
            $this->global['pageTitle'] = 'Garuda Informatics : Progress Listing';

            $this->loadViews($this->view."progress", $this->global,$data, NULL);
        
        }
    }


    public function new_order()
    {

        if($this->isAdmin() == FALSE)
        {
            $this->loadThis();
        }
        else
        {

            $this->global['pageTitle'] = 'Garuda Informatics : New Order Listing';

            $this->loadViews($this->view."new_order", $this->global,null, NULL);
        
        }
    }
    
    

    public function delete()
    {
        if($this->isadmin()== FALSE)
        {
            $this->loadThis();
        }
        else
        {
            $id = $this->uri->segment(2);
            $this->db->where('id',$id);
            $query = $this->db->get('tbl_order')->row();
            unlink(realpath('storage/document/'.$query->file));
            if($query > 0) 
            {
                $this->session->set_flashdata('success', 'Delete Operation Successfully');
                $this->client_model->delete($id);
                redirect('client');
            } else {
                $this->session->set_flashdata('error', 'Error Delete Operation');
                redirect('client');
            }
        }
    }
}

?>