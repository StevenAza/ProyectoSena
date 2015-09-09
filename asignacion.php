
<?php

$jefe = $_POST['S'];
$i = $_POST['M'];
$conexion = mysql_connect("localhost","Steven","Steven");
mysql_select_db("sena",$conexion);

if($proyecto = mysql_query("SELECT * FROM proyectos WHERE id ='$i'")){

}else {

}
if($jefe = mysql_query("SELECT * FROM jefe WHERE ID ='$jefe'")){

}else{

}

if($arrayp = mysql_fetch_array($proyecto)){

}
if($arrayj = mysql_fetch_array($jefe)){

}


$NOMBRE = $arrayj['nombre']." ".$arrayj['apellido'];
$TITULO = $arrayp['titulo'];
if(mysql_query("INSERT INTO asignacion VALUES ('', '$NOMBRE','$TITULO') ")){
	echo '<script>alert("LOS DATOS FUERON AGREGADOS")</script>';
	echo '<script>location.href="administrador.php"</script>';
}



?>