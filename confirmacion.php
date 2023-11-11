<html lang="es">
<head>
    <title>Ejercicio1: confirmacion de datos</title>
    <meta charset="utf-8">
   
	
</head>


<body>      
<?php

if(isset($_POST['Inscribirse'])){
$subs_name = utf8_decode($_POST['nombre']);
$subs_last = utf8_decode($_POST['apellido']);
$subs_email = utf8_decode($_POST['email']);
$subs_esc = utf8_decode($_POST['escuela']);
$subs_function= utf8_decode($_POST['funcion']);
$subs_cursouno=utf8_decode($_POST['uno']);
$subs_cursodos=utf8_decode($_POST['dos']);
//
}

echo $subs_name;

echo "<b><center>:::::: PAGINA DE CONFIRMACION DE REGISTRO DE USUARIOS ::::::<b><center>";				
echo"        
		<form name='imprime'>
			<table>
				<tr>
					<td><b><p>Nombre completo<p><b></td>
					<td><center>"; echo $subs_name; echo"</center></td>					
				</tr>
				
				<tr>
					<td><b><p>Email<p><b></td>
					<td><center>"; echo $subs_email; echo"</center></td>					
				</tr>
				
				<tr>
					<td><b><p>Escuela<p><b></td>
					<td><center>"; echo $subs_esc; echo"</center></td>					
				</tr>
				
				<tr>
					<td><b><p>Función<p><b></td>
					<td><center>"; echo $subs_function; echo"</center></td>					
				</tr>
				
				<tr>
					<td><b>Curso 1:<b></td>
					<td><center>"; echo $subs_cursouno; echo"</center></td>					
				</tr>
				
				<tr>
					<p><td><b>Curso 2<b></td><p>
					<p><td><center>"; echo $subs_cursodos; echo"</center></td><p>					
				</tr>
				
				
				
				<tr>
                <br><br>
					<td align='center' colspan='3'> <input type='submit' name='enviar' value='Confirmar datos'/></td>				
				<br><br>
                </tr>
				
				
				</table></form>";

?>

</body>
</html>