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
$idmateria = $_POST['idmateria'];

// Realizar la eliminación del usuario en la tabla "t_usuarios"
$sql = "DELETE FROM materia WHERE idmateria=$idmateria";

if (mysqli_query($conn, $sql)) {
    header("Location: ../vistas/materias.php");
} else {
    header("Location: ../vistas/materias.php");
    echo "Error al eliminar el materia: " . mysqli_error($conn);
}

// Cerrar la conexión
mysqli_close($conn);
?>
