<?php
$ad = $_POST['ad'];
$conexion = mysql_connect("localhost","Steven","Steven");
mysql_select_db("sena",$conexion);
if($f = mysql_query("SELECT * FROM jefe WHERE ID='$ad'")){
	//echo 'está bien seleccionada';
}
$array = mysql_fetch_array($f);

$documento = $array['documento'];
//echo $documento;
$nombre = $array['nombre'];
//echo $nombre ;
$apellido = $array['apellido'];
//echo $apellido ;
$fecha = $array['fecha'];
//echo $fecha;
$email = $array['email'];
//echo $email;
$numero = $array['numero'];
//echo $numero;
$direccion = $array['direccion'];
//echo $direccion;
?>

<!DOCTYPE html>
<html>
<head>

	<title>ACTUALIZAR</title>
	<link href="tablas.css"  type="text/css"  rel="stylesheet">
	  <link href="estilo.css"  type="text/css"  rel="stylesheet">
</head>
<body>
<form action="validarJ.php" method="POST">
<div id ='actualizacion'>
<center>
<h1>ACTUALIZACIÓN DE DATOS</h1>
<input type="hidden" type="text" value="<?php echo $ad ?>" name ='id' id='text'>
<p>DOCUMENTO</p>
<input type="text" value="<?php echo $documento?>" name ='documento'  id='text'>
<p>NOMBRE</p>
<input type="text" value="<?php echo $nombre ?>" name='nombre'  id='text'>
<p>APELLIDO</p>
<input type="text" value="<?php echo $apellido?>" name='apellido'  id='text'>
<p>FECHA</p>
<input type="date" value="<?php echo $fecha?>" name ='fecha'  id='text'>
<p>EMAIL</p>
<input type="email" value="<?php echo $email ?>" name ='email'  id='text'>
<p>NUMERO TELEFONICO</p>
<input type="text" value="<?php echo $numero ?>" name='numero'  id='text'>
<p>DIRECCION</p>
<input type="text" value="<?php echo $direccion ?>" name ='direccion'  id='text'>
<br>
<br>
<br>
<br>
<br>
<input type="submit" value="ACTUALIZAR" id='btablasa'>
</form>
</center>
</div>
</body>
</html>
