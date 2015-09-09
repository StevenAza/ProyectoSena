<!DOCTYPE html>
<html>
<head>
	<title>LISTA DE JEFES</title>
	 <link href="tablas.css"  type="text/css"  rel="stylesheet">
	  <link href="estilo.css"  type="text/css"  rel="stylesheet">
</head>
<body>
<div  id ="tabla2">
<center>
<h1>DATOS DE EL JEFE DE PROYECTO</h1>
</center>

<?php
$conexion = mysql_connect("localhost","Steven","Steven");
mysql_select_db("sena",$conexion);
$jefe = mysql_query("SELECT * FROM jefe");
echo "<table>
<tr>
<td>
ID
</td>
<td>
DOCUMENTO
</td>

<td>
NOMBRE
</td>
<td>
APELLIDO
</td>
<td>
FECHA DE NACIMIENTO
</td>
<td>
E-MAIL
</td>
<td>
NUMERO
</td> 
<td>
DIRECCION
</td>
</tr>
";
while($fila = mysql_fetch_array($jefe)){
	echo '
	<tr>';
	echo '<td>'.$fila["ID"].'</td>';
	echo'<td>'.$fila["documento"].'</td>';
	echo'<td>'.$fila["nombre"].'</td>';
	echo'<td>'.$fila["apellido"].'</td>';
	echo'<td>'.$fila["fecha"].'</td>';
	echo'<td>'.$fila["email"].'</td>';
	echo'<td>'.$fila["numero"].'</td>';
	echo'<td>'.$fila["direccion"].'</td>';
	echo'</tr>';
	
}
 echo '</table>';


?>
</div>
<center>
<div id ="ujefe">
<form action="upjefe.php" method="POST">
<h1>ACTUALIZA LOS DATOS </h1>
<p>ESCRIBE EL ID PARA CONTINUAR</p>
<input type="text" id="text" name ="ad">
<br>
<br>
<input type = "submit" id ="btablas1" value="ACTUALIZAR">
</form>

<br>
<br>

<form action ="ingresarjefe.php" method ="POST"> 
<h1>REGISTRO JEFE</h1>
<br>
<input type = "submit" id ="rtablas" value="REGISTRAR">
</form>

<form action ="deletejefe.php" method ="POST"> 
<h1>ELIMINAR JEFE</h1>
<p>ESCRIBA EL ID DE<br/> EL JEFE PARA CONTINUAR</p>
<input type ="text" id="text" name="dd">
<br>
<br>
<input type = "submit" id ="btablas" value="ELIMINAR">
</form>

</center>
</div>

</body>
</html>