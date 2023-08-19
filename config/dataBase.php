<?php

require_once "../setting.php";

try {
    $dbConnection = new PDO(
        "mysql:host=$dbserver;
        dbname=$dbname", $username, $dbPassword
    );
    echo "¡Conectado correctamente!";
} catch (Exception $e) {
    echo "Error al conectar a la base de datos: " . $e->getMessage();
}

?>