<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Configuración de la conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bdagendalis";

    // Crear la conexión
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Verificar la conexión
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    // Obtener los datos del usuario que se quiere modificar
    $idusuario = $_POST['idusuario'];
    $nuevoIdusuario = $_POST['nuevoIdusuario'];
    $usuario = $_POST['usuario'];

    // Verificar si el nuevo valor del idusuario ya existe en la base de datos
    $checkSql = "SELECT COUNT(*) AS count FROM t_usuarios WHERE idusuario='$nuevoIdusuario'";
    $checkResult = mysqli_query($conn, $checkSql);
    $row = mysqli_fetch_assoc($checkResult);
    $count = $row['count'];

    if ($count > 0) {
        echo "El nuevo valor del idusuario ya existe. Por favor, elige otro valor.";
        exit;
    }

    // Realizar la modificación del usuario en la tabla "t_usuarios"
    $sql = "UPDATE t_usuarios SET idusuario='$nuevoIdusuario', usuario='$usuario' WHERE idusuario='$idusuario'";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../vistas/usuarios.php");
        exit;
    } else {
        echo "Error al modificar el usuario: " . mysqli_error($conn);
    }

    // Cerrar la conexión
    mysqli_close($conn);
}
?>
