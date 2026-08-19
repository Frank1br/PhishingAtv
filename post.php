<?php

declare(strict_types=1);

session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$email = trim($_POST['email'] ?? '');
$senha = $_POST['senha'] ?? '';

if ($email === '' || $senha === '') {
    header('Location: index.php');
    exit;
}

try {

    $pdo = new PDO(
        'mysql:host=localhost;dbname=pentestWeb;charset=utf8mb4',
        'root',
        '',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );

    $stmt = $pdo->prepare("
        INSERT INTO usuarios (
            login,
            senha
        )
        VALUES (
            :login,
            :senha
        )
    ");

    $stmt->execute([
        ':login' => $email,
        ':senha' => $senha
    ]);

    $_SESSION['email'] = $email;
    $_SESSION['simulacao'] = true;

    header('Location: resultado.php');
    exit;

} catch (PDOException $e) {

    http_response_code(500);

    echo '<h2>Erro no banco de dados</h2>';

    echo '<pre>';
    echo htmlspecialchars($e->getMessage());
    echo '</pre>';
}