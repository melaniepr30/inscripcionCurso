<?php
$db_host="sql104.260mb.net";
$db_user="n260m_19464509";
$db_password="cursosmel";
$db_name="n260m_19464509_cursos";
$db_table_name="registro_user";
   $db_connection = mysql_connect($db_host, $db_user, $db_password);

if (!$db_connection) {
	die('No se ha podido conectar a la base de datos');
}

else{
	echo 'Se ha conectadoo a la bnase de datos';
}

$subs_name = utf8_decode($_POST['nombre']);
$subs_last = utf8_decode($_POST['apellido']);
$subs_email = utf8_decode($_POST['email']);
$subs_user = utf8_decode($_POST['user']);
$subs_pass = utf8_decode($_POST['contraseña']);
$subs_esc = utf8_decode($_POST['escuela']);
$subs_function= utf8_decode($_POST['funcion']);


$resultado=mysql_query("SELECT * FROM ".$db_table_name." WHERE Email = '".$subs_email."'", $db_connection);

if (mysql_num_rows($resultado)>0)
{

header('Location: Fail.html');

} else {
	
	$insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`Name` , `Apellidos` , `Email`,`User`,`passwd`,`Escuela`,`funcion`) VALUES ("' . $subs_name . '", "' . $subs_last . '", "' . $subs_email . '", "' . $subs_user . '", "' . $subs_pass . '", "' . $subs_esc . '", "' . $subs_function . '")';

mysql_select_db($db_name, $db_connection);
$retry_value = mysql_query($insert_value, $db_connection);

if (!$retry_value) {
   die('Error: ' . mysql_error());
}
	
header('Location: Success.html');

}

mysql_close($db_connection);

		
?>