<?php
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

// Obtener el ID de usuario que se quiere eliminar
$idusuario = $_POST['idusuario'];

// Realizar la eliminación del usuario en la tabla "t_usuarios"
$sql = "DELETE FROM t_usuarios WHERE idusuario=$idusuario";

if (mysqli_query($conn, $sql)) {
    header("Location: ../vistas/usuarios.php");
} else {
    header("Location: ../vistas/usuarios.php");
    echo "Error al eliminar el usuario: " . mysqli_error($conn);
}

// Cerrar la conexión
mysqli_close($conn);
?>
