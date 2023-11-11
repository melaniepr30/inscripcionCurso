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
	echo 'Se ha conectadoo a la base de datos';
}
?>