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
$idprofesor = $_POST['idprofesor'];

// Realizar la eliminación del usuario en la tabla "t_usuarios"
$sql = "DELETE FROM profesor WHERE idprofesor=$idprofesor";

if (mysqli_query($conn, $sql)) {
    header("Location: ../vistas/profesores.php");
} else {
    header("Location: ../vistas/profesores.php");
    echo "Error al eliminar el profesor: " . mysqli_error($conn);
}

// Cerrar la conexión
mysqli_close($conn);
?>
