<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class seleccionencuesta_model extends CI_Model {
	
	function __construct(){
		parent::__construct();
		$this-> load ->database();
	}
	
	function leerdatos($name=''){
		$this->db->query("SELECT * FROM cuestionario WHERE cuestionario = '".$name."'");
		return $result->row();
	}
}
?>