<?php
require('conexion2.php');
/*define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'bd_agenda');
// Ahora, establecemos la conexión.
try {
    // Ejecutamos las variables y aplicamos UTF8
    $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    echo "Conexión Satisfactoria";
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}*/
$message = '';
$idcarrera = $_POST['idcarrera_txt'];
$nomcarrera = ($_POST['nomcarrera_txt']);
$opciones = ['cost' => 12,];
if (!empty($idcarrera) && !empty($nomcarrera)) {
    $sql = "INSERT INTO carrera(idcarrera,nomcarrera) VALUES (:idcarrera, :nomcarrera)";
    $sql = $conn->prepare($sql);

    $sql->bindParam(':idcarrera', $idcarrera, PDO::PARAM_STR, 40);
    $sql->bindParam(':nomcarrera', $nomcarrera, PDO::PARAM_STR, 72);

    if ($sql->execute()) {
        header("Location: ../vistas/carreras.php");
    } else {
    
        $message= 'Ocurrió un Problema';
        print_r($sql->errorInfo());
    }
} else {
    ?>
    <h2>Ocurrió un Problema</h2>
<?php
}
?>