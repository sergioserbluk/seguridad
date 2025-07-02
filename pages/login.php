<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=centro_estudiantes;charset=utf8mb4', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare('SELECT clave FROM usuarios WHERE nombre_usuario = ?');
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['clave'])) {
            echo 'Inicio de sesión exitoso';
        } else {
            echo 'Usuario o contraseña incorrectos';
        }
    } catch (PDOException $e) {
        echo 'Error de conexión: ' . $e->getMessage();
    }
} else {
    echo 'Acceso no permitido';
}
?>
