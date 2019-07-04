<?php if ( ! defined ('BASEPATH')) exit('No direct script access allowed');
    
    class Cuestionario_model extends CI_Model{
        
        function __construct(){
            parent::__construct();
            $this -> load -> database();//Get that database running.
        }
        
        function crearCuestionario($nombreCue){
            $query = "INSERT INTO cuestionario (idCuestionario, nombreCuestionario) VALUES (NULL,'$nombreCue')";
            $this -> db -> query($query);
        }
        
    }

?>