<?php
$servername = "localhost";
$username = "root";
$password = "5160129802";
$dbname = "formulario";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$codigo = $_POST["codigo"];
$nombre = $_POST["nombre"];
$estatus = $_POST["estatus"];

// Preparar la consulta SQL
$sql = "INSERT INTO personas (codigo, nombre, estatus) VALUES ('$codigo', '$nombre', '$estatus')";

if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>



