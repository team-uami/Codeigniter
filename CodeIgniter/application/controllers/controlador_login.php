<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador_login extends CI_Controller {
    function __construct(){
               parent::__construct();
                $this->load->helper('form');
                $this->load->model('controlador_login_model');
                $this->load->helper('url');
    }
    function index(){
        $this->load->model('controlador_login_model');  
        
        $this->load->view('login');
      if($this->input->post('Login'))
    {
          
             $user= $this->input->post('uname');
            
             $password= $this->input->post('psw');
           
             
        
        $this->controlador_login_model->checkdata($user,$password);
    }
      
        
    }
    function principalA(){
        $this->load->model('controlador_login_model');  
        
        $this->load->view('header_administrador');
    }
    function principalU(){
        $this->load->model('controlador_login_model');  
        
        $this->load->view('header_encuestador');
    }
}
