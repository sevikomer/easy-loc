<?php
require_once '../layout/header.php';

//Connexion MySQL
$dsn = "mysql:host=127.0.0.1;dbname=easy-loc;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection réussie";
} catch (PDOException $e) {
    echo "Connection échouée: " . $e->getMessage();
}
var_dump($pdo);

require_once '../layout/footer.php';
