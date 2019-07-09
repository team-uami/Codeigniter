
<html>  
    <head>
        <title> Prueba de muestra</title>
        <meta name="viewport" content ="width=devide-width, initial-scale=1.0">
        <!--Link in the bootsrtap css file-->
        <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <table class="table table-striped table-hover">
                        
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NameSpace1</th>
                                <th>NameSpace2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 0; $i < count($listacuest); ++$i){?>
                            <tr>
                                <td><?php echo ($i+1); ?></td>
                                <td><?php echo $listacuest[$i] -> nombreCuestionario; ?></td>   
                                
                            </tr>
                            <?php } ?>
                            
                            
                        </tbody>
                        
                    </table>
                    
                </div>
            </div>
        </div>
    </body>

</html>