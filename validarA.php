
<?php
$id = $_POST['id'];
//echo $id;
$titulo = $_POST['titulo'];
//echo $titulo;
$descripcion = $_POST['descripcion'];
//echo $descripcion;
$objetivo = $_POST['objetivo'];
//echo $objetivo;
$fecha = $_POST['fecha'];
//echo $fecha;
$duracion = $_POST['duracion'];
//echo $duracion;

$conexion = mysql_connect("localhost","Steven","Steven");
if(mysql_select_db("sena",$conexion)){

}
if(mysql_query("UPDATE proyectos SET titulo ='$titulo', descripcion ='$descripcion', objetivo='$objetivo' , fecha='$fecha',duracion ='$duracion' WHERE id ='$id'")){

echo '<script>alert("LOS DATOS HAN SIDO ACTUALIZADOS")</script>';
echo '<script>location.href="updateproyecto.php"</script>';
}else{
	echo '<script>alert("ño :c")</script>';
}



 ?>