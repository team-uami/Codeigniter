<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
    
    class Controlador_cuestionario extends CI_Controller {
        
        function __construct(){
            parent:: __construct();
            $this -> load -> helper('form');
            $this -> load -> model('cuestionario_model');
        }//Let's create the model.
        
        function recibirdatos(){
            $this -> load -> helper('form');
            $this -> load -> model('cuestionario_model');
            $this -> load -> view('header_administrador');
            $this -> load -> view('alta_cuestionario');
        
            //All loads go at the beginning of the function.
            if($this->input->post('AgregarCuestionario')){
                $nombreCue = $this -> input -> post('nombreCuestionario');
                $this -> cuestionario_model -> crearCuestionario($nombreCue);
                
            }
            
            //Los 'load views' del header van al inicio de lo que cargas!
            
        //Need to place the if condition in
        }//End of recibirdatos.
    }



?>

