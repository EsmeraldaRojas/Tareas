<!DOCTYPE html>
 <link href="demo.css" type="text/css" rel="stylesheet"></link>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<?php
  include("include/cabecera.php");
    require("connect_db.php");

$idticket=$_POST['id_ticket'];
$idroute=$_POST['id_route'];


$consulta2="SELECT id_driver,id_bus FROM viajes WHERE id_route='$idroute'";

$resultado2=mysqli_query($mysqli,$consulta2);

while($fila=mysqli_fetch_row($resultado2))
{
$identifier_of_product=$fila['0'];
$idbus=$fila['1'];
}


 

?>

<html>
<head><!--Cargar stilo-->

  <!--icono de la pagina-->
<link rel="icon" type="image/png" href="logo.png" id="pagelogo" alt="logo"/>
<!--meta-->
<!-- SCRIPTS JS-->
 <!--Cargar stilo-->



 <link href="demo.css" type="text/css" rel="stylesheet"></link>
 <link rel="icon" type="image/png" href="logo.png" id="pagelogo" />
  <!--icono de la pagina-->

<meta http-equiv="Content-type" content="text/html; charset=utf-8">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.css" >


<!-- jQuery library -->
<link rel="stylesheet" href="/js/jquery.js">


<link rel="stylesheet" href="/js/jquery-1.8.3.min.js">


<!-- Popper JS -->
<script src="/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="/js/bootstrap.js"></script>



<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--stilos-->
	<title><</title>
<style type="text/css">
   #div
{
width: 80vw;
background-color:rgba(70,0,0, 0.4);


padding: 3.5vh;
}


body
{
}

/*borde*/;
box-shadow: gray 1px 1px 1px 1px;

padding: 0px;
margin: 0px;
/* poosicion del titulo*/
}
</style>
</head>
<body class="bg-dark">


<!--formulario de registro de alumnos-->
<div id="div" class="container-fliud ">
<center>
<a href="index.php" class="btn btn-dark float-md-left"><span class="icon icon-undo2"> Volver</span></a>
<br>

</center>



<br>
<h1 class="text-white">chofer</h1><hr>

<?php





require("connect_db.php");



$consulta2="SELECT nombres,img,apellidos,nivel FROM conductores WHERE id_driver='$identifier_of_product'";

$resultado2=mysqli_query($mysqli,$consulta2);

while($fila=mysqli_fetch_row($resultado2))
{
    echo "";
    echo "<div style='   border-radius:15px; border:solid black 3px; background-color:lightgrey;' class='card w-75 p-2   m-3'>";
    echo "<div class='card-header bg-info text-white rounded-top'>";
echo "<h1 class='card-title'>Licencia de conducir</h1></div><div class='card-body'>";
  echo "<img  class='float-left mr-3 card-img-top ' style='max-width:200px; max-height:200px;' src='".$fila['1']."'/> <h2 class='card-subtitle'>  Nombres:".$fila['0']."</h2>";

echo "<h2>  Apellidos: ".$fila['2']."</h2><br><br>";
echo "<h2 class='float-right' > Nivel <span class='badge badge-info'>
".$fila['3']."</span></h2><br>";
echo "";
echo "</div></div>";
$title=$fila['0'];
$description=$fila['2'];
$imagen=$fila['1'];
$precio=$fila['3'];
}




?>

<h1 class="text-white">Vehiculo</h1><hr>

<?php

$consulta3="SELECT marca,img,asientos,clase FROM autobuses WHERE id='$idbus'";

$resultado3=mysqli_query($mysqli,$consulta3);

while($fila=mysqli_fetch_row($resultado3))
{
    echo "";
    echo "<div style='   border-radius:15px; border:solid black 3px;' class='card  w-75 p-4   m-3'>";
    echo "<div class='card-header'>";
echo "<h1 class='card-title'>Carnet de circulacion</h1></div><div class='card-body'>";
  echo "<img  class='float-left mr-3 card-img-top ' style='max-width:200px; max-height:200px;' src='".$fila['1']."'/> <h2 class='card-subtitle'>  Marca/modelo:".$fila['0']."</h2>";

echo "<h2> Asientos: ".$fila['2']."</h2><br><br>";
echo "<h2 class='float-right' > Clase <span class='badge badge-success'>
".$fila['3']."</span></h2><br>";
echo "";
echo "</div></div>";
$title=$fila['0'];
$description=$fila['2'];
$imagen=$fila['1'];
$precio=$fila['3'];
}



?>



<h1 class="text-white">Ruta</h1><hr>

<?php

$consulta4="SELECT destino,precio,ETA FROM viajes WHERE id_route='$idroute'";

$resultado4=mysqli_query($mysqli,$consulta4);

while($fila=mysqli_fetch_row($resultado4))
{
    echo "";
    echo "<div style='   border-radius:15px; border:solid black 3px;' class='card  w-75 p-4   m-3'>";
    echo "<div class='card-header'>";
echo "<h1 class='card-title'>Destino</h1></div><div class='card-body'>";
  echo "<h1  class='float-left mr-3 card-img-top ' style='max-width:200px; max-height:200px;'>".$fila['0']." <h2 class='card-subtitle'>  Coste:".$fila['1']."$ <span>Mxn</span></h2>";
echo "<h2> duracion: ".$fila['2']."</h2><br><br>";
echo "";
echo "</div></div>";
}



?>
<h1 class="text-white">Comprador del ticket</h1><hr>

<?php

$consulta4="SELECT Dni,pago,nombres FROM tickets WHERE id_ticket='$idticket'";

$resultado4=mysqli_query($mysqli,$consulta4);

while($fila=mysqli_fetch_row($resultado4))
{
    echo "";
    echo "<div style='   border-radius:15px; border:solid black 3px;' class='card  w-75 p-1   m-3'>";
    echo "<div class='card-header'>";
echo "<h1 class='card-title'>Pasajero</h1></div><div class='card-body'>";
  echo "<h1  class='float-left mr-3 card-img-top ' style='max-width:200px; max-height:200px;'>DNI".$fila['0']." <h2 class='card-subtitle'>  nombres:".$fila['2']."</h2>";
echo "<h2> metodo de pago: ".$fila['1']."</h2><br><br>";
echo "";
echo "</div></div>";
}



?>


<!--Fin formulario registro -->

  <script src="demo-files/liga.js"></script>
  <script src="demo-files/demo.js"></script>



</body>
</html>
