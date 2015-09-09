<!DOCTYPE html>
<html>
<head>
	<title>
	REGISTRO JEFE	

	</title>
	 <link href="tablas.css"  type="text/css"  rel="stylesheet">
	  <link href="estilo.css"  type="text/css"  rel="stylesheet">
</head>
<body id ="si">
<div id ="registroJ">
<center>
<h1>INGRESAR JEFE</h1>
<h2>INGRESE LOS DATOS A CONTINUACIÓN </h2>
<br>
<form action="validaringreso.php" method="POST">
<p>DOCUMENTO</p>
<input type="text" id ="text" name ="documento">
<p>NOMBRE </p>
<input type="text" id ="text" name ="nombre">
<br>
<p>APELLIDO</p>
<input type="text" id ="text" name ="apellido">
<br>
<p>FECHA </p>
<input type="date" id ="text" name ="fecha">
<br>
<p>E-MAIL</p>
<input type="text" id ="text" name ="email">
<br>
<p>NÚMERO TELEFÓNICO</p>
<input type="text" id ="text" name ="numero">
<br>
<p>DIRECCIÓN</p>
<input type="text" id ="text" name ="direccion">
<br>
<input type="hidden" value="Jefe" name="rol">
<p>USUARIO</p>
<input type="text" id ="text" name ="usuario">
<br>
<p>CONTRASEÑA</p>
<input type="text" id ="text" name ="contrasena">
<br>
<br>
<input type="submit" value="REGISTRAR" id="u">
<br>
<br>
</form>
</center>
</div>
</body>
</html>