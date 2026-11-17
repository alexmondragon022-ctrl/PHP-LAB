
<?php

require_once __DIR__ . '/includes/session.php';
require_once __DIR__ . '/includes/header.php';

// ======================================
// 1. CONDICIONAL IF Y ELSE
// ======================================

$edad = 19;

if ($edad >= 18) {
    $resultado_edad = "Eres mayor de edad.";
} else {
    $resultado_edad = "Eres menor de edad.";
}

// ======================================
// 2. CONDICIONAL ELSEIF
// ======================================

$calificacion = 85;

if ($calificacion >= 90) {
    $nivel = "Excelente";
} elseif ($calificacion >= 80) {
    $nivel = "Muy bien";
} elseif ($calificacion >= 70) {
    $nivel = "Bueno";
} elseif ($calificacion >= 60) {
    $nivel = "Suficiente";
} else {
    $nivel = "Reprobado";
}

// ======================================
// 3. CONDICIONAL SWITCH
// ======================================

$dia = 3;

switch ($dia) {

    case 1:
        $nombre_dia = "Lunes";
        break;

    case 2:
        $nombre_dia = "Martes";
        break;

    case 3:
        $nombre_dia = "Miercoles";
        break;

    case 4:
        $nombre_dia = "Jueves";
        break;

    case 5:
        $nombre_dia = "Viernes";
        break;

    default:
        $nombre_dia = "Dia no valido";
        break;
}

?>

<section class="page-heading">

    <span class="welcome-tag">UNIDAD 4 / PHP</span>

    <h2>Estructuras condicionales</h2>

    <p>
        Las estructuras condicionales permiten tomar decisiones
        dentro de un programa dependiendo de si una condición
        es verdadera o falsa.
    </p>

</section>

<!-- EJEMPLO IF Y ELSE -->

<section class="example-section">

    <h3>1. Condicional IF y ELSE</h3>

    <p>
        La estructura if evalúa una condición.
        Si se cumple, ejecuta un bloque de código.
        De lo contrario, ejecuta el bloque else.
    </p>

    <div class="code-example">
        <code>
            $edad = 19;<br><br>

            if ($edad >= 18) {<br>
            &nbsp;&nbsp;echo "Mayor de edad";<br>
            } else {<br>
            &nbsp;&nbsp;echo "Menor de edad";<br>
            }
        </code>
    </div>

    <div class="result-box">

        <strong>Resultado de PHP:</strong>

        <p>
            Edad evaluada: <?php echo $edad; ?> años
        </p>

        <h3><?php echo $resultado_edad; ?></h3>

    </div>

</section>

<!-- EJEMPLO ELSEIF -->

<section class="example-section">

    <h3>2. Condicional ELSEIF</h3>

    <p>
        La estructura elseif permite evaluar varias condiciones
        diferentes hasta encontrar una que sea verdadera.
    </p>

    <div class="code-example">
        <code>
            $calificacion = 85;<br><br>

            if ($calificacion >= 90) {<br>
            &nbsp;&nbsp;echo "Excelente";<br>
            } elseif ($calificacion >= 80) {<br>
            &nbsp;&nbsp;echo "Muy bien";<br>
            } elseif ($calificacion >= 70) {<br>
            &nbsp;&nbsp;echo "Bueno";<br>
            } else {<br>
            &nbsp;&nbsp;echo "Reprobado";<br>
            }
        </code>
    </div>

    <div class="result-box">

        <strong>Resultado de PHP:</strong>

        <p>
            Calificación evaluada:
            <?php echo $calificacion; ?>
        </p>

        <h3><?php echo $nivel; ?></h3>

    </div>

</section>

<!-- EJEMPLO SWITCH -->

<section class="example-section">

    <h3>3. Condicional SWITCH</h3>

    <p>
        La estructura switch permite comparar una variable
        con diferentes valores y ejecutar el caso correspondiente.
    </p>

    <div class="code-example">
        <code>
            $dia = 3;<br><br>

            switch ($dia) {<br>
            &nbsp;&nbsp;case 1:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;echo "Lunes";<br>
            &nbsp;&nbsp;&nbsp;&nbsp;break;<br>
            &nbsp;&nbsp;case 2:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;echo "Martes";<br>
            &nbsp;&nbsp;&nbsp;&nbsp;break;<br>
            &nbsp;&nbsp;case 3:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;echo "Miercoles";<br>
            &nbsp;&nbsp;&nbsp;&nbsp;break;<br>
            &nbsp;&nbsp;default:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;echo "Dia no valido";<br>
            }
        </code>
    </div>

    <div class="result-box">

        <strong>Resultado de PHP:</strong>

        <p>
            Número de día evaluado: <?php echo $dia; ?>
        </p>

        <h3><?php echo $nombre_dia; ?></h3>

    </div>

</section>

<?php

require_once __DIR__ . '/includes/footer.php';

?>
