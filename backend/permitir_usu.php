<?php
	session_start();
	if(isset($_SESSION['user'])){ //verifica si hay session iniciada
		if($_SESSION['tipo']<1){

?>
<html>
<head>			
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilo/estilo.css">
</head>
<body style="background-color:#D5D9EC">
<table width=100% class="TabEncas">
  <tr>
    <td width="5%">
    <td width="80%"><center><h1>EXCUSE ME<h1></center></td>
    <td width="5%"><img src="imagen/escudo.jpg" width="80 px"></td>
  </tr>
  </table>

  <NAV class="navbar">
    <div>
          <ul class="nav">
            <li><a href="#page-top">Inicio</a></li>
            <li><a href="#contenidos">Contenidos</a>
              <ul>
                <li><a href="#Sistemas"> Especialidad Sistemas</a></li>
                <li><a href="">Especialidad Comercio</a></li>
                <li><a href="">Tecnologia e informatica</a></li>
              </ul>

            </li>
            <li><a  href="paginas/contacto.html">Contacto</a></li>
          </ul>
        
    </div><br>
   </NAV><br><br>
    
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