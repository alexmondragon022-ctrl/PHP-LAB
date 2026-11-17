
<?php

// Configurar zona horaria
date_default_timezone_set('America/Mexico_City');

// Reiniciar sesión si el usuario lo solicita
if (isset($_GET['reiniciar'])) {

    session_start();

    $_SESSION = [];

    session_destroy();

    // Regresar al inicio para crear una nueva sesión
    header("Location: index.php");
    exit;
}

// Iniciar o recuperar la sesión
require_once __DIR__ . '/includes/session.php';

// Cargar encabezado y menú
require_once __DIR__ . '/includes/header.php';

?>

<!-- BIENVENIDA -->

<section class="welcome">

    <span class="welcome-tag">BIENVENIDO A PHP LAB</span>

    <h2>Aprende PHP desde cero</h2>

    <p>
        Explora los fundamentos de la programación del lado
        del servidor mediante ejemplos prácticos y dinámicos.
    </p>

</section>

<!-- TARJETAS DE APRENDIZAJE -->

<section class="learning-section">

    <h2>Explora los temas de la unidad 4</h2>

    <p class="section-description">
        Selecciona un tema para comenzar a aprender.
    </p>

    <div class="cards-container">

        <a href="variables.php" class="learning-card">
            <span class="card-icon">&lt;?&gt;</span>
            <h3>Variables y tipos de datos</h3>
            <p>Aprende a declarar variables y utilizar diferentes tipos de datos en PHP.</p>
            <span class="card-link">Explorar tema →</span>
        </a>

        <a href="condicionales.php" class="learning-card">
            <span class="card-icon">IF</span>
            <h3>Estructuras condicionales</h3>
            <p>Conoce cómo funcionan if, else, elseif y switch.</p>
            <span class="card-link">Explorar tema →</span>
        </a>

        <a href="bucles.php" class="learning-card">
            <span class="card-icon">↻</span>
            <h3>Bucles y ciclos</h3>
            <p>Realiza repeticiones utilizando for, while y foreach.</p>
            <span class="card-link">Explorar tema →</span>
        </a>

        <a href="arreglos.php" class="learning-card">
            <span class="card-icon">[ ]</span>
            <h3>Arreglos</h3>
            <p>Organiza y manipula información mediante arrays.</p>
            <span class="card-link">Explorar tema →</span>
        </a>

        <a href="sesiones.php" class="learning-card">
            <span class="card-icon">⏱</span>
            <h3>Manejo de sesiones</h3>
            <p>Comprende cómo PHP mantiene información durante la navegación.</p>
            <span class="card-link">Explorar tema →</span>
        </a>

    </div>

</section>

<!-- REINICIAR SESIÓN -->

<section class="restart-section">

    <h3>¿Deseas comenzar nuevamente?</h3>

    <p>
        Puedes reiniciar tu sesión para registrar una nueva hora de inicio.
    </p>

    <a href="index.php?reiniciar=1" class="restart-button">
        Reiniciar sesión
    </a>

</section>

<?php

// Cargar pie de página
require_once __DIR__ . '/includes/footer.php';

?>
