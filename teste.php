<?php

try {

    $pdo = new PDO(
        'mysql:host=localhost;dbname=pentestWeb;charset=utf8mb4',
        'root',
        '',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );

    echo '<h1>CONEXÃO OK!</h1>';

} catch (PDOException $e) {

    echo '<h1>ERRO NA CONEXÃO</h1>';

    echo '<pre>';
    echo htmlspecialchars($e->getMessage());
    echo '</pre>';
}