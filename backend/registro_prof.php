<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Formulario de Profesores</title>
</head>
<body>
  <div class="container">
    <h2><center>Formulario de Profesores</center></h2>
    <?php
  include 'barra_navegacion.php';
  ?>
      <form action="" method="post">
    <div class="form-group">
        <label for="id">IDENTIFICACION:</label>
        <input type="number" class="form-control" name="id" placeholder="Ingrese su identificacion">
      </div>
    <div class="form-group">
        <label for="nombre">NOMBRE:</label>
        <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre">
      </div>
      <input type="submit" name="boton" class="btn btn-primary" value="REGISTRAR"><br><br>
  <a href="../index.php">VOLVER..</a>
    </form>
  </div>
</body>
</html>

<?php
 if(isset($_POST['id'])){
    $idprofesores=$_POST['id'];
    $nombre=$_POST['nombre'];
   include ("libreria.php"); 

  $consulta="select * from profesores where idprofesores='".$idprofesores."'"; 
//Echo $consulta; 
  $user=mysqli_query($con,$consulta);
  $fila=mysqli_num_rows($user);
  if($fila>0){
    echo "<script type='text/javascript'>alert('El profesor ya esta registrado!');</script>";
   header("refresh:0 URL=../index.php");
  }
  else{
    $insert="insert into profesores (idprofesores,nombre) values('".$idprofesores."','".$nombre."')";
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
