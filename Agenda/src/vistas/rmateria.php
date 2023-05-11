
<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!--Estilos personalizados-->

    <link href="../controlador/css/estilos.css" rel="stylesheet">
    <style>
        h2, h3 {
            margin: 0 auto;
            text-align: center;
            width: 400px;
        }
    </style>
    <!--<link rel="stylesheet" href="..//css/estilos.css">-->
</head>

<body>
    <h2>Registrate</h2>
    <div class="izquierdo2">
        <form action="../controlador/valida_materia.php" method="POST">
            <input name="idmateria_txt" type="number" placeholder="Ingresa tu Idmateria"><br><br>
            <input name="nommateria_txt" type="text" placeholder="Ingresa tu nommateria"><br><br>
            <input type="submit" value="Registrar">
        </form>
    </div>

</body>

</html>

