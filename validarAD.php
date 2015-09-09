<?php
$id = $_POST['id'];
$jefe = $_POST['jefe'];
$titulo = $_POST['titulo'];

$conexion = mysql_connect("localhost","Steven","Steven");
mysql_select_db("sena",$conexion);
if(mysql_query("UPDATE asignacion SET jefe='$jefe', titulo='$titulo' WHERE id='$id'")){
	echo '<script>alert("HE ACTUALIZADO LOS DATOS")</script>';
	echo '<script>location.href="updateasignacion.php"</script>';
}else{
	echo '<script>alert("ño :c")</script>';
}


?>