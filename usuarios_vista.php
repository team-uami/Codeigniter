<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>
    
<form method="post">

  <div class="container">
    <label for="nombreUsuario"><b>Agregar Usuario</b></label>
    <input type="text" placeholder="Nombre" name="nombreUsuario" required>
    <input type="text" placeholder="Apellido" name="apellidoUsuario" required>
    <input type="password" placeholder="Contraseña" name="contrasenaUsuario" required>
    <!-- Falta el ROL-->
    <button type="submit" name="AgregarUsuario" value="AgregarUsuario" class="btn btn-primary"> Agregar </button>
    <!--
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle"
                type="button" id="dropdownMenu1" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
          Dropdown
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
          <a class="dropdown-item" href="#!">Action</a>
          <a class="dropdown-item" href="#!">Another action</a>
        </div>
    </div>
    -->
  <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <table class="table table-striped table-hover">
                        
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Rol</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php for ($i = 0; $i < count($userlist); ++$i){?>
                            <tr>
                                <td><?php echo ($i+1); ?></td>
                                <td><?php echo $userlist[$i] -> nombreUsuario ; ?></td> 
                                <td><?php echo $userlist[$i] -> apellidoUsuario; ?></td>
                                <td><?php echo $userlist[$i] -> rol_idrol; ?></td> 
                                <td>
                                    <button type="nameSwitch" name="CambiarNombre" value="CambiarNombre" class="btn btn-primary">Cambiar Nombre</button>
                                    <button type="delete" name="EliminarCuestionario" value="EliminarCuestioanrio" class="btn btn-primary">Eliminar</button>
                                    <
                                    
                                </td>
                            </tr>
                            <?php } ?>
                            
                        </tbody>
                        
                    </table>
                    
                </div>
            </div>
    </div>
  
</form>

    
</body>