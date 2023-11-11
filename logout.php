<?php

session_start();

//Borrando la sesión

session_destroy();
echo "La sesión ha terminado";
?>


			<script language="javascript">alert("La sesión ha terminado");window.location.href="index.html";
		</script>