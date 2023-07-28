<?php
$doc=$_GET['doc'];
include 'libreria.php';
$query="SELECT * from estudiantes where identidicacion=$doc";
$cons=mysqli_query($con,$query);
$fila=mysqli_fetch_array($cons);
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>registro</title>
</head>
<style type="text/css">
</style>
<body style="background-color:#BDC4F0">
<br><center><h1>REGISTRO</h1>
<form action="" method="post">
    <div class="form-group">
        <label for="id">IDENTIFICACION:</label>
        <input type="number" class="form-control" value="<?php echo $fila[1] ?>" name="id" placeholder="Ingrese su identificacion">
      </div>
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" value="<?php echo $fila[2] ?>" name="nombre" placeholder="Ingrese su nombre">
      </div>
      <div class="form-group">
        <label for="grado">grado:</label>
        <input type="text" class="form-control" value="<?php echo $fila[3] ?>" name="grado" placeholder="Ingrese su grado">
      </div>
    
      <input type="submit" name="boton" class="btn btn-primary" value="REGISTRAR"><br><br>
  <a href="../index.php">VOLVER..</a>
    </form>
</body>
</html>

<?php
 if(isset($_POST['id'])){
 	$identificacion=$_POST['id'];
 	$nombre=$_POST['nombre'];
 	$fecha=$_POST['fecha'];
 	$telefono=$_POST['telefono'];
 	$correo=$_POST['correo'];
   include ("libreria.php"); 

  $consulta="UPDATE usuarios SET idusuarios='$identificacion',nombre='$nombre',fecha_nac='$fecha',
  telefono='$telefono',correo='$correo' WHERE idusuarios=$identificacion"; 
//Echo $consulta; 
  $user=mysqli_query($con,$consulta);
  if($user){
    echo "<script type='text/javascript'>alert('El usuario ya se actualizo');</script>";
   header("refresh:0 URL=../index.php");
  }
  else{
    echo "tiene un error en la consulta";
  }
}
  
    //header("location:../index.php");	  


?>