<?php
// Configuración de la base de datos
$host = 'localhost';
$dbname = 'sistema_judicial';
$username = 'root'; // Ajustá esto según tu configuración de servidor
$password = '';     // Ajustá esto según tu configuración de servidor

try {
    // Creación de la conexión mediante PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
    // Configuración para que PDO lance excepciones ante errores
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Opcional: configurar el modo de obtención de datos por defecto (array asociativo)
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    // Manejo de error de conexión
    die("Error en la conexión: " . $e->getMessage());
}
?>