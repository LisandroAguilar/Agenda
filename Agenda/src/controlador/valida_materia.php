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
$idmateria = $_POST['idmateria_txt'];
$nommateria = ($_POST['nommateria_txt']);
$opciones = ['cost' => 12,];
if (!empty($idmateria) && !empty($nommateria)) {
    $sql = "INSERT INTO materia(idmateria,nommateria) VALUES (:idmateria, :nommateria)";
    $sql = $conn->prepare($sql);

    $sql->bindParam(':idmateria', $idmateria, PDO::PARAM_STR, 40);
    $sql->bindParam(':nommateria', $nommateria, PDO::PARAM_STR, 72);

    if ($sql->execute()) {
        header("Location: ../vistas/materias.php");
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