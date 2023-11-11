<?php
//Inicio la sesion 
session_start(); 
  echo $_SESSION['nombre_sesion'];

  $cons= $_SESSION['nombre_sesion'];
  $res=isset($_SESSION['nombre_sesion']);
//compruebo que el usuario este autentificado 
//header("Cache-control:private");  
if($res == 'TRUE')  
{  
 echo "Bienvenido".$_SESSION['nombre_sesion'];
 echo '<p><a href="logout.php">Logout</a></p>';
} else{
	 header("Location: index.html");  
}

?>