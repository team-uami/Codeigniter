<?= form_open("/cursos/recibirdatos") ?>
<?PHP 
	$nombrePregunta = array(
		'name' => 'nombrePregunta',
		'placeholder' => 'escribe tu Pregunta'

	);
	$descripcionPregunta = array(
		'name' => 'descripcionPregunta',
		'placeholder' => 'describe de tu pregunta'

	);
?>
<?= form_label('Pregunta:', 'nombrePregunta')	?>
<?= form_input($nombrePregunta) ?>
<br><br><br>
<?= form_label('Describe tu pregunta', 'descripcionPregunta')	?>
<?= form_input($descripcionPregunta) ?>
<?= form_submit('','subir pregunta') ?>
<?= form_close() ?>
</body>
</html>