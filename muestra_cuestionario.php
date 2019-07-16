<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>
    
<form method="post">
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
                                <td><a href = '/CodeIgniter/Index.php/controlador_AdminE?id=<?php echo $listaidcuest[$i] -> idCuestionario; ?>'><?php echo $listacuest[$i] -> nombreCuestionario; ?> </a></td>
                                <td><a href="<?php echo base_url() . "index.php/controlador_cuestionario/eliminar_cuestionario/" . $listaidcuest[$i]->idCuestionario; ?>">Borrar</a></td>
                                
                                
                            </tr>
                            <?php } ?>
                            
                        </tbody>
                        
                    </table>
                    
                </div>
            </div>
    </div>
  
</form>

    
</body>