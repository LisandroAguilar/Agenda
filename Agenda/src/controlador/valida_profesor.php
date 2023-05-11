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
$idprofesor = $_POST['idprofesor_txt'];
$nomprofesor = ($_POST['nomprofesor_txt']);
$opciones = ['cost' => 12,];
if (!empty($idprofesor) && !empty($nomprofesor)) {
    $sql = "INSERT INTO profesor(idprofesor,nomprofesor) VALUES (:idprofesor, :nomprofesor)";
    $sql = $conn->prepare($sql);

    $sql->bindParam(':idprofesor', $idprofesor, PDO::PARAM_STR, 40);
    $sql->bindParam(':nomprofesor', $nomprofesor, PDO::PARAM_STR, 72);

    if ($sql->execute()) {
        header("Location: ../vistas/profesores.php");
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