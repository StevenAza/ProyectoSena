<?php
$id = $_POST['dd'];

$conexion = mysql_connect("localhost","Steven","Steven");
mysql_select_db("sena",$conexion);
if (mysql_query("DELETE FROM asignacion WHERE id ='$id'")){
echo '<script>alert("LA ASIGNACION HA SIDO ELIMINADA SATISFACTORIAMENTE")</script>';
echo '<script>location.href="updateasignacion.php"</script>';
}

?>