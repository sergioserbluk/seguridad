<?php
// Ejemplo vulnerable a SQL Injection.
// Se construye la consulta concatenando valores recibidos por GET.
// Si el atacante envia datos maliciosos puede alterar la consulta.

$user = $_GET['user'];
$pass = $_GET['pass'];

$db = new mysqli('localhost', 'usuario', 'clave', 'mi_bd');
$result = $db->query("SELECT * FROM users WHERE username='$user' AND password='$pass'");

if ($row = $result->fetch_assoc()) {
    echo "Bienvenido " . $row['username'];
} else {
    echo "Credenciales incorrectas";
}

// Solución recomendada: utilizar consultas preparadas con mysqli o PDO.
// $stmt = $db->prepare('SELECT * FROM users WHERE username=? AND password=?');
// $stmt->bind_param('ss', $user, $pass);
// $stmt->execute();
?>
