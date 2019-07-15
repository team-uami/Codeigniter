

<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  crossorigin="anonymous">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

    </head>

    <body>

        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <form method="post">
                        <table class ="table">
                            <thead class="thead-dark">
                                <tr >
                                    <th align="right"> Preguntas  </th>
                                    <th align="left"> Disponibles </th>
                                </tr>
                                <tr >

                                    <th scope="col">Pregunta</th>


                                    <th scope="col">Seleccionar</th>

                                </tr>
                            </thead>
                            <?php
                            $i = 1;
                            foreach ($preguntas as $row) {
                                ?>
                                <tr>


                                    <td><?php echo $row->nombrePregunta ?></td>

                                    <td colspan="2" align="center">
                                        <button type="submit" class="btn btn-default" aria-label="Left Align" value="<?php echo $row->idPregunta ?>" name="aderecha">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        </button></td>


                                </tr>
                                <?php
                                $i++;
                            }
                            ?>

                        </table>



                    </form>
                </div>    
                <div class="col col-lg-2">

                </div>   

                <div class="col-md-auto"> 
                    <form method="post">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr >
                                    <th class="text-right"> Preguntas en </th>
                                    <th class="text-left"> el Cuestionario </th>
                                </tr>
                                <tr >

                                    <th scope="col">Pregunta</th>


                                    <th scope="col">Seleccionar</th>

                                </tr>
                            </thead>
                            <?php
                            $j = 1;
                            /* @var $data3 type */
                            foreach ($pregsCuesionario as $row) {
                                ?>
                                <tr>


                                    <td><?php echo $row->nombrePregunta ?></td>


                                    <td colspan="2" align="center"><button type="submit" class="btn btn-default" aria-label="Left Align" value="<?php echo $row->idPregunta ?>" name="aizquierda">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        </button></td>


                                </tr>
                                <?php
                                $j++;
                            }
                            ?>


                        </table>

                    </form> 

                </div>    
            </div>
        </div>


    </body>


</html>


