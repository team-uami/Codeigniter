<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controlador_preguntas extends CI_Controller {
	
	function __construct(){
		parent:: __construct();
		$this-> load ->helper('form');
		$this-> load->model('preguntas_model');
	}

	function index(){
		$this-> load->view('header_administrador');
		$this-> load->view('alta_pregunta');
	}

	function recibirdatos(){
		$data = array (
			'id' => $this -> input -> post('id'),
			'pregunta' => $this -> input -> post('nombrePregunta'),
                        'descripcion' => $this -> input -> post('descripcionPregunta')
		);
		$this-> preguntas_model-> crearPregunta( $data );
		$this-> load->view('header_administrador');
		$this-> load->view('alta_pregunta');
	
	}


}

?>