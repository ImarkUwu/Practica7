<?php
$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$db   = getenv('DB_NAME');

mysqli_report(MYSQLI_REPORT_OFF);
$conn = new mysqli($host, $user, $pass, $db);

echo "<h1>Hola Mundo</h1>";

if ($conn->connect_error) {
    echo "<p style='color:red'>Error de conexión: " . $conn->connect_error . "</p>";
} else {
    $result = $conn->query("SELECT 'Conexión exitosa a MySQL' AS mensaje, VERSION() AS version");
    $row = $result->fetch_assoc();
    echo "<p style='color:green'>" . $row['mensaje'] . "</p>";
    echo "<p>Versión de MySQL: " . $row['version'] . "</p>";
}
?>