<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Formulario de estudiantes</title>
</head>
<body>
  <div class="container">
    <h2><center>Formulario de estudiantes</center></h2>
    <?php
include 'barra_navegacion.php';
  ?>
      <form action="" method="post">
    <div class="form-group">
        <label for="id">Identificacion:</label>
        <input type="number" class="form-control" name="id" placeholder="Ingrese su identificacion">
      </div>
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre">
      </div>
      <div class="form-group">
        <label for="fecha">Grado:</label>
        <input type="text" class="form-control" name="grado" placeholder="Ingrese grado">
      </div>
      <input type="submit" name="boton" class="btn btn-primary" value="REGISTRAR"><br><br>
  <a href="../index.php">VOLVER..</a>
    </form>
  </div>
</body>
</html>

<?php
 if(isset($_POST['id'])){
 	$identificacion=$_POST['id'];
 	$nombre=$_POST['nombre'];
 	$grado=$_POST['grado'];
 	
   include ("libreria.php"); 

  $consulta="select * from estudiantes where identificacion='".$identificacion."'"; 
//Echo $consulta; 
  $user=mysqli_query($con,$consulta);
  $fila=mysqli_num_rows($user);
  if($fila>0){
    echo "<script type='text/javascript'>alert('El usuario ya esta registrado!');</script>";
   header("refresh:0 URL=../index.php");
  }
  else{
    $insert="insert into estudiantes (identificacion,nombre,grado) values('".$identificacion."','".$nombre."','".$grado."')";
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
