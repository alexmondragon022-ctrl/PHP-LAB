
<?php
// Configurar la zona horaria de México
date_default_timezone_set('America/Mexico_City');

// Iniciar o recuperar la sesión
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Guardar la hora inicial solamente si no existe
if (!isset($_SESSION['hora_inicio'])) {
    $_SESSION['hora_inicio'] = time();
}

// Obtener la hora actual
$hora_actual = time();

// Obtener la hora inicial
$hora_inicio = $_SESSION['hora_inicio'];

// Calcular el tiempo activo
$tiempo_activo = $hora_actual - $hora_inicio;

// Convertir a minutos y segundos
$minutos = floor($tiempo_activo / 60);
$segundos = $tiempo_activo % 60;

// Dar formato a las horas
$inicio_formato = date("H:i:s", $hora_inicio);
$actual_formato = date("H:i:s", $hora_actual);
?>
