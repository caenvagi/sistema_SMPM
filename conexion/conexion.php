<?php
$host = 'localhost';  // El nombre de host (por ejemplo, 'localhost' o una dirección IP)
$dbname = 'sistema_SMPM';  // El nombre de la base de datos a la que te quieres conectar
$username = 'root';  // El nombre de usuario para la base de datos
$password = '';  // La contraseña del usuario

try {
    // Establecer la conexión usando PDO
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";  // DSN (Data Source Name) con la configuración de MySQL
    $pdo = new PDO($dsn, $username, $password);

    // Configurar PDO para lanzar excepciones en caso de error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexión exitosa a la base de datos.";

} catch (PDOException $e) {
    // Si ocurre un error, mostrar un mensaje
    echo "Error en la conexión: " . $e->getMessage();
}
?>