<?php

session_start(); 

$user = utf8_decode($_POST['user']);
$pass = utf8_decode($_POST['pass']);

// conexion a la base

$db_host="127.0.0.1";
$db_user="root@localhost";
$db_password="root";
$db_name="cursos_profesoresd";
$db_table_name="registro_user";

   $db_connection = mysql_connect($db_host, $db_user, $db_password);
   
if (!$db_connection) {
	die('No se ha podido conectar a la base de datos');
}

else{
	echo 'Se ha conectado a la base de datos';
}

//VALIDACION

$query= "SELECT User,passwd FROM registro_user  WHERE User = '$user'";
mysql_select_db($db_name, $db_connection);
if($resultado=mysql_query($query, $db_connection)){

	$filas= mysql_num_rows($resultado);

	if($filas>0){

		$row = mysql_fetch_assoc($resultado);
		if (password_verify($pass,$row["passwd"])){

			$_SESSION['nombre_sesion']= $user;
			
			//$_SESSION['nombre_sesion'] = $user;

			?>
			
			<script language="javascript">alert("Ha iniciado correctamente la sesión");window.location.href="index1.php";
		</script>
			<?
		}else{
			?>

			<script language="javascript">alert("Contraseña inválida, favor de verificarla");window.location.href="index.html";</script>
			<?
		}
		
	}else{

		?>

			<script language="javascript">alert("El usuario introducido no se encuentra registrado, favor de verificarlo");window.location.href="index.html";</script>
			<?
	}
}
mysql_close($db_connection);
?>
