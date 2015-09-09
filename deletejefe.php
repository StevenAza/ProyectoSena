<?php
$dd = $_POST['dd'];

$conexion = mysql_connect("localhost","Steven","Steven");
mysql_select_db("sena",$conexion);
if(mysql_query("DELETE FROM jefe WHERE id='$dd'")){
	echo '<script>alert("HE ELIMINADO SATISFACTORIAMENTE")</script>';
	echo '<script>location.href="updatejefe.php"</script>';
}else{
	echo '<script>alert("PAILAS :C")</script>';
}



?>