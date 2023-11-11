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
  <link rel="stylesheet" href="css/estilos.css">
   <link rel="stylesheet" href="css/registro.css">
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
  <section>
      <div class="group">
      <form action="inscribir.php"  method="POST">
     
      <h2><em>Inscripción a cursos</em></h2>
      
         
          <label for="nombre">Nombre(s)<span><em>(requerido)</em></span></label>
          <input type="text" name="nombre" class="form-input" required/>   
          
          <label for="apellido">Apellidos <span><em>(requerido)</em></span></label>
          <input type="text" name="apellido" class="form-input" required/>             
          
          <label for="email">Email <span><em>(requerido)</em></span></label>
          <input type="email" name="email" class="form-input" required/>

          <label for="escuela">Escuela<span><em>(requerido)</em></span></label>
          <select name="escuela" size="1" required>
          <option value="">Selecciona</option>
          <option value="Constitución de 1917">Constitución de 1917</option>
          <option value="Wilfrido Massieu">Wilfrido Massieu</option>
          <option value="Plan de Iguala">Plan de Iguala</option>
          <option value="Centenario de la Restauración de la República">Centenario de la Restauración de la República</option>
          <option value="Profesor Luis Alvárez Barret">Profesor Luis Alvárez Barret</option>
          <option value="Zona Escolar">Zona Escolar 37</option>
          </select>

          <label for="funcion">Función<span><em>(requerido)</em></span></label>
          <select name="funcion" size="1" required>
          <option value="">Selecciona</option>
          <option value="Maestro frente a grupo">Maestro frente a grupo</option>
          <option value="Director">Director</option>
          <option value="Subdirector">Subdirector</option>
          <option value="Promotor">Promotor</option>
          <option value="Otro">Otro</option>

          </select>

          <label for="cursouno">Curso 1 (Turno 1)<span><em>(requerido)</em></span></label>
          <select name="uno" size="1" required>
          <option value="">Selecciona</option>
          <option value="Nadie como yo">"Nadie como yo" (Actividades PNCE)</option>
          <option value="Filosofia">Filosofía visual para niños</option>
          <option value="Recursos">Recursos Digitales</option>
          <option value="consejos convivencia">12 consejos para una sana convivencia en el aula</option>
		      <option value="Uso de regletas">Uso de regletas</option>
		      <option value="hemisferios">¡Echa a andar tus dos hemisferios!</option>
		      <option value="Estrategias">Estrategias de lectura y escritura</option>
          </select>

          <label for="cursodos">Curso 2 (Turno 2)<span><em>(requerido)</em></span></label>
          <select name="dos" size="1" required>
          <option value="">Selecciona</option>
          <option value="Nadie como yo">"Nadie como yo" (Actividades PNCE)</option>
          <option value="Filosofia">Filosofía visual para niños</option>
          <option value="Recursos">Recursos Digitales</option>
          <option value="consejos convivencia">12 consejos para una sana convivencia en el aula</option>
		  <option value="Uso de regletas">Uso de regletas</option>
		  <option value="hemisferios">¡Echa a andar tus dos hemisferios!</option>
		  <option value="Estrategias">Estrategias de lectura y escritura</option>
          </select>

          

         <center> <input class="form-btn" name="Inscribirse" type="submit" value="Inscribirse" /></center>
        </p>
      </form>
      
    </div>
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