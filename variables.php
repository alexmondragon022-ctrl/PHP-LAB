
<?php

// Iniciar y recuperar la sesión
require_once __DIR__ . '/includes/session.php';

// Cargar encabezado
require_once __DIR__ . '/includes/header.php';

// =====================================
// 1. DECLARACION DE VARIABLES
// =====================================

$nombre = "Alex";
$edad = 19;
$promedio = 9.2;
$activo = true;

// =====================================
// 2. ARREGLO COMO TIPO DE DATO
// =====================================

$materias = [
    "Programacion Web",
    "Lenguajes y Automatas",
    "Fundamentos de Software",
    "Redes de Computadoras"
];

// =====================================
// 3. FUNCIONES PHP
// =====================================

$fecha = date("d/m/Y H:i:s");
$total_materias = count($materias);

?>

<section class="page-heading">

    <span class="welcome-tag">UNIDAD 4 / PHP</span>

    <h2>Variables y tipos de datos</h2>

    <p>
        En PHP las variables permiten almacenar información
        que puede utilizarse y modificarse durante la ejecución
        de un programa.
    </p>

</section>

<section class="example-section">

    <h3>1. Declaración de variables</h3>

    <p>
        En PHP las variables comienzan con el símbolo $
        seguido del nombre de la variable.
    </p>

    <div class="code-example">
        <code>
            $nombre = "Alex";<br>
            $edad = 19;<br>
            $promedio = 9.2;<br>
            $activo = true;
        </code>
    </div>

</section>

<section class="example-section">

    <h3>2. Tipos de datos en PHP</h3>

    <p>
        PHP permite trabajar con diferentes tipos de datos.
        A continuación se muestran ejemplos ejecutados.
    </p>

    <div class="data-grid">

        <div class="data-card">
            <span class="data-type">STRING</span>
            <h3>Cadena de texto</h3>

            <strong>
                <?php echo $nombre; ?>
            </strong>

            <small>
                Tipo: <?php echo gettype($nombre); ?>
            </small>
        </div>

        <div class="data-card">
            <span class="data-type">INT</span>
            <h3>Número entero</h3>

            <strong>
                <?php echo $edad; ?>
            </strong>

            <small>
                Tipo: <?php echo gettype($edad); ?>
            </small>
        </div>

        <div class="data-card">
            <span class="data-type">FLOAT</span>
            <h3>Número decimal</h3>

            <strong>
                <?php echo $promedio; ?>
            </strong>

            <small>
                Tipo: <?php echo gettype($promedio); ?>
            </small>
        </div>

        <div class="data-card">
            <span class="data-type">BOOLEAN</span>
            <h3>Valor lógico</h3>

            <strong>
                <?php echo $activo ? "Verdadero" : "Falso"; ?>
            </strong>

            <small>
                Tipo: <?php echo gettype($activo); ?>
            </small>
        </div>

        <div class="data-card">
            <span class="data-type">ARRAY</span>
            <h3>Arreglo</h3>

            <strong>
                <?php echo count($materias); ?> elementos
            </strong>

            <small>
                Tipo: <?php echo gettype($materias); ?>
            </small>
        </div>

    </div>

</section>

<section class="example-section">

    <h3>3. Uso de la función count()</h3>

    <p>
        La función count() permite conocer la cantidad
        de elementos que contiene un arreglo.
    </p>

    <div class="result-box">

        <strong>Total de materias:</strong>

        <?php echo count($materias); ?>

        <ul>
            <?php foreach ($materias as $materia): ?>
                <li><?php echo $materia; ?></li>
            <?php endforeach; ?>
        </ul>

    </div>

</section>

<section class="example-section">

    <h3>4. Uso de la función date()</h3>

    <div class="result-box">

        <p>Fecha y hora obtenidas directamente desde PHP:</p>

        <strong>
            <?php echo $fecha; ?>
        </strong>

    </div>

</section>

<?php

// Cargar pie de página
require_once __DIR__ . '/includes/footer.php';

?>
