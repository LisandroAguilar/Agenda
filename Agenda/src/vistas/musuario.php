<!DOCTYPE html>
<html>

<head>
    <title>Modificar Usuario</title>
</head>

<body>
    <h1>Modificar Usuario</h1>
    <form action="../controlador/modificar_usuario.php" method="post">
    <input type="hidden" name="idusuario" value="<?php echo $row['idusuario']; ?>">
        <label for="Idusuario">ID de Usuario:</label>
        <input type="text" name="nuevoIdusuario" id="nuevoIdusuario"><br><br>
        <label for="usuario">Nuevo Usuario:</label>
        <input type="text" name="usuario" id="usuario"><br><br>
        <input type="submit" value="Guardar">
    </form>
</body>

</html>