<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');


class Codigofacilito extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('codigofacilito_model');
	}	


	function index(){
		$this->load->library('menu',array('inicio','contacto','cursos'));
		$data['mi_menu']= $this->menu->construirMenu();
		$this->load->view('codigofacilito/headers');
		$this->load->view('codigofacilito/bienvenido',$data);
	}
	
	function nuevo(){
		$this->load->helper('form');
		$this->load->view('codigofacilito/headers');
		$this->load->view('codigofacilito/formulario');
	}
	function recibirDatos(){
		$data = array(
			'nombrePregunta' => $this->input->post('nombrePregunta'),
			'descripcionPregunta' => $this->input->post('descripcionPregunta')
		);
		$this->codigofacilito_model->crearPregunta($data);
		$this->load->view('codigofacilito/headers');
		$this->load->view('codigofacilito/bienvenido');
	}
}

?>