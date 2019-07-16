<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>
    
<form method="post">
    
  <div class="container">
    <label for="nombreCuestionario"><b>Agregar Cuestionario</b></label>
    <input type="text" placeholder="Nombre de cuestionario." name="nombreCuestionario" required>
    
    <button type="submit" name="AgregarCuestionario" value="AgregarCuestionario" class="btn btn-primary">AgregarCuestionario </button>
   
  </div>
  <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <table class="table table-striped table-hover">
                        
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Cuestionarios</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 0; $i < count($listacuest); ++$i){?>
                            <tr>
                                <td><?php echo ($i+1); ?></td>
                                <td><?php echo $listacuest[$i] -> nombreCuestionario; ?></td>   
                                <td>
                                    <button type="nameSwitch" name="CambiarNombre" value="CambiarNombre" class="btn btn-primary">Cambiar Nombre</button>
                                    <button type="delete" name="EliminarCuestionario" value="EliminarCuestioanrio" class="btn btn-primary">Eliminar</button>
                                    <button type="questions" name="PreguntasCuestionario" value="PreguntasCuestioanrio" class="btn btn-primary">Preguntas</button>
                                    
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