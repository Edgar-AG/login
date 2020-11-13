<html>
<head>
<title></title>
</head>
<body>
    <?php
    $conexion=mysqli_connect("localhost","root","1234567890","pruebas") or die("Problemas en la conexion");
    mysqli_query($conexion, "insert into usuarios_pass2 (Nombre,Posicion,Oficina,Años,Fecha_de_inicio,Salario) 
    values ('$_REQUEST[nom]','$_REQUEST[pos]','$_REQUEST[ofi]','$_REQUEST[ano]','$_REQUEST[fec]','$_REQUEST[sal]') ")
    or die("Problemas en el select: ".mysqli_error($conexion));
    if($conexion){
        echo "Se agregaron los datos";
    }else{
        echo "No se agregaron los datos";
    }
    mysqli_close($conexion);
    ?><br>
    <a href="tab.php">Regresar</a>
</body>
</html>