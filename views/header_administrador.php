<?php

?>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

<ul>
  <li><a href="http://localhost/Codeigniter/index.php/controlador_general/admin">Home</a></li>
  
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Usuarios</a>
    <div class="dropdown-content">
      
      <a href="http://localhost/Codeigniter/index.php/controlador_adminU/nuevo"> Nuevo Usuario</a>
      <a href="http://localhost/Codeigniter/index.php/controlador_adminU/modificar"> Modificar usuario</a>
      <a href="http://localhost/Codeigniter/index.php/controlador_adminU/eliminar"> Eliminar Usuario</a>
      
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Preguntas</a>
    <div class="dropdown-content">
      
      <a href="http://localhost/Codeigniter/index.php/controlador_adminP/nuevo"> Crear Pregunta</a>
      <a href="http://localhost/Codeigniter/index.php/controlador_adminP/eliminar"> Eliminar Pregunta</a>
      <a href="http://localhost/Codeigniter/index.php/controlador_adminarP/modificar"> Modificar Pregunta</a>
      
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Encuestas</a>
    <div class="dropdown-content">
      
      <a href="http://localhost/Codeigniter/index.php/controlador_adminE/nuevo"> Crear Encuesta</a>
      <a href="http://localhost/Codeigniter/index.php/controlador_adminE/modificar"> Modificar Encuesta</a>
      <a href="http://localhost/Codeigniter/index.php/controlador_adminE/eliminar"> Eliminar Encuesta</a>
      
    </div>
  </li>
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Respuestas</a>
    <div class="dropdown-content">
      
      <a href="http://localhost/Codeigniter/index.php/controlador_adminR/nuevo"> Crear Respuesta</a>
      <a href="http://localhost/Codeigniter/index.php/controlador_adminR/modificar"> Modificar Respuesta</a>
      <a href="http://localhost/Codeigniter/index.php/controlador_adminR/eliminar"> Eliminar Respuesta</a>
      
    </div>
  </li>
  <li><a href="">Salir</a></li>
</ul>


</body>
</html>
