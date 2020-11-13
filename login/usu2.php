<html>
<head>
<title>Usuario</title>
</head>
<body>
<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("location:login.php");
}
?>
<h1>Bienvenidos Usuarios</h1>
<?php
echo "Usuario: " . $_SESSION["usuario"] . "<br><br>";
?>
<p>Esto es informacion solo para usuarios regristados</p>
<p><a href="usu.php">Volver</a></p>
<p><a href="cierre.php">Cierra Sesion</a></p>
</body>
</html>