<?php
//Inicio la sesion 
session_start(); 
  echo $_SESSION['nombre_sesion'];

  $cons= $_SESSION['nombre_sesion'];
  $res=isset($_SESSION['nombre_sesion']);


//compruebo que el usuario este autentificado 
//header("Cache-control:private");  
if(!$res == 'TRUE')  
{  
header("Location: index.html");  
} else{


	 
?>
 <!DOCTYPE html>
<html lang="en
">
<head>
	<meta charset="UTF-8">
	<title> SISTEMA DE INSCRIPCIONES</title>
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link href="https://fonts.googleapis.com/css?family=Meera+Inimai|Reem+Kufi" rel="stylesheet">
</head>
<!-- CONTENEDOR PRINCIPAL-->
<body>
	<<!--CABECERA-->
		<header>
			<!--imagen animada-->
				<figure id="logo">
					<img src="img/ed.png" alt="">
				</figure>
			<!--Titulo del header-->
				<h1>Dirección General de Servicios Educativos Iztapalapa <br> Dirección Regional de Servicios Educativos Juárez <br> Zona Escolar 37</h1>

				<p id="nom_user" class="nom_user_sesion">
						<button id="sun" onclick="csesion();">Hola</button>
						<span id="opcs"></span>
				</p>


		</header>
	<!--MENU DE NAVEGACIÓN-->
		<nav>
			<!--Lista NO ordenada-->
                        <ul>
							
				<li class="l_color"><a href="index1.php" class="l_link"></a></li>
				<li class="l_color"><a href="talleres.php" class="l_link"></a></li>
			<li  id="insc" class="l_color"><a href="inscripciones.php" class="l_link"></a>

			</ul>
				
		</nav>
	
	</section>
	        <center> 
        <center> <h3>Comprobante de Inscripción</h3></center><br> 
        <table class="dos">

		<tr><td>Nombre(s) :</td><td><?echo $_SESSION['nombre'];?></td></tr>
        <tr><td>Apellidos:</td><td><?echo $_SESSION['apellidos'];?></td></tr>
        <tr><td>Correo:</td><td><?echo $_SESSION['email'];?></td></tr>
        <tr><td>Escuela:</td><td><?echo $_SESSION['escuela'];?></td></tr>
        <tr><td>Función:</td><td><?echo $_SESSION['funcion'];?></td></tr> 
        <tr><td>Curso Turno 1:</td><td><?echo $_SESSION['curso_uno'];?></td></tr>
        <tr><td>Curso Turno 2:</td><td><?echo $_SESSION['curso_dos'];?></td></tr>
       	
        </table>  </center>
      <center>
<p>
<p>
        <input type="button" name="imprimir" value="Imprimir Registro" onclick="window.print();">
        <br><br><a href="index1.php">Regresar</a>

   
        </center>
	<!--FOOTER-->
		<footer>
			
			<div id="logos_cine">
				<figure id="admin">
					<a href=""><img src="img/admin.png" alt=""></a>
				</figure>
			</div>
		</footer>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src= "js/index.js"></script>
</body>
</html>
<?php

}
?>							