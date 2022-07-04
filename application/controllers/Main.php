<?php  

 class Main extends CI_Controller {  
      //functions  
      function index()  
      {  
           $data['title'] = "Upload Image using Ajax JQuery in CodeIgniter";  
           $this->load->view('uploadfile/image_upload', $data);  
      }  
      function ajax_upload()  
      {  
           if(isset($_FILES["image_file"]["name"]))  
           {  
                $config['upload_path'] = './uploads/';  
                $config['allowed_types'] = 'jpg|jpeg|png|gif';  
                $this->load->library('upload', $config);  
                if(!$this->upload->do_upload('image_file'))  
                {  
                     echo $this->upload->display_errors();  
                }  
                else  
                {  
                     $data = $this->upload->data();  

                     //var_dump($data["file_name"]); die();

                     echo '<img src="'.base_url().'uploads/'. $data["file_name"] .'" width="300" height="225" class="img-thumbnail" />';  
                }  
           }  
      }  
 }  