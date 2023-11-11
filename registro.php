<?php
 
$db_host="127.0.0.1";
$db_user="root@localhost";
$db_password='';
$db_name="cursos_profesoresd";
$db_table_name="registro_user";

$db_connection = mysqli_real_connect($db_host, $db_user, $db_password);

if (!$db_connection) {
	die('No se ha podido conectar a la base de datos');
}

else{
	echo 'Se ha conectadoo a la base de datos';
}

$subs_email = utf8_decode($_POST['email']);
$subs_user = utf8_decode($_POST['user']);
$subs_pass = utf8_decode($_POST['contraseña']);

//Valida si el email o usuario ya estan registrados en la bd 
echo $subs_email;
mysql_select_db($db_name, $db_connection);

		$resultado = mysql_query("SELECT * FROM registro_user WHERE email= '$subs_email' or user = '$subs_user'", $db_connection);
		$número_filas = mysql_num_rows($resultado);

		echo "$número_filas Filas\n";
		if ($número_filas > 0) {
			?>

			<script language="javascript">alert("Este email o usuario ya ha sido registrado, por favor intenta nuevamente");window.location.href="registro.html";</script>
			<?
		}else {

		$hash = password_hash($subs_pass,PASSWORD_DEFAULT); //Para que la contraseña sea un hash y se guarde como tal en la bd --> mmodifique en la func de abajo

		//Guardara los datos en la bd 
		$insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` ( `email`,`user`,`passwd`) VALUES ( "' . $subs_email . '", "' . $subs_user . '", "' . $hash . '")';

		mysql_select_db($db_name, $db_connection);
		$retry_value = mysql_query($insert_value, $db_connection);

		if (!$retry_value) {
	   	die('Error: ' . mysql_error());
		}else{
		header('Location: Success.html');
		}

}
mysql_close($db_connection);

	
?>