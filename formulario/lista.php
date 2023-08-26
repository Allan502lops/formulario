<!DOCTYPE html>
<html>
<head>
    <title>Usuarios Ingresados</title>
</head>
<body>
    <h1>Usuarios Ingresados</h1>
    
    <h2>Listado de Usuarios:</h2>
    <ul>
        <?php
        
        $servername = "localhost";
        $username = "root";
        $password = "5160129802";
        $dbname = "formulario";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

       
        $select_sql = "SELECT codigo, nombre, estatus FROM personas";
        $result = $conn->query($select_sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li>Código: " . $row["codigo"] . ", Nombre: " . $row["nombre"] . ", Estatus: " . $row["estatus"] . "</li>";
            }
        } else {
            echo "<li>No hay datos para mostrar.</li>";
        }
        $conn->close();
        ?>
    </ul>
</body>
</html>
