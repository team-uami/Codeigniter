<?php if ( ! defined ('BASEPATH')) exit('No direct script access allowed');
    
    class Usuarios_model extends CI_Model{
        
        function __construct(){
            parent::__construct();
            $this -> load -> database();//Get that database running.
        }
        
        function crearUsuario($nombreUsuario, $apellidoUsuario,$contrasena, $rolUsuario){
            $query = "INSERT INTO usuario (nombreUsuario, apellidoUsuario, contrasena, rol_idrol) VALUES ('$nombreUsuario', '$apellidoUsuario','$contrasena', '$rolUsuario')";
            $this -> db -> query($query);
        }
        
        function getUsuarioInfo(){
            $sql = 'select nombreUsuario,apellidoUsuario,contrasena,rol_idrol from usuario';
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