<?= form_open("/controlador_respuestas/recibirdatos") ?>
<head>
    <style>
        div.relative {
            position: relative;
            top: 80px;
            
            width: 300px;            
            height: 300px;
            border: 3px solid #ffffff;
        }

        
        h1 {
            text-align: aling;
            text-transform: uppercase;
            color: #808080;
        }


        .button {
          background-color: #f44336;
          border: none;
          color: white;
          padding: 15px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
        }
    </style>
</head>

<?php
  $id = array(
    'name'=> 'id',
    'placeholder' => 'Ingrese id'
  );

  $respuesta = array(
    'name'=> 'respuesta',
    'placeholder' => 'Ingrese respuesta'
  );
?>
    
        <h1>
            <?= form_label('ID','id') ?>
            <?= form_input($id) ?>
            <br><br>
            <?= form_label('Texto Respuesta','respuesta') ?>
            <?= form_input($respuesta) ?>
            <br><br>
            </h1>
          <button class="button">Aceptar</button>


<?= form_close() ?>
</body>
</html>