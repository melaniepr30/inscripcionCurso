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


<html lang="en">
 <!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title> SISTEMA DE INSCRIPCIONES</title>
	<link rel="stylesheet" href="css/cursos.css">
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
	<!--FORMULARIO DE LOGIN-->
		<div id="faccess" class="class_acceso">
			<form action="sesion.php" id="formulario"method="post"> <!--coon el "post" se esconde el texto que envíe-->
				<input type="text" id="user" name="user" placeholder="Usuario" required>  
				<input type="password" id="pass" name="pass" placeholder="Contraseña" required> <!--el tipo password nos sirve para ocultar el password-->
			</form>
				<button type="submit" id="bentrada" onclick="bienvenida();">Enviar</button>
		</div>
	<!--SECCION PRINCIPAL-->
	<section id="id_contenedor">
			<figure id="profe">
				<img src="img/emotionheader.png" alt="">
			</figure>
			<!--Taller 1-->
				<article class="articulo">
					<figure class="img_art">
						<img src="img/articulo.png" alt="">
					</figure>

					<h2 class="titulo">
						<a>Taller:"Nadie como yo" (Actividades PNCE).</a>	
					</h2>
					<h3 class="frase">
						<p>Tallerista: Sandra Cristina Juárez Rodriguez. </p>	

					</h3>
					<h4> <p>Turno 1: 9:10 - 10:10 am. | Turno 2: 11:10 - 12:10 am.</p></h4>
					
				</article>

			<!--Taller 2-->
				<article class="articulo">
					<figure class="img_art">
						<img src="img/articulo.png" alt="">
					</figure>

					<h2 class="titulo">
						<a>Taller: "Filosofía visual para niños".</a>	
					</h2>
					<h3 class="frase">
						<p>Talleristas: Gabriela Álvarez R. y Marisol López H.</p>
					</h3>
					<h4> <p>Turno 1: 9:10 - 10:10 am. | Turno 2: 11:10 - 12:10 am.</p></h4>
				</article>
			<!--Taller 3-->
				<article class="articulo">
					<figure class="img_art">
						<img src="img/articulo.png" alt="">
					</figure>

					<h2 class="titulo">
						<a>Taller: "Recursos Digitales".</a>		
					</h2>
					<h3 class="frase">
						<p>Tallerista:Dairen Martínez Tecozautla.</p>		
					</h3>
					<h4><p>Turno 1: 9:10 - 10:10 am. | Turno 2: 11:10 - 12:10 am.</p></h4>
					
				</article>
			<!--Taller 4-->
				<article class="articulo">
					<figure class="img_art">
						<img src="img/articulo.png" alt="">
					</figure>

					<h2 class="titulo"><a>Taller: "Estrategias de lectura y escritura".</a>	
					</h2>
					<h3 class="frase">
						<p>Tallerista: Claudia Ivette Chávez Salazar.</p>		
					</h3>

					<h4><p>Turno 1: 9:10 - 10:10 am. | Turno 2: 11:10 - 12:10 am.</p></h4>
					
				</article>
			
			<!--Taller 5-->
				<article class="articulo">
					<figure class="img_art">
						<img src="img/articulo.png" alt="">
					</figure>

					<h2 class="titulo">
						<a>Taller: "Uso de regletas inicial".</a>	
					</h2>
					<h4 class="frase">
						<p>Talleristas: Araceli Hernández R. y Silvia Maricarmen Valle Mtz.</p>		
					</h4>
					<h4><p>Turno 1: 9:10 - 10:10 am. | Turno 2: 11:10 - 12:10 am.</p></h4>
					
				</article>		
			<!--Taller 6-->
				<article class="articulo">
					<figure class="img_art">
						<img src="img/articulo.png" alt="">
					</figure>

					<h2 class="titulo">
						<a>Taller: "¡Echa a andar tus dos hemisferios!".</a>	
					</h2>
					<h3 class="frase">
						<p>Talleristas: Leticia Fernández A. y Berenice Barrera B.</p>	
					</h3>
					<h4><p>Turno 1: 9:10 - 10:10 am. | Turno 2: 11:10 - 12:10 am.</p></h4>

				</article>	

			<!--Taller 7-->
				<article class="articulo">
					<figure class="img_art">
						<img src="img/articulo.png" alt="">
					</figure>

					<h3 class="titulo">
						<a>Taller: "12 consejos para una sana convivencia en el aula ".</a>	
					</h3>
					<h3 class="frase">
						<p>Tallerista: Lleimy Ortíz García.</p>	
					</h3>	
					<h4><p>Turno 1: 9:10 - 10:10 am. | Turno 2: 11:10 - 12:10 am.</p></h4>
					
				</article>

			
				
			
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
<?
}
?>