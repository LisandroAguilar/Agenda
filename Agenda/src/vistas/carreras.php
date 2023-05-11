<!DOCTYPE html>
<html>
<head>
    <title>Tabla de usuarios</title>
    <style>
        /* Estilo para la tabla */
        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        /* Estilo para los encabezados de la tabla */
        th {
            background-color: #4CAF50;
            color: white;
            text-align: left;
            padding: 8px;
        }

        /* Estilo para las celdas de la tabla */
        td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        /* Estilo para las filas impares de la tabla */
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        nav {
        background-color: #4CAF50; /* Color de fondo */
        height: 50px; /* Altura del nav */
        }

        ul {
        list-style-type: none; /* Eliminar viñetas de la lista */
        margin: 0;
        padding: 0;
        overflow: hidden;
        height: 100%;
        }

        li {
        float: left; /* Alinear los elementos de la lista a la izquierda */
        height: 100%;
        }

        a {
        display: block;
        color: white; /* Color del texto */
        text-align: center; /* Alinear el texto al centro */
        padding: 16px; /* Espacio entre el texto y el borde del enlace */
        text-decoration: none; /* Eliminar subrayado de los enlaces */
        }

        /* Cambiar el color de fondo del enlace activo */
        a.active {
        background-color: #333;
        }
        .add-button {
        text-align: center;
        margin-top: 20px;
        }

    </style>
</head>
<body>
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

    // Realizar una consulta a la tabla "usuario"
    $sql = "SELECT * FROM carrera";
    $result = mysqli_query($conn, $sql);
    ?>

    <nav>
        <ul>
            <li><a href="menu.php">Inicio</a></li>
            <li><a href="usuarios.php">Usuarios</a></li>
            <li><a href="carreras.php">Carreras</a></li>
            <li><a href="profesores.php">Profesores</a></li>
            <li><a href="materias.php">Materias</a></li>
            <li><a href="grupos.php">Grupos</a></li>
        </ul>
    </nav>

    <h1>Tabla de Carreras</h1>

    <table>
        <tr>
            <th>ID de Carrera</th>
            <th>Carrera</th>
            <th>Eliminar</th>
            <th>Modificar</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['idcarrera']; ?></td>
                <td><?php echo $row['nomcarrera']; ?></td>
                <td>
                    <form method="post" action="../controlador/eliminar_carrera.php">
                        <input type="hidden" name="idcarrera" value="<?php echo $row['idcarrera']; ?>">
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
                <td>
                    <form method="post" action="../controlador/modificar_carrera.php">
                        <input type="hidden" name="idcarrera" value="<?php echo $row['idcarrera']; ?>">
                        <button type="submit">Modificar</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
    <div class="add-button">
        <button onclick="window.location.href = 'rcarrera.php';">Agregar carrera</button>
    </div>

    <?php
    // Cerrar la conexión
    mysqli_close($conn);
    ?>
</body>
</html>
