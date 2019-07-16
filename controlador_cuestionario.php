<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
    
    class Controlador_cuestionario extends CI_Controller {
        
        function __construct(){
            parent:: __construct();
            $this -> load -> helper('form');
            $this -> load -> helper('url');
            $this -> load -> database();
            $this -> load -> model('cuestionario_model');
        }//Let's create the model.
        
        function recibirdatos(){
            $this -> load -> helper('form');
            $this -> load -> model('cuestionario_model');
            $this -> load -> view('header_administrador');
            $this -> load -> view('alta_cuestionario');
        
            //All loads go at the beginning of the function.
            if($this->input->post('AgregarCuestionario')){//This is created off of the view part and is being referenced.
                $nombreCue = $this -> input -> post('nombreCuestionario');
                $this -> cuestionario_model -> crearCuestionario($nombreCue);
            }
            
            //Los 'load views' del header van al inicio de lo que cargas!
            
        //Need to place the if condition in
        }//End of recibirdatos.
        function mostrardatos(){
            //Esto solo es para agregar a el cuestionario
            $this -> load -> helper('form');
            //Load in the model first
            $this -> load -> model('cuestionario_model');
            //Load in the view
            $this->load->view('header_administrador');
            $this->load->view('alta_cuestionario',$data);
            
            if($this->input->post('AgregarCuestionario')){
                $nombreCue = $this -> input -> post('nombreCuestionario');
                $this -> cuestionario_model -> crearCuestionario($nombreCue);   
            } 
        }
        function index(){
            $this->load->view('header_administrador');
            $data['listacuest'] = $this -> cuestionario_model -> obtenerCuestionario();
            $data['listaidcuest'] = $this-> cuestionario_model -> obtenerIdCuestionario();
            $this -> load -> view('muestra_cuestionario', $data);
           
        }
        function opciones(){
            
            $this -> load -> helper('form');
            //Load in the model first
            $this -> load -> model('cuestionario_model');
            //Call the function in the model to get data
            $resultados = $this -> cuestionario_model -> obtenerCuestionario();
            $data['listacuest'] = $resultados;
            
            //Get more data, the id of Cuestionario
            $resultsId = $this-> cuestionario_model -> obtenerIdCuestionario();
            $data['listaidcuest'] = $resultsId;
            //Load in the view
            $this->load->view('header_administrador');
            $this->load->view('muestra_cuestionario',$data);
            
            if($this->input->post('CambiarNombre')){//pone la ventanilla de el cambio de nombre.
                //Obtener el atributo del cuestionario llamado nombre y despues cambiarlo a otro.
                
            }
            
            if($this->input->post('PreguntasCuestionario')){
                
            }
        }
        
        
        
        
        
        
        function eliminar_cuestionario($id){
                $this->db->where('idCuestionario',$id);
                $this->db->delete('cuestionario');
                redirect('controlador_cuestionario/index');
        }  
        
        
        
        
        
        
        
        /*
        function pruebaPreguntas(){
            $this -> load -> helper('form');
            //Load in the model first
            $this -> load -> model('cuestionario_model');
            //Call the function in the model to get data
            $pregresults = $this->cuestionario_model -> getPreguntas();
            $data['preglist'] = $pregresults;
            //Load in the view
            $this->load->view('header_administrador');
            $this->load->view('muestra_preguntas',$data);
            
            
            if($this->input->post('AgregarPregunta')){
                $nombrePregunta = $this -> input -> post('nombrePregunta');
                $descripcionPregunta = $this -> input -> post('descripcionPregunta');
                $this -> cuestionario_model -> crearPregunta($nombrePregunta, $descripcionPregunta);

                
            }/*
            if($this->input->post('ModificarCuestionario')){
                
            }
            if($this->input->post('BorrarCuestionario')){
                
            }*/
        }
    



?>

