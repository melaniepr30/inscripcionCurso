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
	<!--DOCTYPE html-->
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title> SISTEMA DE INSCRIPCIONES</title>
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
							
							<li class="l_color"><a href="index1.php" class="l_link">Inicio</a></li>
							<li class="l_color"><a href="talleres.php" class="l_link">Talleres</a></li>
							<li  id="insc" class="l_color"><a href="inscripciones.php" class="l_link">Inscripciones</a></li>
							<li id="isesion">
								<a href="logout.php" id="mostraris" class="icon-enter" onclick="">Abandonar Sesión</a>
							</li>

						</ul>
				</nav>

			<!--SECCION PRINCIPAL-->
			<section id="contenedor">
					<p><center><h1>¡Bienvenido Profesor (a)!</center></h1></p>
					<figure id="profe">
						<img src="img/profes.png" alt="">
					</figure>
					<h2><p>En esta página encontrarás los cursos disponibles en los cuales podrás inscribirte, primero que nada deberás de realizar el registro de usuario y una vez registrado podrás iniciar sesión para llevar a cabo tu inscripción.</p>
					<p>Cada curso consta de dos turnos: <br>Turno 1: 9:10  a 10:10 am. <br> Turno 2: 11:10 a 12:10 am.</p>
<p>Recuerda que únicamente podrás inscribirte a dos cursos, es importante que analices las opciones ya que una vez inscrito no se podrán realizar cambios.</p>
						<p>Aquí podrás visualizar el proceso de inscripción:</p></h2>
			<video  src="img/tuto.mp4" width="800"  height= "700" preload controls>
			</videoo>
			</section>
			
			
			<!--FOOTER-->
				<footer>
					<p>
						<strong>Creado por Melanie Peña</strong>
					</p>
					<p>
						Contacto: star.girl01@gmail.com
					</p>
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




	
		