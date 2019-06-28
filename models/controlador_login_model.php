<?php 
session_start();
if(! defined('BASEPATH')) exit('No direct script access allowed');
class Controlador_login_model extends CI_Model{
   function __construct(){
        parent::__construct();
        $this->load->database();
    }
    function checkdata($user,$passw){
      
       $query=$this->db->query("SELECT * FROM usuario WHERE (idusuario= '".$user."' AND contrasena= '".$passw."')");
      
        if($query->num_rows() == 1)
        {
            $query=$this->db->query("SELECT rol_idrol FROM usuario WHERE (idusuario='".$user."' AND contrasena='".$password."')");
            $destino=$query;
            if($destino==1){
               header("Location: http://localhost/Codeigniter/index.php/controlador_login/principalA");
            }
            else{
                 header("Location: http://localhost/Codeigniter/index.php/controlador_login/principalU");
                 $_SESSION['user_id']=$user;
            }
        }
        else
        {
           echo "datos incorrectos ";
        }
        }
        

    }




?>
