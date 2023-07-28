<?php
include 'libreria.php';
$consult ="SELECT* FROM usuarios";
$resultado =mysqli_query($con,$consult);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div style ="text-align: center;">
       <h1>mostrar usuarios</h1>
       <form action="" method="post">
       <?php
  include 'barra_navegacion.php';
  ?>

       <nav class="navbar bg-body-tertiary">
   <div class="container-fluid">
      <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>


</form>
</div>

<?php
include ("libreria.php"); 

 if(isset($_POST['enviar'])){
    $busqueda= $_POST['busqueda'];
    
    $consulta = $con->query=("select * from usuarios where idusuarios=='".$busqueda."'");
    
    

  }



 
?>      
       <fieldset  style="Border: 2px solid darkblue">
       <table style=" background-color:#03A9F4;width:100%">
           <tr>
               <td width=20%>identificacion</td>
               <td width=20%>nombres</td>
               <td width=20%>fecha de nacimiento</td>
               <td width=20%>telefono</td>
               <td width=20%>correo electronico</td>
           </tr>  
            
           <?php
           while($vec= mysqli_fetch_array($resultado)){ ?>
            <tr>
                <td width=20%><?php echo $vec[1] ?></td>
                <td width=20%><?php echo $vec[2] ?></td>
                <td width=20%><?php echo $vec[3] ?></td>
                <td width=20%><?php echo $vec[4] ?></td>
                <td width=20%><?php echo $vec[5] ?></td>
                <td>
                    <a href="actregistro_usu.php?doc=<?php echo $vec[1] ?>">Act</a>
                </td>
            </tr>  
            <?php } ?>
            

        </table>  
        </fieldset>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="js/bootstrap.js"></script>
</body> 
</html>       


         

