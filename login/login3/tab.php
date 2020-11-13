<html>
<head>
<title></title>
<style>
.container-add{
    width:90%;
    margin: 50px auto;
}
.container__title{
    margin: 0;
    padding: 10px;
    background: rgba(120,65,40,1);
    color: white;
    font-size: 1.9em;
    text-align: center;
}
.container__form{
    background: white;
    box-shadow: 0 0 20px #333;
    padding: 20px;
    display: flex;
    flex-wrap: wrap;
}
.container__label{
    font-size: 1.3em;
    width: 20%;
}
.container__input{
    width: 25%;
    margin-right: 10px;
    margin-bottom: 5px;
    font-size: 1em;
    padding: 5px;
}
.container__submit{
    background: rgba(120,65,40,1);
    color: white;
    padding: 10px;
    margin: 15px auto;
    width: 100px;
    font-size: 1.1em;
    cursor: pointer;
}
</style>
</head>
<body>
<div class="container-add">
    <h2 class="container__title">Agregar Datos</h2>
    <form action="a2.php" method="POST"   class="container__form">
        <label for="" class="container__label">Nombre:</label>
        <input name="nom" type="text" class="container__input">
        <label for="" class="container__label">Posicion:</label>
        <input name="pos" type="text" class="container__input">
        <label for="" class="container__label">Oficina:</label>
        <input name="ofi" type="text" class="container__input">
        <label for="" class="container__label">Años:</label>
        <input name="ano" type="text" class="container__input">
        <label for="" class="container__label">Fecha de inicio:</label>
        <input name="fec" type="text" class="container__input">
        <label for="" class="container__label">Salario:</label>
        <input name="sal" type="text" class="container__input">
        <input class="container__submit" type="submit" value="Agregar">
    </form>
    <a href="cierre.php">Cerrar Sesion</a>
</div>
</body>
</html>