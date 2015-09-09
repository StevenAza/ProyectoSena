<!DOCTYPE html>
<html>
<head>
	<title>PROYECTOS</title>
	<meta charset ="utf-8">
	<link type="text/css" rel="stylesheet" href="estilo.css">
</head>

<body>
<center>

<form action="vproyectos.php" method="POST">
<div id ="admin">
<h1>GESTIONAR PROYECTOS</h1>
<br>
<p>TITULO DEL PROYECTO<p>
<input type ="text" name ="titulo" id ="text">
<br>
<p>DESCRIPCION<p>
<input type="text" name = "descripcion" id ="text">
<br>
<p>OBJETIVO<p>
<input type="text" name="objetivo" id ="text">
<br>
<p>FECHA DE INICIO<p>
<input type="date" name = "fecha" id ="text">
<br>
<p>DURACION(EN SEMANAS)<p>
<input type "text" name= "duracion" id ="text">
<br>
<br>
<input type="submit" value="REGISTRAR" id ="boton">
</form>
</center>
</div>
<center>
<div id ="tareas">

<h1>ASIGNAR PROYECTOS</h1>
<p>ESCOJA EL JEFE DE PROYECTO</p>

<form action="asignacion.php" method="POST">


<?php
echo "<select name='S'>";
$conexion = mysql_connect("localhost","Steven","Steven");
mysql_select_db("sena",$conexion);
$f = mysql_query("SELECT * FROM jefe WHERE rol='Jefe'");
while($array = mysql_fetch_array($f)){
	
echo " 
<option value='".$array['ID']." '>";

echo $array['nombre']." ".$array['apellido'];

echo "</option>";

}

echo '</select>';

?>


<br/>
<p>ESCOJA EL PROYECTO</p>

<?php

echo '<select name="M">';
$proyectos = mysql_query("SELECT * FROM  proyectos");
while($fila = mysql_fetch_array($proyectos)){
	echo "
	<option value='".$fila['id']."'>";
	echo $fila['titulo'];
	echo "</option>";

}
echo '</select>';
?>


<br>
<br>

<input type="submit" VALUE ="ASIGNAR" id="boton">
</form>
<br>
<p>*******</p>
<br>
<br>
<br>
<br>
<br>

</div>
</center>
<div id ="actualizar">
<center>
<h1>ACTUALIZAR</h1>

<br>
<p>***************</p>
<br>
<a href ="updateproyecto.php">
<input type="submit" value="VER PROYECTOS" id ="ver">
</a>
<br>
<p>______________</p>
<br>
<a href = "updatejefe.php">
<input type="submit" value="VER JEFES" id ="ver">
</a>
<br>
<p>___________________</p>
<br>
<a href ="updateasignacion.php">
<input type="submit" value="VER ASIGNACIONES" id ="ver">
</a>
<br>
</center>




</div>
</body>

</html>