<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
<?php
// se reciben las variables
$id=$_POST['id_product'];
$nombre=$_POST['names'];
$dni=$_POST['dni'];
$pago=$_POST['metodo'];




    require("connect_db.php");


$sql="INSERT INTO tickets (Dni,pago,nombres,id_route) VALUES ('$dni','$pago','$nombre','$id')";
if ($sql) {echo "conexion exitosa";
}elseif($sql){echo "no se pudo conectar";}
echo mysqli_query($mysqli,$sql);


    header("Location: tickets.php");

 ?>
 