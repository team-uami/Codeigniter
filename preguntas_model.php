<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Preguntas_model extends CI_Model {
	
	function __construct(){
		parent::__construct();
		$this-> load ->database();
	}
	
	function crearPregunta($data){  
            $query=$this->db->query("INSERT INTO `pregunta` (`idPregunta`, `nombrePregunta`, `descripcionPregunta`) VALUES (NULL, '".$data."', 'asdfg');");
	}
}
?>