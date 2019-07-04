<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controlador_seleccionencuesta extends CI_Controller {
	
	function __construct(){
		parent:: __construct();
		$this-> load ->helper('form');
		$this-> load->model('seleccionencuesta_model');
	}

	function index(){
		$this-> load->view('header_administrador');
		$this-> load->view('header_seleccionencuesta');
	}

	function datos(){
		$result =  $this -> db -> post('encuesta');
		$data = array('consulta' => $result);
		$this-> preguntas_model-> leerdatos($result);
		$this-> load->view('header_administrador');
		$this-> load->view('header_seleccionencuesta');
	
	}


}

?>