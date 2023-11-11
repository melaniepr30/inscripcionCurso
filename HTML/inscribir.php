<?php

//Inicio la sesion 
session_start(); 
  $cons= $_SESSION['nombre_sesion'];
  $res=isset($_SESSION['nombre_sesion']);


//compruebo que el usuario este autentificado 
//header("Cache-control:private");  
if(!$res == 'TRUE')  
{  
header("Location: index.html");  
} else{
	 
$db_host="sql104.260mb.net";
$db_user="n260m_19464509";
$db_password="cursosmel";
$db_name="n260m_19464509_cursos";
$db_table_name1="act_pnce";
$db_table_name2="filosofia_visual";
$db_table_name3="recursos_dig";
$db_table_name4="consejos_convivencia";
$db_table_name5="regletas";
$db_table_name6="hemisferios";
$db_table_name7="estrategias_lect";
$db_table_name8="act_pnce_dos";
$db_table_name9="filosofia_visual_dos";
$db_table_name10="recursos_dig_dos";
$db_table_name11="consejos_convivencia_dos";
$db_table_name12="regletas_dos";
$db_table_name13="hemisferios_dos";
$db_table_name14="estrategias_lect_dos";

   $db_connection = mysql_connect($db_host, $db_user, $db_password);

if (!$db_connection) {
	die('No se ha podido conectar a la base de datos');
}

else{
	echo 'Se ha conectadoo a la base de datos';
}

$subs_name = utf8_decode($_POST['nombre']);
$subs_last = utf8_decode($_POST['apellido']);
$subs_email = utf8_decode($_POST['email']);
$subs_esc = utf8_decode($_POST['escuela']);
$subs_function = utf8_decode($_POST['funcion']);

$subs_cursouno=utf8_decode($_POST['uno']);
$subs_cursodos=utf8_decode($_POST['dos']);


switch ($subs_cursouno) {
	case 'Nadie como yo':
		$tabla1=$db_table_name1;

		break;
	case 'Filosofia':
		$tabla1=$db_table_name2;
		
		break;
	case 'Recursos':
		$tabla1=$db_table_name3;
		
		break;
	case 'consejos convivencia':
		$tabla1=$db_table_name4;
		
		break;
	case 'Uso de regletas':
		$tabla1=$db_table_name5;
		
		break;
	case 'hemisferios':
		$tabla1=$db_table_name6;
		
		break;
	case 'Estrategias':
		$tabla1=$db_table_name7;
		
		break;
}

switch ($subs_cursodos) {
	case 'Nadie como yo':
		$tabla2=$db_table_name8;

		break;
	case 'Filosofia':
		$tabla2=$db_table_name9;
		
		break;
	case 'Recursos':
		$tabla2=$db_table_name10;
		
		break;
	case 'consejos convivencia':
		$tabla2=$db_table_name11;
		
		break;
	case 'Uso de regletas':
		$tabla2=$db_table_name12;
		
		break;
	case 'hemisferios':
		$tabla2=$db_table_name13;
		
		break;
	case 'Estrategias':
		$tabla2=$db_table_name14;
		
		break;
}


if ($subs_cursouno == $subs_cursodos ) {
?>
	<script language="javascript">
	alert("No puedes seleccionar dos veces el mismo taller, por favor selecciona uno distinto");window.location.href="inscripciones.php";
	</script>
<?php

}else{

mysql_select_db($db_name, $db_connection);
$res = mysql_query("SELECT * FROM $tabla1 WHERE Email= '$subs_email' ", $db_connection);
$res1 = mysql_query("SELECT * FROM $tabla2 WHERE Email= '$subs_email' ", $db_connection);
		$num_filas = mysql_num_rows($res);
		$num_filas1 = mysql_num_rows($res1);

			if (($num_filas and $num_filas1)> 0) {
			?>

			<script language="javascript">alert("La inscripción no se puede llevar a cabo,este email ya ha realizado su inscripción en las dos opciones");window.location.href="inscripciones.php";</script>
			<?
			
			}elseif (($num_filas)> 0) {
			?>

			<script language="javascript">alert("La inscripción no se puede llevar a cabo,este email ya ha realizado su inscripción en el curso 1");window.location.href="inscripciones.php";</script>
			<?
			
			}elseif (($num_filas1) > 0) {
			?>

			<script language="javascript">alert("La inscripción no se puede llevar a cabo,este email ya ha realizado su inscripción en el curso 2");window.location.href="inscripciones.php";</script>
			<?
			
			}else{	

				if ($subs_cursouno == "Nadie como yo") {

					mysql_select_db($db_name, $db_connection);

					$resultado = mysql_query("SELECT * FROM $db_table_name1", $db_connection);
					$número_filas = mysql_num_rows($resultado);
					if ($número_filas < 20) {
						
							$uno = 'TRUE';
							$nombre_uno= '"Nadie como yo" (Actividades PNCE)';
						}		
				}

				if ($subs_cursouno == "Filosofia") {

						mysql_select_db($db_name, $db_connection);

						$resultado = mysql_query("SELECT * FROM $db_table_name2", $db_connection);
						$número_filas = mysql_num_rows($resultado);

						if ($número_filas < 20) {

							$uno = 'TRUE';
							$nombre_uno= '"Filosofía visual para niños"';
							
							
					}
				}

				
				if ($subs_cursouno == "Recursos") {
										

						mysql_select_db($db_name, $db_connection);

						$resultado = mysql_query("SELECT * FROM $db_table_name3", $db_connection);
						$número_filas = mysql_num_rows($resultado);

						if ($número_filas < 20) {

							$uno = 'TRUE';
							$nombre_uno= '"Recursos Digitales"';			
						}
				}
				
				if ($subs_cursouno == "consejos convivencia") {
							
						mysql_select_db($db_name, $db_connection);

						$resultado = mysql_query("SELECT * FROM $db_table_name4", $db_connection);
						$número_filas = mysql_num_rows($resultado);


						if ($número_filas < 20) {

							$uno = 'TRUE';	
							$nombre_uno= '"12 consejos para una sana convivencia en el aula"';		
						}
				}

				if ($subs_cursouno == "Uso de regletas") {

						mysql_select_db($db_name, $db_connection);

						$resultado = mysql_query("SELECT * FROM $db_table_name5", $db_connection);
						$número_filas = mysql_num_rows($resultado);


						if ($número_filas < 20) {

							$uno = 'TRUE';	
							$nombre_uno= '"Uso de Regletas"';		
						}
				}

				if ($subs_cursouno == "hemisferios") {
										
						mysql_select_db($db_name, $db_connection);

						$resultado = mysql_query("SELECT * FROM $db_table_name6", $db_connection);
						$número_filas = mysql_num_rows($resultado);


						if ($número_filas < 20) {

							$uno = 'TRUE';	
							$nombre_uno= '"¡Echa a andar tus dos hemisferios"';		
						}
				}

				if ($subs_cursouno == "Estrategias") {

						mysql_select_db($db_name, $db_connection);

						$resultado = mysql_query("SELECT * FROM $db_table_name7", $db_connection);
						$número_filas = mysql_num_rows($resultado);

						if ($número_filas < 20) {

							$uno = 'TRUE';	
							$nombre_uno= '"Estrategias de lectura y escritura"';


						}
				}

//Se evaluan paraa el segundo curso
				if ($subs_cursodos == "Nadie como yo") {
				
					mysql_select_db($db_name, $db_connection);

					$resultado = mysql_query("SELECT * FROM $db_table_name8", $db_connection);
					$número_filas = mysql_num_rows($resultado);

					

					if ($número_filas < 20) {
						
							$dos = 'TRUE';
							$nombre_dos= '"Nadie como yo" (Actividades PNCE)';
						}		
				}

				if ($subs_cursodos == "Filosofia") {
			
						mysql_select_db($db_name, $db_connection);

						$resultado = mysql_query("SELECT * FROM $db_table_name9", $db_connection);
						$número_filas = mysql_num_rows($resultado);

						

						if ($número_filas < 20) {

							$dos = 'TRUE';
							$nombre_dos= '"Filosofía visual para niños"';
							
							
					}
				}

				
				if ($subs_cursodos == "Recursos") {

						mysql_select_db($db_name, $db_connection);

						$resultado = mysql_query("SELECT * FROM $db_table_name10", $db_connection);
						$número_filas = mysql_num_rows($resultado);

						

						if ($número_filas < 20) {

							$dos = 'TRUE';	
							$nombre_dos= '"Recursos Digitales"';		
						}
				}
				
				if ($subs_cursodos == "consejos convivencia") {

						mysql_select_db($db_name, $db_connection);

						$resultado = mysql_query("SELECT * FROM $db_table_name11", $db_connection);
						$número_filas = mysql_num_rows($resultado);

						

						if ($número_filas < 20) {

							$dos = 'TRUE';
							$nombre_dos= '"12 consejos para una sana convivencia en el aula"';				
						}
				}

				if ($subs_cursodos == "Uso de regletas") {

						mysql_select_db($db_name, $db_connection);

						$resultado = mysql_query("SELECT * FROM $db_table_name12", $db_connection);
						$número_filas = mysql_num_rows($resultado);

						
						if ($número_filas < 20) {

							$dos = 'TRUE';	
							$nombre_dos= '"Uso de Regletas"';				
						}
				}

				if ($subs_cursodos == "hemisferios") {

						mysql_select_db($db_name, $db_connection);

						$resultado = mysql_query("SELECT * FROM $db_table_name13", $db_connection);
						$número_filas = mysql_num_rows($resultado);


						if ($número_filas < 20) {

							$dos = 'TRUE';		
							$nombre_dos= '"¡Echa a andar tus dos hemisferios"';	
						}
				}

				if ($subs_cursodos == "Estrategias") {

						mysql_select_db($db_name, $db_connection);

						$resultado = mysql_query("SELECT * FROM $db_table_name14", $db_connection);
						$número_filas = mysql_num_rows($resultado);

					
						if ($número_filas < 20) {

							$dos = 'TRUE';		
							$nombre_dos= '"Estrategias de lectura y escritura"';	
						}
				}

//Se hace if de comparacion de variables, en caso de que una no tenga cupo,no se podrà inscribr, de lo contrario 
				if (($uno !== 'TRUE') && ($dos !=='TRUE')){
					?>
							<script language="javascript">
							alert("La inscripción no se puede llevar a cabo, el curso ingresado en las dos opciones ya no cuentan con lugares disponibles, por favor seleccione otra opción ");window.location.href="inscripciones.php";
							</script>
							<?php	
					}
				else{

					if ( $uno == 'TRUE') {

						if ($dos =='TRUE') {
					
							$insert_value1 = 'INSERT INTO `' . $db_name . '`.`'.$tabla1.'` (`nombre` , `apellidos` , `email` , `escuela`,`funcion`) VALUES ("' . $subs_name . '", "' . $subs_last . '", "' . $subs_email. '", "' . $subs_esc . '", "' . $subs_function . '")';
				       	    $insert_value = 'INSERT INTO `' . $db_name . '`.`'.$tabla2.'` (`nombre` , `apellidos` , `email` , `escuela`,`funcion`) VALUES ("' . $subs_name . '", "' . $subs_last . '", "' . $subs_email. '", "' . $subs_esc . '", "' . $subs_function . '")';	
				        	mysql_select_db($db_name, $db_connection);
							$retry_value1 = mysql_query($insert_value1, $db_connection);
							$retry_value=mysql_query($insert_value,$db_connection);
							if (!$retry_value && !$retry_value1) {
				   				die('Error: ' . mysql_error());
							}else{
								$_SESSION['nombre']=$subs_name;
								$_SESSION['apellidos']=$subs_last;
								$_SESSION['email']=$subs_email;
								$_SESSION['escuela']=$subs_esc;
								$_SESSION['funcion']=$subs_function;
								$_SESSION['curso_uno']=$nombre_uno;
								$_SESSION['curso_dos']=$nombre_dos;

							 	?>
								<script language="javascript">
								alert("La inscripción se realizo exitosamente");window.location.href="exito.php";
								</script>
								<?php
							}

						}else{
							?>
							<script language="javascript">
							alert("La inscripción no se puede llevar a cabo, el curso ingresado en la opción 2 ya no cuenta con lugares disponibles, por favor seleccione otra opción ");window.location.href="inscripciones.php";
							</script>
							<?php	
						}
						

				}else{
					?>
							<script language="javascript">
							alert("La inscripción no se puede llevar a cabo, el curso ingresado en la opción 1 ya no cuenta con lugares disponibles, por favor seleccione otra opción ");window.location.href="inscripciones.php";
							</script>
							<?php	
					}
			}	
	}
	
}

	
mysql_close($db_connection);

}	
?>															