<?php

$documento  = $_POST['documento'];
$nombre = $_POST['nombre'];
$apellido  = $_POST['apellido'];
$fecha  = $_POST['fecha'];
$email  = $_POST['email'];
$numero  = $_POST['numero'];
$direccion  = $_POST['direccion'];
$rol  = $_POST['rol'];
$usuario  = $_POST['usuario'];
$contrasena  = $_POST['contrasena'];

$a = mysql_connect("localhost","Steven","Steven");
mysql_select_db("sena",$a);
if(mysql_query("INSERT INTO jefe VALUES (NULL,'$documento','$nombre','$apellido','$fecha','$email','$numero','$direccion','$rol','$usuario','$contrasena')")){
mysql_query("INSERT INTO login VALUES (NULL,'$documento','$nombre','$apellido','$fecha','$email','$numero','$direccion','$rol','$usuario','$contrasena')");
echo '<script>alert("HAS AGREGADO UN NUEVO JEFE, CHECKEA LA TABLA")</script>';
echo '<script>location.href="ingresarjefe.php"</script>';
}

?>