<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="css/boostrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body style=" background-color:#D5D9EC  ;">
<table style="Border: 2px solid darkblue" width=100% class="TabEncas">
  <tr>
    <td width="5%">
    <td width="80%"><center><h1>EXCUSE ME<h1></center></td>
    <td width="5%"><img src="imagen/escudo.jpg" width="80 px"></td>
  </tr>
  </table>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="index.php">inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            contenido
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="mostrarusuarios.php">usuario</a></li>
            <li><a class="dropdown-item" href="#">excusas</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">informacion</a>
        </li>
      </ul>
    </div>
  </div>
   </NAV><br><br>
    
  <table>
  <tr>
  <td width="20%">
    <div style="Border: 2px solid darkblue; border-radius: 7px; margin: 5px; padding: 5px;">
    <br><center><h2>INICIAR SESION</h2><br>
    <form action="backend/validar.php" method="POST">
            <input class="cajalogin" type="text" name="correo" placeholder="correo registrado"><br><br>
            <input class="cajalogin"type="password" name="clave" placeholder="clave registrada"><br><br>
            <input class="cajalogin"type="submit" name="enviar" value="INICIAR"><br><br>
    </form>
    <a href="backend/registro_usu.php">Registrar</a></center><br><br>
    </div>
  </td>
  <td width="70%"><center> </center>
  </td>
     
  </body>
  </html>
 