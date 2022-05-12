<!DOCTYPE html>

<?php

if(@!$_POST['query'])
{
  $producto='';

}
else{
  $producto=$_POST['query'];
} 
?>
<style type="text/css">
  
.hero-image {
  background-image: url("https://media.istockphoto.com/photos/bus-station-in-pretoria-picture-id943620796?k=20&m=943620796&s=170667a&w=0&h=ogZM-Vx9gLnVnX75sT6cqpfaOyx3f6qfNQg6f_lcDGE="); /* The image used */
  background-color: #cccccc; /* Used if the image is unavailable */
  height: 500px; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
  box-shadow: 20px 20px 300px 150px black inset;

}
.shadow{


  
}

</style>
<html lang="es">
<head>
<link rel="stylesheet" href="css/bootstrap.css" >
<meta charse="UTF-8">
<title>Central de autobuses</title>
</head>
<body class="bg-dark">



  <font face="Comic Sans MS,arial,verdana">


<div class="jumbotron hero-image text-white">
<br>
<br>
<br>
    <div class="p-4 m-4 shadow"><h1 class="p-4"><center> Central de autobuses</center></h1><font>
  <h2><center>Esta central de autobus es exclusiva para todos,esta abierta de lunes a domingo,esta funcionando de 4am a 9pm</center></h2>
  <font face="comic sans MS,arial,verdana"><h1><center>central autobuses</center></h1></font>
<marquee class="m-0 -p4"style="font-size: 150px;">&#128652; </marquee>

<div class="container"><br>
 
  <div class="card-deck" style="width:80vw;">
</div>
<br>


<div id="div">

    <h2>Buscar entre los destinos disponbles</h2> <a href="tickets.php" class="badge badge-warning p-2 m-0">ver tickets comprados</a><hr>
<br>
        <form accept-charset="utf-8" action="index.php" enctype="multipart/form-data" method="POST">

<b>buscar por destino o precio</b>
<div class="input-group mb-3 input-group-sm">
      <div class="input-group-prepend "> 
      <button  class="btn btn-warning float-md-right" type="submit" name="submit" value="Registrarse"><span class="icon icon-search">&#128270;</span></button>
 

      </div>






<input type="search" name="query" class="form-control form-control-sm " placeholder="buscar..">

      <div class="invalid-feedback">no pudimos encontrar nada.</div>
</div>



</div>
</form>


<hr><table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">Destino</th>
      <th scope="col">Duracion &#128359;  </th>
      <th scope="col">Precio</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
<?php
require("connect_db.php");




$consulta2="SELECT id_driver,id_bus,ETA,precio,destino,id_route FROM viajes  WHERE destino LIKE '%$producto%' OR precio LIKE'%$producto%'  ORDER BY id_route ASC Limit 30;";
$resultado2=mysqli_query($mysqli,$consulta2);

while($fila=mysqli_fetch_row($resultado2))
{
  echo "<tr><td>".$fila['4']."</td>";
  
  
  echo "<td> ".$fila['2']."</td>";
echo "<td> ".$fila['3']."$ MXN</td>";
  

echo "<td><form accept-charset='utf-8' action='editar_producto.php'";
  

  echo "enctype='multipart/form-data' method='POST'>";
  
  echo "<button type='submit' class='btn btn-info' >"."Ver mas..."."</button>";


 echo "<input type='text' style='display:none;' name='id_product' value='".$fila['0']."'>";

 echo "<input type='text' style='display:none;' name='id_bus' value='".$fila['1']."'>";

 echo "<input type='text' style='display:none;' name='id_route' value='".$fila['5']."'></form>";
 
 
echo "</td></tr>";
}


?>
</table>


<br>
<br>
<br>
<br>
<br>
</body>
</html>