<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Codigofacilito_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function crearPregunta($data){
		$this->db->insert('pregunta',array('idPregunta'=>4, 'nombrePregunta'=>$data['nombrePregunta'],'descripcionPregunta'=>$data['descripcionPregunta']));
		header("Location: http://localhost/Codeigniter/index.php/codigofacilito/recibirdatos");
	}

}

?>