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
        $this->load->library('form_validation');

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

    public function send_order()
    {

        if($this->isAdmin() == FALSE)
        {
            $this->loadThis();
        }
        else
        {
           
                $fileData = array();
                $config['upload_path']          = './storage/document';
                $config['allowed_types']        = 'doc|docx|rar|zip';
                $config['overwrite']            = TRUE;
                $config['max_size']             = 90000;

                $this->load->library('upload', $config);

            
                if ($this->upload->do_upload('file')) {

                $data = $this->upload->data(); // Get the file data
                $fileData[] = $data; // It's an array with many data

                // Interate throught the data to work with them
                foreach ($fileData as $file) { //describe all info upload
                    $file_data = $file;
                    }

                $userId=$this->input->post('userId');
                $title=$this->input->post('title');
                $type=$this->input->post('type');
                $file=$file_data['file_name'];
                $deadline=$this->input->post('deadline');

                $save = array('title' => $title,'type' => $type,'file' => $file,'deadline' => $deadline,'userId' => $userId );

                $result=$this->client_model->save_order($save);

                $this->session->set_flashdata('success', 'Send data has successfully');

            }else{
        
                $this->session->set_flashdata('error', 'Error Upload! please check your upload document');
            }
            
                redirect('client');
        }
    }
    
    

    public function delete()
    {
        if($this->isAdmin() == FALSE)
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