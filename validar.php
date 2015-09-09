<?php
$a = $_POST['Opciones'];
//echo $a;
$nick = $_POST['usuario'];
$contrasena =$_POST['contrasena'];

$conexion = mysql_connect("localhost","Steven","Steven");
if(mysql_select_db("Sena",$conexion)){
	
}else{
	
}

//mysql_query("INSERT INTO jefe VALUES('','1000','Pedro','Salamanca','30-1990-1993','micorreo@hotmai.com','3102320','cra 34#20 a 46','$a','$nick','$contrasena')");


  
if($datos = mysql_query("SELECT * FROM login WHERE rol ='$a' AND usuario ='$nick'")){


}else{
	
}
$f = mysql_fetch_array($datos);
	if ($contrasena ==$f['contrasena']){
		
		
	
	}
	else
	{
		echo '<script>alert("Es incorrecta")</script>';
		echo '<script>location.href="login.php"</script>';
	}
	

	if($a =="Administrador"){
			 echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script>';
		echo '<script>location.href="administrador.php"</script>';
	}elseif($a = "Jefe"){
	 echo '<script>alert("BIENVENIDO JEFE")</script>';
	 echo '<script>location.href="jefe.php"</script>';
	}
	else{
		echo '<script>alert(:c)</script>';
	}
    




?>