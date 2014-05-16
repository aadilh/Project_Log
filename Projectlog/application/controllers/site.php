<?php
    
    class Site extends CI_Controller{
        
        public function index(){
            $this->home();
        }
        
        public function home (){
            $this->load->view("header");
            $this->load->view("body_home");
            $this->load->view("topbar");
        }
        public function logview (){
            $this->load->view("header");
            $this->load->view("body_view");
            
            $this->load->model("data_model");
            
            
            $i=114;
            
            while($i<=131)
            {
                $data['rows'] =  $this->data_model->get_data($i); 
                $this->load->view("body_view_log",$data); 
                $i=$i+1;
            }
            $i=201;
            while($i<=224)
            {
                $data['rows'] =  $this->data_model->get_data($i); 
                $this->load->view("body_view_log");
                $i=$i+1;
            }
            
            
            
            
          //  $this->load->view("body_view_extra");
            $this->load->view("topbar");
        }
        
        public function addtolog(){
            $this->load->library("form_validation");
            $name = $this->input->post("user");
            $date = ($this->input->post("date"))*1  + ($this->input->post("month")*100) ;
            $log = $this->input->post("log");
            
                      
             
            $this->load->model("data_model");
            $this->data_model->post_data($name,$date,$log);
            
            
             $this->load->view("header");
            $this->load->view("body_view");
            
            $this->load->model("data_model");
            
            
            $i=114;
            
            while($i<=131)
            {
                $data['rows'] =  $this->data_model->get_data($i); 
                $this->load->view("body_view_log",$data); 
                $i=$i+1;
            }
            $i=201;
            while($i<=224)
            {
                
                
                $data['rows'] =  $this->data_model->get_data($i); 
                $this->load->view("body_view_log",$data);
                $i=$i+1;
            }
            
            
            
            
          //  $this->load->view("body_view_extra");
            $this->load->view("topbar");
            
            
            
        }
        
    }
    
?>