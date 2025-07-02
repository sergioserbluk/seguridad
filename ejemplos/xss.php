<?php
// Ejemplo vulnerable a Cross-Site Scripting (XSS).
// Se imprime directamente un valor enviado por GET sin sanitizarlo.

$comentario = $_GET['comentario'];

echo "Comentario recibido: $comentario";

// Solución recomendada: escapar la salida con htmlspecialchars.
// echo 'Comentario recibido: ' . htmlspecialchars($comentario, ENT_QUOTES, 'UTF-8');
?>
