<?php
$id = $_POST['id'];
//echo $id ;
$documento = $_POST['documento'];
//echo $documento  ;
$nombre  = $_POST['nombre'];
//echo  $nombre;
$apellido  = $_POST['apellido'];
//echo $apellido ;
$fecha  = $_POST['fecha'];
//echo $fecha ;
$email  = $_POST['email'];
//echo $email ;
$numero  = $_POST['numero'];
//echo  $numero;
$direccion  = $_POST['direccion'];
//echo $direccion ;


$conexion = mysql_connect("localhost","Steven","Steven");
mysql_select_db("sena",$conexion);
if(mysql_query("UPDATE jefe SET documento='$documento',nombre='$nombre',apellido='$apellido',fecha='$fecha',email='$email',numero='$numero',direccion='$direccion' WHERE id='$id'")){
	echo '<script>alert("LOS DATOS HAN SIDO ACTUALIZADOS")</script>';
	echo '<script>location.href="updatejefe.php"</script>';
}else{
	echo '<script>alert("ño :c") </script>';
	echo '<script>location.href="updatejefe.php"</script>';
}

?>