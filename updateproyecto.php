<!DOCTYPE html>
<html>
<head>
<meta charset ="utf-8">
	<link type="text/css" rel="stylesheet" href="tablas.css">
	 <link href="estilo.css"  type="text/css"  rel="stylesheet">
	<title>TABLAS</title>
</head>
<body>
<div id ="tabla">

<h1>TABLA DE PROYECTOS </h1>

<?php
$conexion = mysql_connect("localhost","Steven","Steven");
mysql_select_db("sena",$conexion);
$preparar = mysql_query("SELECT * FROM proyectos");
echo "<table>
<tr>
<td>ID</td>
<td>TITULO</td>
<td>DESCRIPCION</td>
<td>OBJETIVOS</td>
<td>FECHA DE INICIO</td> 
<td>DURACION</td>
</tr>";

while($fila = mysql_fetch_array($preparar)){
	echo '<tr>';
	echo '<td>'.$fila['id'].'</td>';
	echo '<td>'.$fila['titulo'].'</td>';
	echo '<td>'.$fila['descripcion'].'</td>';
	echo '<td>'.$fila['objetivo'].'</td>';
	echo '<td>'.$fila['fecha'].'</td>';
	echo '<td>'.$fila['duracion'].'</td>';
	
	echo '</tr>';

}
echo "</table>";




?>
</div>
<div id ="panel">

<center>
<h1>EDITAR DATOS</h1>
<br>

<form action="actualizarP.php" method="POST">
<h3>ACTUALIZAR DATOS</h3>
<p>ESCRIBA EL ID DEL PROYECTO, PARA CONTINUAR</p>
<input type="text" id="text" name ="id">
<br>
<br>
<input type="submit" value="ACTUALIZAR" id ="btablas1">

</form>


<br>
<br>
<form action="upproyecto.php" method="POST">
<h3>ELIMINAR PROYECTO</h3>
<p>ESCRIBA EL ID DEL PROYECTO, PARA CONTINUAR</p>
<input type="text" id ="text" name ="di">
<br>
<br>

<input type="submit" id ="btablas" value="ELIMINAR">
</form>
</center>
</div>



</body>
</html>