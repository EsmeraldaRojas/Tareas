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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta charse="UTF-8">
<title>Central de autobuses</title>
</head>
<body class="bg-dark">



  <font face="Comic Sans MS,arial,verdana">


<div class="jumbotron hero-image text-white">
<br>
<br>
<br>
  
<marquee class="m-0 -p4"style="font-size: 150px;">&#128652; </marquee>

<div class="container"><br>
 
  <div class="card-deck" style="width:80vw;">
</div>
<br>


<div id="div">

    <h2>Para buscar su ticket o tickets utilice su numero de DNI</h2> <a href="index.php" class="badge badge-warning p-2 m-0">ir al inicio</a><hr>
<br>
        <form accept-charset="utf-8" action="tickets.php" enctype="multipart/form-data" method="POST">

<b>introduce tu dni</b>
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
      <th scope="col">Dni</th>
      <th scope="col">nombres &#128359;  </th>
      <th scope="col">metodo de pago</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
<?php
require("connect_db.php");



$consulta2="SELECT id_ticket,Dni,pago,nombres,id_route FROM tickets  WHERE Dni LIKE '%$producto%' OR nombres LIKE'%$producto%'  ORDER BY Dni ASC Limit 30;";
$resultado2=mysqli_query($mysqli,$consulta2);

while($fila=mysqli_fetch_row($resultado2))
{
  echo "<tr><td>".$fila['1']."</td>";
  
  
  echo "<td> ".$fila['3']."</td>";
echo "<td> ".$fila['2']."</td>";
  

echo "<td><form accept-charset='utf-8' action='ticketinfo.php'";
  

  echo "enctype='multipart/form-data' method='POST'>";
  
  echo "<button type='submit' class='btn btn-info' >"."Ver mas..."."</button>";

 echo "<input type='text' style='display:none;' name='id_ticket' value='".$fila['0']."'>";


 echo "<input type='text' style='display:none;' name='id_route' value='".$fila['4']."'></form>";
 
 
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