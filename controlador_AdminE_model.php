<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Controlador_AdminE_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function recuperaPreguntasNoAsignado($Cuestionario_idCuestionario) {
        $query = $this->db->query("select * from pregunta WHERE idPregunta NOT IN (SELECT Pregunta_idPregunta from preguntacuestionario WHERE Cuestionario_idCuestionario=$Cuestionario_idCuestionario )");

        return $query->result();
    }

    function recuperaPreguntasAsignadas($Cuestionario_idCuestionario) {

        $query = $this->db->query("SELECT * FROM pregunta WHERE idPregunta IN(Select Pregunta_idPregunta from preguntacuestionario WHERE Cuestionario_idCuestionario = $Cuestionario_idCuestionario)");

        return $query->result();
    }

    function agregarPreguntaCuestionario($postdata, $ide) {

        $data = array(
            'Pregunta_idPregunta' => $postdata,
            'Cuestionario_idCuestionario' => $ide
        );

        //$this->db->insert('preguntacuestionario', $data);
        //$query = $this->db->query("INSERT INTO `preguntacuestionario` VALUES('$postdata','$ide','0')");
        //echo "INSERT INTO `preguntacuestionario` VALUES('$postdata','$ide','$postdata')";
        return $this->db->insert('preguntacuestionario', $data);
    }

    function quitardeC($postdata, $ide) {
        // $query = $this->db->query("DELETE  FROM `preguntacuestionario` WHERE `Cuestionario_idCuestionario` = '$ide' AND `Pregunta_idPregunta` = '$postdata'");
        //echo"DELETE  FROM `preguntacuestionario` WHERE `Cuestionario_idCuestionario` = '$ide' AND `Pregunta_idPregunta` = '$postdata'";
        // $this->db->query($query);
        $this->db->where('Cuestionario_idCuestionario', $ide);
        $this->db->where('Pregunta_idPregunta', $postdata);
      

       return  $this->db->delete('preguntacuestionario');
    }

}
