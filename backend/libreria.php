<?php
$servidor="localhost";
$user="root";
$clave="";
$db="excuse_me";//Nombre de la base de datos
$con=mysqli_connect($servidor,$user,$clave,$db)or die("Error al conectar".mysqli_error());
return$con;

?>