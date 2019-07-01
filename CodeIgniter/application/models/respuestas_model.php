<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Respuestas_model extends CI_Model {
	
	function __construct(){
		parent::__construct();
		$this-> load ->database();
	}
	
	function crearRespuesta($data){
		$this-> db -> insert ('respuesta',array('idRespuesta'=> $data['id'], 'textoRespuesta'=> $data['respuesta'],'Pregunta_idPregunta'=> '1'));
	}
}
?>