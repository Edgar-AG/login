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
echo "Hola: " . $_SESSION["usuario"] . "<br><br>";
?>
<p>Esto es informacion solo para usuarios regristados</p>
<table width="485" height="187" border="1">
<tr>
    <td colspan="3" align="center">Zona de Usuarios Regristados</td>
</tr>
<tr>
    <td><a href="usu2.php">Pagina 1</a></td>
    <td><a href="usu3.php">Pagina 2</a></td>
    <td><a href="usu4.php">Pagina 3</a></td>
</tr>
<tr>
    <td colspan="3" align="center"><a href="cierre.php">Cierra Sesion</a></td>
</table>
</body>
</html>