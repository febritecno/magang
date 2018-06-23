<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Product extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->isLoggedIn();
        $this->load->model('product_model');
        $this->load->library('pagination');
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
            
            $count = $this->product_model->productcount($searchText);

            $returns = $this->paginationCompress ( "product/", $count, 10);
            
            $data['productRecords'] = $this->product_model->productlisting($searchText, $returns["page"], $returns["segment"]);

            $this->global['pageTitle'] = 'Garuda Informatics : Product Listing';

            $this->loadViews("product", $this->global, $data, NULL);
        
        }
    }
    

    public function addProduct()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
 
            $this->global['pageTitle'] = 'Garuda Informatics : Add New Product';

            $this->loadViews("addProduct", $this->global,null, NULL);
        }
    }

    public function addProductSave()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('name','Product title','trim|required|max_length[128]');
            $this->form_validation->set_rules('desc','Desc','trim|required|max_length[500]');
            // $this->form_validation->set_rules('img','Upload Image','required|max_length[128]');
            $this->form_validation->set_rules('catagory','Catagory Product','trim|required');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addProductSave();
            }
            else
            {   
                $name = ucwords(strtolower($this->security->xss_clean($this->input->post('name'))));
                $desc = $this->security->xss_clean($this->input->post('desc'));
                // $img = $this->input->post('img');
                $catagory = $this->input->post('catagory');

                $save = array('name'=>$name, 'desc'=>$desc, 'catagory'=>$catagory );

                $this->load->model('product_model');
                $result = $this->product_model->add($save);

                
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'Post Product Creation successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Post Product creation failed');
                }
                
                redirect('/product/addProduct');
            }
        }
    }

    public function editProduct()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            
            $this->global['pageTitle'] = 'Garuda Informatics : Add New Product';

            $this->loadViews("editProduct", $this->global, null, NULL);
        }
    }


    public function editProductSave()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            
        }
    }

    public function deleteproduct()
    {
        if($this->isadmin()== TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $id = $this->uri->segment(3);
            $proses = $this->product_model->deleteProduct($id);
            if(!$proses) 
            {
                redirect('product');
            } else {
                redirect('product','refresh');
                echo "<script>alert('Ooopss!!');</script>";
            }
        }
    }



}

?>