<html>
<head>
<title>Login</title>
<style>
h1,h2{text-align:center;
}
table{
	width:25%;
	background-color: #FFC;
	border: 2px dotted #F00;
	margin:auto;
}
.izq{text-align:right;
}
.der{text-align:left;
}
td{
text-align:center;
padding:10px;
}
</style>
</head>
<body>
<?php
if(isset($_POST["enviar"])){
try{
	$base=new PDO("mysql:host=localhost; dbname=pruebas", "root", "1234567890");
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql="SELECT * FROM usuarios_pass WHERE USUARIOS= :login AND PASSWORD= :password";
	$resultado=$base->prepare($sql);
	$login=htmlentities(addslashes($_POST["login"]));
	$password=htmlentities(addslashes($_POST["password"]));
	$resultado->bindValue(":login", $login);
	$resultado->bindValue(":password", $password);
	$resultado->execute();
	$numero_regristo=$resultado->rowCount();
	if($numero_regristo!=0){
		session_start();
		$_SESSION["usuario"]=$_POST["login"];
	}else{
		echo "Error. Usuario o contraseña incorrectos";
	}
}catch(Exception $e){
	die("Error: " . $e->getMessage());
}
}
?>
<?php
    if(!isset($_SESSION["usuario"])){
        include("form.html");
    }else{
        echo "Usuario: " . $_SESSION["usuario"];
    }
?>
<h2>CONTENIDO DE LA WEB</h2>
<table width="800" border="0">
<tr>
    <td><img src="img/1.jpg" width="300" height="166"></td>
    <td><img src="img/2.png" width="300" height="171"></td>
</tr>
<tr>
    <td><img src="img/3.png" width="300" height="166"></td>
    <td><img src="img/4.jpg" width="300" height="197"></td>
</tr>
</table>
</body>
</html>