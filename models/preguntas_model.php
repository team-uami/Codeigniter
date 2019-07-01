<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Preguntas_model extends CI_Model {
	
	function __construct(){
		parent::__construct();
		$this-> load ->database();
	}
	
	function crearPregunta($data){
		$this-> db -> insert ('pregunta',array('idPregunta'=> $data['id'], 
                                                        'nombrePregunta'=> $data['pregunta'],
                                                        'descripcionPregunta'=> $data['descripcion'] ));
	}
}
?>