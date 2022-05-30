<?php

try {
    $pdo = new PDO("mysql:dbname=oficina;local=localhost", "root", "");

    // 
} catch (PDOException $e) {
    echo "Erro --> " . $e->getMessage();
}
