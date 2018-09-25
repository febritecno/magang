<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Order extends BaseController
{
    /**
     * This is default constructor of the class
     */

    var $view;

    public function __construct()
    {
        parent::__construct();
        $this->isLoggedIn();
        $this->load->model('order_model');
        $this->load->library('form_validation');
        $this->load->database();
        $this->view = "page/admin/order/";
            
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

            $this->loadViews($this->view."order", $this->global, $data, NULL);
        
        }
    }

    public function add_progress()
    {
        if($this->isadmin()== TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $data['orderid']=$this->uri->segment(2);
            $data['userid']= $this->uri->segment(3);
            $this->global['pageTitle'] = 'Garuda Informatics : Add Progress To Timeline Project';
            $this->loadViews($this->view."add_progress", $this->global, $data, NULL);
        }
    }

    public function send_progress()
    {
        if($this->isadmin()== TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->form_validation->set_rules('title','Progress Title','trim|required|max_length[128]');
            $this->form_validation->set_rules('text','Description Progress','trim|required');
            $this->form_validation->set_rules('badge','Select Badge For Progress','trim|required');
            $this->form_validation->set_rules('orderid','OrderId','trim|required');
            $this->form_validation->set_rules('userid','UserId','trim|required');

            if($this->form_validation->run() == FALSE)
            {
                $this->session->set_flashdata('error', 'Error Add Progress, try again');
                redirect('order');
            }else{

            $title = $this->input->post('title');
            $text = $this->input->post('text');
            $badge = $this->input->post('badge');
            $orderid = $this->input->post('orderid');
            $userid = $this->input->post('userid');   

            $save = array('title' => $title,'text' => $text,'badge' => $badge,'orderId' => $orderid,'userId' => $userid);
            $this->db->insert('tbl_timeline',$save);

                if($save > 0)
                {
                    $this->session->set_flashdata('success', 'Progress Added Successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Error, please try again');
                }

            redirect('order');
                
            }
            
        }
    }

    public function update_status($id = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            if($id == null)
            {
                redirect('order');
            }
            
            $data['records'] = $this->order_model->update_status_info($id);
            $this->global['pageTitle'] = 'Garuda Informatics : Set Status';
            
            $this->loadViews($this->view."editOrder", $this->global, $data, NULL);
        }
    }

    public function send_update_status()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $id=$this->input->post('id');
            $status=$this->input->post('status');
            $progress=$this->input->post('progress');

            $send= array('progress'=>$progress,'status'=>$status);
            
            $result = $this->order_model->update_status($id,$send);
            
            if($result > 0)
                {
                    $this->session->set_flashdata('success', 'Successfully, updating data');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Error');
                }
                
            redirect('order');
        }
    }



    public function admin_delete()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $id = $this->uri->segment(2);
            $this->db->where('id',$id);//select file
            $query = $this->db->get('tbl_order')->row();
            unlink(realpath('storage/document/'.$query->file));
            if($query > 0)
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