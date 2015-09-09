<?php
$conexion = mysql_connect("localhost","Steven","Steven");
mysql_select_db("sena",$conexion);

$peticion = mysql_query("SELECT * FROM asignacion");







$peticion2 = mysql_query("SELECT * FROM fases");
echo '<table>';
while($filas=mysql_fetch_array($peticion2)){
	echo '<tr>';

	while($array = mysql_fetch_array($peticion)){
	$titulo = $array['titulo'];

	echo '<tr>'.$titulo.'</tr>';
	
}



echo '<td>'.$filas['id'].'</td>';

echo '<td>'.$filas['fase'].'</td>';
echo '<td>'.$filas['rol'].'</td>';
echo '</tr>';
}

echo '</table>';



?>