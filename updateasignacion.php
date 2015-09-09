<!DOCTYPE html>
<html>
<head>
	<title>ASIGNACIONES</title>


<link type="text/css" rel="stylesheet" href="tablas.css">
<link href="estilo.css"  type="text/css"  rel="stylesheet">

</head>
<body>

<div id ="asign">
<?php
 $conexion =mysql_connect("localhost","Steven","Steven");
mysql_select_db("sena",$conexion);
$peticion = mysql_query("SELECT * FROM asignacion");
echo '<h1>TABLA DE ASIGNACIONES</h1>';
echo '<table>
<tr>
<td>ID</td>
<td>ENCARGADO DEL PROYECTO</td>
<td>TITULO DEL PROYECTO</td>
</td>
</tr>


';
while ($fila = mysql_fetch_array($peticion)){

echo '<tr>';
echo '<td>'.$fila['ID'].'</td>';
echo '<td>'.$fila['jefe'].'</td>';
echo '<td>'.$fila['titulo'].'</td>';



echo '</tr>';


}
echo '<table>';
?>



</div>
<div id ="bloque">
<center>
<form action="actasign.php" method="POST">	
<h1>ACTUALIZAR DATOS</h1>
<br/>
<h3>ACTUALIZAR ASIGNACION</h3>
<p>ESCRIBA EL ID PARA CONTINUAR:</p>
<input type="text" id ="text" name="ad">
<br/>
<br/>
<input type="submit" value="ACTUALIZAR" id="botonAc">
</form>
<br/>
<form action ="borasign.php" method="POST">
<h3>ELIMINAR ASIGNACION</h3>
<p>ESCRIBA EL ID PARA CONTINUAR</p>
<input type="text" id="text" name="dd">
<br>
<br>
<input type="submit" value="ELIMINAR" id ="borrar">
</form>
</center>
</div>

</body>
</html>