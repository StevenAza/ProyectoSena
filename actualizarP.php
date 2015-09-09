
<?php
$ui = $_POST['id'];
//echo $ui;

if($conexion = mysql_connect("localhost","Steven","Steven")){
//	echo 'conecté';
}
if(mysql_select_db("sena",$conexion)){
//	echo 'conecté';
}
if($peticion = mysql_query("SELECT * FROM proyectos WHERE id='$ui'")){
//	echo 'hice el from';
}
if($p = mysql_fetch_array($peticion)){
//	echo 'sí :)';
}else{
//	echo 'no :c ';
}
$titulo = $p['titulo'];
//echo $titulo;
$descripcion = $p['descripcion'];
//echo $descripcion;
$objetivo = $p['objetivo'];
//echo $objetivo;
$fecha = $p['fecha'];
//echo $fecha;
$duracion = $p['duracion'];
//echo $duracion;






?>


<!DOCTYPE html>
<html>
<head>
	<title>UPDATE</title>
<link href="estilo.css"  type="text/css"  rel="stylesheet">
<link type="text/css" rel="stylesheet" href="tablas.css">

</head>
<body >
<form action="validarA.php" method="POST">
<div id="panel2">
<center>
<h1>ACTUALIZACION DE DATOS</h1>
<input name ="id" type="hidden" value = "<?php echo $ui;?>" id="text" >
<p>TITULO DEL PROYECTO : </p>
<input type="text" name="titulo" id = "text" value ="<?php echo $titulo ;?>">
<p> DESCRIPCION DEL PROYECTO : </p>
<input type="text" name="descripcion" id = "text" value ="<?php echo $descripcion; ?>">
<p> OBJETIVO DEL PROYECTO: </p>
<input type="text" name="objetivo" id ="text" value="<?php echo $objetivo; ?>">
<p> FECHA DE INICIO : </p>
<input type="date" name="fecha" id = "text" value ="<?php echo $fecha;?>">
<p> DURACION(EN SEMANAS) : </p>
<input type="text" name="duracion" id ="text" value="<?php echo $duracion; ?>">
<BR>
<BR>

<input type ="submit" value="ACTUALIZAR" id="btablas1">
</center>

</div>

</form>
</body>
</html>