<!DOCTYPE HTML>
 <?php session_start();


?>
<?php
require("connect_db.php");


$consulta2="SELECT nombre,img,footer,aboutus FROM app_info WHERE id='1'";

$resultado2=mysqli_query($mysqli,$consulta2);

while($fila=mysqli_fetch_row($resultado2))
{
  $app_name=$fila['0'];
  $app_img=$fila['1'];
  $footer=$fila['2'];
  $aboutus=$fila['3'];
}


$consulta2="SELECT color FROM config WHERE id='1'";

$resultado2=mysqli_query($mysqli,$consulta2);

while($fila=mysqli_fetch_row($resultado2))
{
  $color=$fila['0'];
}




?>


<!--Cabecera de la pagina-->

 <head>
    <!-- SCRIPTS JS-->
    <script src="jquery-3.3.1.min.js"></script>
 <!--Cargar stilo-->


  <link href="style.css" type="text/css" rel="stylesheet"></link>

 <link href="demo.css" type="text/css" rel="stylesheet"></link>
  <!--icono de la pagina-->
<link rel="icon" type="image/png" href="/logo/<?php echo $app_img;?>" id="pagelogo" />

<meta http-equiv="Content-type" content="text/html; charset=utf-8">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="/bootstrap/4.3.1/css/bootstrap.css">


<!-- jQuery library -->
<link rel="stylesheet" href="/bootstrap/js/jquery.js">


<link rel="stylesheet" href="/bootstrap/js/jquery-1.8.3.min.js">


<!-- Popper JS -->
<script src="/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="/bootstrap/4.3.1/js/bootstrap.js"></script>

<!--titulo-->
<title><?php echo $app_name?></title>
<!--Fin de titulo-->

<!-- see http://webdesign.tutsplus.com/tutorials/htmlcss-tutorials/quick-tip-dont-forget-the-viewport-meta-tag -->
<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1.0, user-scalable=no">


  </head>
<body style="background-color: darkgrey;">
<div class="container-fluid" style="background-color: darkgrey;">

<header class="header">
  <?php
  include("include/cabecera.php");
  ?>

</header>


<!--script de ocultar y esconder los elementos en las paginas-->

<script type="text/javascript">
function menu_action()
{
var y = document.getElementById('item_1');
    if (y.style.display === 'none') {
        y.style.display = 'block';
    }
    else {
        y.style.display = 'none';
    }

    {
    var s=document.getElementById()
    }
}
</script>

<style type="text/css">
    img{
     max-width:100%;
     max-height: 100%;   
    }
#divslider
{
background-color:white;
padding: 0px;
margin-top:0px;
box-shadow: black 0px 10px 9px;
margin-right: 10.5%;
height: 70vh;
width: 100%;
}

#publicacionimg
{
padding: 0px;
margin: 0px;
width: 100%;
height: 100%;
margin-top: 0px;
padding-top: 0px;
margin-left: 0.5%;
margin-right: 0.5%;
padding-left: 0.5%;
padding-right: 0.5%;
max-width: 98%;
max-height: 100%;
}

 #users_img
{
padding: 0px;
margin: 0px;
width: 100%;
height: 100%;
max-width: 50px;
max-height: 50px;
min-height: 40px
min-width:40px;
border-width: 1px;
border-color:gray;
border-style: solid;
}




#posttext
{
margin-bottom: none;
padding-bottom: none;
width: 100%;
height: 100%;
min-height: 150px;
resize: none;
border:none;
border: 0px;
margin:0px;
word-wrap: break-word;
font-size: 100%;
}
</style>

<link rel="stylesheet" href="flexslider.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider({
    	touch: true,
    	pauseOnAction: false,
    	pauseOnHover: false,
    });
  });
</script>
<!--Fin de scripts-->


</head>

<!--  cambiar el logo de la aplicacion -->

</div>
<!--
<body onload="revelar();" id="body">
-->
<!--Cabecera de la pagina-->
</li>
<script type="text/javascript">
function mostrar() {  

  document.getElementById("tabla_resultado").style.display="block";
}
/**/
function ocultar()
{

  document.getElementById("tabla_resultado").style.display="none";
}



</script>
</nav>
<nav class="navbar navbar-expand-sm navbar-dark fixed-top" id="navbarra" >

      <a class="navbar-brand" href="index.php">



<img height="50vh" src="/logo/<?php echo $app_img;?>"/>

      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">

      <ul class="navbar-nav">

    </li>

    <li class="nav-item">


        </li>
      <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle "  href="#" id="navbardrop" data-toggle="dropdown">
Mas </a>
      <div class="dropdown-menu">

        <a class="dropdown-item" <?php


if (@!$_SESSION['user'])
{
echo "href='index2.php'";

}
else
{
echo "href='profile.php'";
}


?>>

  <summary ><?php


        if (@!$_SESSION['user'])
   {
echo "<p>"."Iniciar sesion"."</p>";

echo '<a class="dropdown-item" href="info.php">Sobre nosotros</a>
        <a class="dropdown-item"  href="productos.php">productos</a>';
   }
   else
   {
       echo "<p>".$_SESSION['user']."</p>";
      echo ' <a class="dropdown-item"  href="desconectar.php">


       Cerrar sesion
       <span class="icon icon-switch"></span>
       </a>';

       echo '  <a class="dropdown-item"  href="info.php">Sobre nosotros</a>
               <a class="dropdown-item"  href="productos.php">productos</a>';
   }


      ?></summary>
</a>

    
      </div>
    </li>
      </ul>
   </div>
</nav>
<?php
echo "<style>

#navbarra{
  background-color:".$color.";
}

</style>
";
?>
<style>
#tabla_resultado
{
color: black;
background-color: white;
display: none;
position: fixed;
transition: 0.5s;
}
#text_slider{
  font-family: verdana;
color:white;
background:rgba(0, 0, 0, 0.2);
padding:13vh;
font-size:2vh;
}
</style>
</head>
<body style="background-color: darkgrey;">

<ul>

</nav>

</header>

<!--contenido de la pagina-->
<!--nota tienes que poner un margin hacia arriba-->
<section style="background-color: darkgrey;">
<h1 style="opacity: 0;">Articulo</h1>

<?php echo $aboutus; ?>


</div>


</div>
</section>

<!-- Pie de pagina-->

<footer id="footer">
<center>
&copy;<?php echo $titulo."</h1>"; ?>
<?php echo $footer; ?> 
</footer>
<!-- /container -->
  <script src="demo-files/liga.js"></script>
  <script src="demo-files/demo.js"></script>

  </body>
</html>
