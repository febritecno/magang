<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

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
        $this->load->library('form_validation');
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

            $count = $this->product_model->productcount($searchText);

            $returns = $this->paginationCompress ( "product/index/", $count, 5,3);
            
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
            $this->form_validation->set_rules('name','Product title','trim|required|max_length[128]');
            $this->form_validation->set_rules('desc','Desc','trim|required|max_length[500]');
            $this->form_validation->set_rules('img','Upload Image');
            $this->form_validation->set_rules('catagory','Catagory Product','trim|required');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->session->set_flashdata('error', 'Post Product creation failed');
                redirect('addProduct');
            }
            else
            {   
//upload --------------------------------------
                $fileData = array();
                $config['upload_path']          = './assets/product';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['overwrite']            = TRUE;
                $config['max_size']             = 800;
                $config['min_width']            = 350;
                $config['min_height']           = 200;

                $this->load->library('upload', $config);

            
                if ($this->upload->do_upload('img')) {

                $data = $this->upload->data(); // Get the file data
                $fileData[] = $data; // It's an array with many data
                // Interate throught the data to work with them
                foreach ($fileData as $file) {
                    $file_data = $file;
                    }
                }else{
                    $this->session->set_flashdata('error', 'Error Upload! please input image');
                }
//------------------------------

                $name = ucwords(strtolower($this->security->xss_clean($this->input->post('name'))));
                $desc = $this->security->xss_clean($this->input->post('desc')); //save from name tag html
                $catagory = $this->input->post('catagory');
                $img= $file_data['file_name']; //save to database filename upload image

                $save = array('name'=>$name, 'desc'=>$desc, 'img' =>$img, 'catagory'=>$catagory ); //kumpul data

                $this->load->model('product_model');
                $result = $this->product_model->add($save); //setor ke model terus di save

                
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'Post Product Creation successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Post Product creation failed');
                }
                
                redirect('addProduct');
            }
        }
    }



    public function editProduct($id=Null) //id=kosong
    {
        if($this->isAdmin() == TRUE || $id == 0)
        {
            $this->loadThis();
        }
        else
        {
            if($id == null)
            {
                redirect('Product');
            }
            $data['userInfo'] = $this->product_model->info($id);
            
            $this->global['pageTitle'] = 'Garuda Informatics : Add New Product';

            $this->loadViews("editProduct", $this->global, $data, NULL);
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
            $this->load->library('form_validation');

            $id = $this->input->post('id');
            
//upload------------------------------------
                $fileData = array();
                $config['upload_path']          = './assets/product';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['overwrite']            = TRUE;
                $config['max_size']             = 800;
                $config['min_width']            = 350;
                $config['min_height']           = 200;

                $this->load->library('upload', $config);

            
                if ($this->upload->do_upload('img')) {

                $data = $this->upload->data(); // Get the file data
                $fileData[] = $data; // It's an array with many data
                // Interate throught the data to work with them
                foreach ($fileData as $file) {
                    $file_data = $file;
                    }
                }else{
                    $this->session->set_flashdata('error', 'Error Upload! please input image');
                    redirect('product');
                }
//-------------------------------

            
            $this->form_validation->set_rules('name','Product title','trim|required|max_length[128]');
            $this->form_validation->set_rules('desc','Desc','trim|required|max_length[500]');
            $this->form_validation->set_rules('img','Upload Image');
            $this->form_validation->set_rules('catagory','Catagory Product','trim|required');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->session->set_flashdata('error', 'Update Product creation failed');
                redirect('product');
            }
            else
            {   

                $name = ucwords(strtolower($this->security->xss_clean($this->input->post('name'))));
                $desc = $this->security->xss_clean($this->input->post('desc'));
                $catagory = $this->input->post('catagory');
                $img= $file_data['file_name'];


                $save = array('name'=>$name, 'desc'=>$desc, 'img'=>$img,'catagory'=>$catagory );
    

                $this->load->model('product_model');
                $result = $this->product_model->editsave($id,$save);

                
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'Update Product Creation successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Update Product creation failed');
                }
                
                redirect('product');
            }
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
            $this->db->where('id',$id);
            $query = $this->db->get('tbl_product')->row();
            unlink(realpath('assets/product/'.$query->img));
            if($query) 
            {
                $this->session->set_flashdata('success', 'Delete operation successfully');
                $this->product_model->deleteProduct($id);
                redirect('product');
            } else {
                $this->session->set_flashdata('error', 'Error delete operation');
                redirect('product');
            }
        }
    }

    public function sql()
    {
        $this->load->dbutil();
        $prefs = array(     
                'format'      => 'zip',             
                'filename'    => 'sql-backup.sql'
              );
        $backup =& $this->dbutil->backup($prefs); 
        $db_name = 'backup-on-'. date("Y-m-d-H-i-s") .'.zip';
        $save = base_url().'/assets/temp'.$db_name;
        $this->load->helper('file');
        write_file($save, $backup);
        $this->load->helper('download');
        force_download($db_name, $backup);
    }



}

?>