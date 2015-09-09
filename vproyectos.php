<?php
$titulo = $_POST['titulo'];
$descripcion =  $_POST['descripcion'];
$objetivo  =  $_POST['objetivo'];
$fecha  =  $_POST['fecha'];
$duracion  =  $_POST['duracion'];

$conexion = mysql_connect("localhost","Steven","Steven");
mysql_select_db("sena",$conexion);
if(mysql_query("INSERT INTO proyectos VALUES('','$titulo','$descripcion','$objetivo','$fecha','$duracion')")){
	echo "<script>alert('LOS VALORES FUERON INGRESADOS')</script>";
	echo '<script>location.href="administrador.php"</script>';
}else{
	echo "pailas";
}


?>