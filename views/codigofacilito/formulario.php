<?= form_open("/Codigofacilito/recibirDatos") ?>



<?PHP 
	$nombrePregunta = array(
		'name' => 'nombrePregunta',
		'placeholder' => 'escribe tu Pregunta'

	);
	$descripcionPregunta = array(
		'name' => 'descripcionPregunta',
		'placeholder' => 'describe de tu pregunta'

	);
	$numeroPregunta = array(
		'name' => 'numeroPregunta',
		'placeholder' => 'que numero de pregunta es'

	);
?>
<?= form_label('Pregunta:', 'nombrePregunta')	?>
<?= form_input($nombrePregunta) ?>
<br><br><br>
<?= form_label('Describe tu pregunta', 'descripcionPregunta')	?>
<?= form_input($descripcionPregunta) ?>
<br><br><br>
<?= form_label('Numero de Pregunta', 'numeroPregunta')	?>
<?= form_input($descripcionPregunta) ?>
<br><br><br>
<?= form_submit('','subir pregunta') ?>
<?= form_close() ?>
</body>
</html>