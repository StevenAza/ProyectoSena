<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
    <meta charset="utf-8">
    <link href="estilo.css"  type="text/css"  rel="stylesheet">
</head>
<body>
    <form action="validar.php" method="post">
<div id = "div">
<center>
<h1>INGRESE LOS DATOS</h1>
<br>
    <p>SELECCIONE SU ROL</p>
    <select name="Opciones" id ="n">
    <option value ="Administrador" id ="A">ADMINISTRADOR</option>
    <option value="Jefe" id ="B">JEFE</option>
    <option value="Analista" id ="C">ANALISTA</option>
    <option vaue = "Desarrolador" id ="D">DESARROLADOR</option>
    <option value="Tester" id ="E">TESTER</option>
    </select>
    <p>NOMBRE</p>
<input type="text" name="usuario" id = "text">
<br/>
    <p>CONTRASEÑA</p>
<input type="password" name ="contrasena" id = "text" >
<br/>
<br/>
<input type="submit" value="INGRESAR" id ="boton">


</center>
</div>
        </form>
</body>
</html>