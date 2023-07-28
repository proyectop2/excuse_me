<?php
	session_start();
	if(isset($_SESSION['user'])){ //verifica si hay session iniciada
		if($_SESSION['tipo']>1){

			?>
			<html>
			<head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<title></title>
			</head>
			<body>
				Bienvenid@ <?php echo $_SESSION['nombre']; ?>
			</body>
			</html>

			<?php
		}
		else{
			echo "<script type='text/javascript'>
  alert('El usuario no tiene permiso para esta pagina');
</script>";
		}
	}
	else{
		echo "<script type='text/javascript'>
  alert('Debe de iniciar session primero!');
</script>";
	}
?>