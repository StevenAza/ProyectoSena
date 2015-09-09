<!DOCTYPE html>
<html>
<head>
	<title>ACTUALIZAR</title>
</head>
<body>

</body>
</html>
<?php

$di = $_POST['di'];


if($conexion = mysql_connect("localhost","Steven","Steven")){
	//echo'si';
}
if(mysql_select_db("sena",$conexion)){
	//echo 'si conecté';
}
if($fila = mysql_query("DELETE  FROM proyectos WHERE id='$di' ")){

echo '<script>alert("HE ELIMINADO LOS DATOS")</script>';
echo '<script>location.href ="updateproyecto.php"</script>';

//echo "sí";
//}else{
	//echo "no";
}



?>