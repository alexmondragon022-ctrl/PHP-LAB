
<?php

// ==========================================
// 1. INICIAR O RECUPERAR LA SESION
// ==========================================

require_once __DIR__ . '/includes/session.php';

// ==========================================
// 2. ALMACENAR INFORMACION EN $_SESSION
// ==========================================

if (!isset($_SESSION['visitas'])) {
    $_SESSION['visitas'] = 0;
}

$_SESSION['visitas']++;

// ==========================================
// 3. OBTENER INFORMACION DE LA SESION
// ==========================================

$hora_inicio = $_SESSION['hora_inicio'];

$hora_actual = time();

$tiempo_activo = $hora_actual - $hora_inicio;

$minutos = floor($tiempo_activo / 60);

$segundos = $tiempo_activo % 60;

require_once __DIR__ . '/includes/header.php';

?>

<section class="page-heading">

    <span class="welcome-tag">UNIDAD 4 / PHP</span>

    <h2>Manejo de sesiones en PHP</h2>

    <p>
        Las sesiones permiten almacenar informacion temporal
        en el servidor para mantener datos de un usuario
        mientras navega entre las diferentes paginas del sistema.
    </p>

</section>

<!-- ================================== -->
<!-- 1. ¿QUE ES UNA SESION? -->
<!-- ================================== -->

<section class="example-section">

    <h3>1. ¿Qué es una sesión PHP?</h3>

    <p>
        Una sesión es un mecanismo que permite conservar
        información de un usuario entre diferentes páginas
        sin necesidad de utilizar una base de datos.
    </p>

    <div class="code-example">
        <code>
            session_start();<br><br>

            $_SESSION["usuario"] = "Alex";<br><br>

            echo $_SESSION["usuario"];
        </code>
    </div>

    <div class="result-box">

        <strong>Información almacenada:</strong>

        <p>
            Usuario de ejemplo:
            <strong><?php echo "Alex"; ?></strong>
        </p>

        <p>
            Visitas a esta página:
            <strong><?php echo $_SESSION['visitas']; ?></strong>
        </p>

    </div>

</section>

<!-- ================================== -->
<!-- 2. HORA DE INICIO -->
<!-- ================================== -->

<section class="example-section">

    <h3>2. Hora de inicio de sesión</h3>

    <p>
        Al iniciar la sesión, PHP almacena la hora inicial
        mediante la función time(). Este valor permanece
        guardado en la variable especial $_SESSION.
    </p>

    <div class="code-example">
        <code>
            $_SESSION["hora_inicio"] = time();<br><br>

            $hora_inicio = $_SESSION["hora_inicio"];<br><br>

            echo date("H:i:s", $hora_inicio);
        </code>
    </div>

    <div class="result-box">

        <strong>Hora de inicio registrada:</strong>

        <h2>
            <?php echo date("H:i:s", $hora_inicio); ?>
        </h2>

    </div>

</section>

<!-- ================================== -->
<!-- 3. HORA ACTUAL -->
<!-- ================================== -->

<section class="example-section">

    <h3>3. Hora actual del sistema</h3>

    <p>
        La función time() obtiene el tiempo actual.
        Posteriormente se utiliza date() para mostrarlo
        en un formato de horas, minutos y segundos.
    </p>

    <div class="code-example">
        <code>
            $hora_actual = time();<br><br>

            echo date("H:i:s", $hora_actual);
        </code>
    </div>

    <div class="result-box">

        <strong>Hora actual:</strong>

        <h2>
            <?php echo date("H:i:s", $hora_actual); ?>
        </h2>

    </div>

</section>

<!-- ================================== -->
<!-- 4. CALCULAR TIEMPO ACTIVO -->
<!-- ================================== -->

<section class="example-section">

    <h3>4. Cálculo del tiempo activo</h3>

    <p>
        El tiempo activo se obtiene restando la hora inicial
        a la hora actual. El resultado se convierte
        a minutos y segundos.
    </p>

    <div class="code-example">
        <code>
            $tiempo_activo = $hora_actual - $hora_inicio;<br><br>

            $minutos = floor($tiempo_activo / 60);<br><br>

            $segundos = $tiempo_activo % 60;
        </code>
    </div>

    <div class="result-box">

        <strong>Tiempo activo del usuario:</strong>

        <h2>
            <?php echo $minutos; ?> minutos
            <?php echo $segundos; ?> segundos
        </h2>

        <p>
            Segundos totales transcurridos:
            <?php echo $tiempo_activo; ?>
        </p>

    </div>

</section>

<!-- ================================== -->
<!-- 5. REINICIAR SESION -->
<!-- ================================== -->

<section class="example-section">

    <h3>5. Reiniciar sesión</h3>

    <p>
        Para finalizar una sesión se utiliza session_destroy().
        Esto elimina los datos asociados a la sesión actual.
        Posteriormente se puede iniciar una nueva sesión
        con una nueva hora de inicio.
    </p>

    <div class="code-example">
        <code>
            $_SESSION = [];<br><br>

            session_destroy();<br><br>

            // Iniciar una nueva sesión<br>
            session_start();
        </code>
    </div>

    <div class="result-box">

        <strong>Control de sesión:</strong>

        <p>
            Puedes reiniciar la sesión para registrar
            una nueva hora inicial y comenzar nuevamente
            el contador.
        </p>

        <a href="index.php?reiniciar=1" class="restart-button">
            Reiniciar sesión ahora
        </a>

    </div>

</section>

<?php

require_once __DIR__ . '/includes/footer.php';

?>
