<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Formulario de Usuario</title>
</head>
<body>
  <div class="container">
    <h2><center>Formulario de Usuario</center></h2>
    <?php
include 'barra_navegacion.php';
  ?>
    
      <form action="" method="post">
    <div class="form-group">
        <label for="id">IDENTIFICACION:</label>
        <input type="number" class="form-control" name="id" placeholder="Ingrese su identificacion">
      </div>
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre">
      </div>
      <div class="form-group">
        <label for="fecha">Fecha de nacimiento:</label>
        <input type="date" class="form-control" name="fecha" placeholder="Ingrese su fecha de nacimiento">
      </div>
      <div class="form-group">
        <label for="tel">telefono:</label>
        <input type="text" class="form-control" name="telefono" placeholder="Ingrese su telefono">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="correo" placeholder="Ingrese su correo electronico">
      </div>
      <div class="form-group">
        <label for="contrasena">clave:</label>
        <input type="password" class="form-control" name="clave1" placeholder="Ingrese su clave">
      </div>
      <div class="form-group">
        <label for="confirmar-contrasena">Confirmar clave:</label>
        <input type="password" class="form-control" name="clave2" placeholder="Confirme su clave">
      </div>
      <input type="submit" name="boton" class="btn btn-primary" value="REGISTRAR"><br><br>
  <a href="../index.php">VOLVER..</a>
    </form>
  </div>
</body>
</html>

<?php
 if(isset($_POST['id'])){
 	$idusuarios=$_POST['id'];
 	$nombre=$_POST['nombre'];
 	$fecha_nac=$_POST['fecha'];
 	$telefono=$_POST['telefono'];
 	$correo=$_POST['correo'];
 	$clave1=$_POST['clave1'];
  $clave2=$_POST['clave2'];
  
   include ("libreria.php"); 

  $consulta="select * from usuarios where idusuarios='".$idusuarios."' OR correo='".$correo."'"; 
//Echo $consulta; 
  $user=mysqli_query($con,$consulta);
  $fila=mysqli_num_rows($user);
  if($fila>0){
    echo "<script type='text/javascript'>alert('El usuario ya esta registrado!');</script>";
   header("refresh:0 URL=../index.php");
  }
  else{
    $insert="insert into usuarios (idusuarios,nombre,fecha_nac,telefono,correo,clave) values('".$idusuarios."',
    '".$nombre."','".$fecha_nac."','".$telefono."','".$correo."','".$clave1."')";
      Echo $insert;
      
      $registro=mysqli_query($con,$insert);
      if($registro){
       echo "<script type='text/javascript'>alert('Registro exitoso!');</script>";
       header("location:../index.php");
      }
        

     
  }

}

 
 //header("location:../index.php");	  


?>
