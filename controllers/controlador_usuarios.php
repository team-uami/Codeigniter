<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
    
    class Controlador_usuarios extends CI_Controller {
        
        function __construct(){
            parent:: __construct();
            $this -> load -> helper('form');
            $this -> load -> helper('url');
            $this -> load -> database();
            $this -> load -> model('usuarios_model');
        }//Let's create the model.
        
        function agregarUsuarios(){
            $this -> load -> helper('form');
            //Load in the model first
            $this -> load -> model('usuarios_model');
            //Call the function in the model to get data
            $usuarioResults = $this->usuarios_model -> getUsuarioInfo();
            $data['userlist'] = $usuarioResults;
            //Load in the view
            $this->load->view('header_administrador');
            $this->load->view('usuarios_vista',$data);
            
            
            if($this->input->post('AgregarUsuario')){
                $nombreUsuario = $this -> input -> post('nombreUsuario');
                $apellidoUsuario = $this -> input -> post('apellidoUsuario');
                $contrasena = $this -> input -> post('contrasena');
                $rolUsuario = $this -> input -> post('rol_idrol');
                $this -> usuarios_model -> crearUsuario($nombreUsuario, $apellidoUsuario,$contrasena, $rolUsuario);

                
            }/*
            if($this->input->post('ModificarCuestionario')){
                
            }
            if($this->input->post('BorrarCuestionario')){
                
            }*/
        }
    }



?>

