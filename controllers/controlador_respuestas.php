<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controlador_respuestas extends CI_Controller {
	
	function __construct(){
		parent:: __construct();
		$this-> load ->helper('form');
		$this-> load->model('respuestas_model');
	}

	function index(){
		$this-> load->view('header_administrador');
		$this-> load->view('alta_respuesta');
	}

	function recibirdatos(){
		$data = array (
			'id' => $this -> input -> post('id'),
			'respuesta' => $this -> input -> post('respuesta')
		);
		$this-> respuestas_model-> crearRespuesta( $data );
		$this-> load->view('header_administrador');
		$this-> load->view('alta_respuesta');
	
	}


}

?>