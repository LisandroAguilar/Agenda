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
$id = $_POST['id_txt'];
$grado = ($_POST['grado_txt']);
$grupo = ($_POST['grupo_txt']);
$opciones = ['cost' => 12,];
if (!empty($id) && !empty($grado) && !empty($grupo)) {
    $sql = "INSERT INTO t_grupos(id,grado,grupo) VALUES (:id, :grado, :grupo)";
    $sql = $conn->prepare($sql);

    $sql->bindParam(':id', $id, PDO::PARAM_STR, 40);
    $sql->bindParam(':grado', $grado, PDO::PARAM_STR, 72);
    $sql->bindParam(':grupo', $grupo, PDO::PARAM_STR, 50);

    if ($sql->execute()) {
        header("Location: ../vistas/grupos.php");
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