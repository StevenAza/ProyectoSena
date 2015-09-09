<!DOCTYPE html>
<html>
<head>
	<title>ACTUALIZAR</title>
	<link type="text/css" rel="stylesheet" href="tablas.css">
<link href="estilo.css"  type="text/css"  rel="stylesheet">
</head>
<body>

<form action="validarAD.php" method="POST">

<center>
<div id ="canserbero">
<h1>ACTUALIZACION DE DATOS </h1>
<h1>**********</h1>
<h3>INGRESE LOS DATOS</h3>
<br>
<p>NOMBRE DE EL JEFE </p>

<?php
$id = $_POST['ad'];
$conexion = mysql_connect("localhost","Steven","Steven");
mysql_select_db("sena",$conexion);
$peticion = mysql_query("SELECT * FROM jefe");
echo '<select name="jefe">';
while($fila = mysql_fetch_array($peticion)){


$jefe = $fila['nombre'];
echo '<option value = "'.$fila['nombre'].'">'.$jefe.'</option>';



}
echo '</select>';

?>

<p>TITULO DEL PROYECTO</p>
<?php 
$peticion = mysql_query("SELECT * FROM proyectos");
echo '<select name="titulo">';
while($fila =mysql_fetch_array($peticion)){
	$titulo = $fila['titulo'];
echo '<option value ="'.$fila['titulo'].'"">'.$titulo.'</option>';

}
echo '</select>';
?>
<br>
<br>
<input type="hidden" name="id" value="<?php echo $id ?>">
<input type="submit" id="botonAc" value="ACTUALIZAR">

</form>

</center>



</div>
</body>
</html>