<?php if ( ! defined ('BASEPATH')) exit('No direct script access allowed');
    
    class Cuestionario_model extends CI_Model{
        
        function __construct(){
            parent::__construct();
            $this -> load -> database();//Get that database running.
        }
        
        function crearCuestionario($nombreCue){
            $query = "INSERT INTO cuestionario (nombreCuestionario) VALUES ('$nombreCue')";
            $this -> db -> query($query);
        }
        function obtenerCuestionario(){
            $sql = 'select nombreCuestionario from cuestionario';
            $query = $this->db->query($sql);
            $result = $query->result();
            return $result;
        }
        function obtenerPreguntas(){
            $sql = 'select nombrePregunta from pregunta';
            $query = $this->db->query($sql);
            $result = $query -> result();
            return $result;
        }
        function obtenerDescripcion(){
            $sql = 'select descripcionPregunta from pregunta';
            $query = $this->db->query($sql);
            $result = $query -> result();
            return $result;
        }
        function getPreguntas(){
            $sql = 'select nombrePregunta,descripcionPregunta from pregunta';
            $query = $this -> db -> query($sql);
            $result = $query -> result();
            return $result;
        }
        function crearPregunta($nombrePregunta, $descripcionPregunta){
            $query = "INSERT INTO pregunta (nombrePregunta, descripcionPregunta) VALUES ('$nombrePregunta','$descripcionPregunta')";
            $this -> db -> query($query);
        }
    }

?>