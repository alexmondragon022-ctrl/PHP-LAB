
<?php

require_once __DIR__ . '/includes/session.php';
require_once __DIR__ . '/includes/header.php';

// ======================================
// 1. CICLO FOR
// ======================================

$numeros = [];

for ($i = 1; $i <= 5; $i++) {
    $numeros[] = $i;
}

// ======================================
// 2. CICLO WHILE
// ======================================

$contador = 1;
$resultados_while = [];

while ($contador <= 5) {
    $resultados_while[] = $contador;
    $contador++;
}

// ======================================
// 3. CICLO FOREACH
// ======================================

$estudiantes = [
    ["nombre" => "Ana", "calificacion" => 95],
    ["nombre" => "Carlos", "calificacion" => 85],
    ["nombre" => "Maria", "calificacion" => 58],
    ["nombre" => "Luis", "calificacion" => 75],
    ["nombre" => "Sofia", "calificacion" => 90]
];

?>

<section class="page-heading">

    <span class="welcome-tag">UNIDAD 4 / PHP</span>

    <h2>Bucles y estructuras repetitivas</h2>

    <p>
        Los bucles permiten ejecutar varias veces un bloque
        de instrucciones mientras se cumpla una condición.
        PHP cuenta con diferentes estructuras de repetición.
    </p>

</section>

<!-- ================================== -->
<!-- 1. CICLO FOR -->
<!-- ================================== -->

<section class="example-section">

    <h3>1. Ciclo FOR</h3>

    <p>
        El ciclo for se utiliza cuando conocemos la cantidad
        de veces que queremos repetir una instrucción.
    </p>

    <div class="code-example">
        <code>
            for ($i = 1; $i <= 5; $i++) {<br>
            &nbsp;&nbsp;echo $i;<br>
            }
        </code>
    </div>

    <div class="result-box">

        <strong>Resultado generado por PHP:</strong>

        <div class="number-list">

            <?php foreach ($numeros as $numero): ?>

                <span class="number-item">
                    <?php echo $numero; ?>
                </span>

            <?php endforeach; ?>

        </div>

        <p>
            Total de números generados:
            <?php echo count($numeros); ?>
        </p>

    </div>

</section>

<!-- ================================== -->
<!-- 2. CICLO WHILE -->
<!-- ================================== -->

<section class="example-section">

    <h3>2. Ciclo WHILE</h3>

    <p>
        El ciclo while repite las instrucciones mientras
        la condición indicada sea verdadera.
    </p>

    <div class="code-example">
        <code>
            $contador = 1;<br><br>

            while ($contador <= 5) {<br>
            &nbsp;&nbsp;echo $contador;<br>
            &nbsp;&nbsp;$contador++;<br>
            }
        </code>
    </div>

    <div class="result-box">

        <strong>Resultado generado por PHP:</strong>

        <div class="number-list">

            <?php foreach ($resultados_while as $numero): ?>

                <span class="number-item">
                    <?php echo $numero; ?>
                </span>

            <?php endforeach; ?>

        </div>

        <p>
            Repeticiones realizadas:
            <?php echo count($resultados_while); ?>
        </p>

    </div>

</section>

<!-- ================================== -->
<!-- 3. CICLO FOREACH -->
<!-- ================================== -->

<section class="example-section">

    <h3>3. Ciclo FOREACH</h3>

    <p>
        El ciclo foreach permite recorrer todos los elementos
        de un arreglo sin necesidad de controlar manualmente
        un contador.
    </p>

    <div class="code-example">
        <code>
            foreach ($estudiantes as $estudiante) {<br>
            &nbsp;&nbsp;echo $estudiante["nombre"];<br>
            }
        </code>
    </div>

    <div class="result-box">

        <strong>Tabla de estudiantes generada dinámicamente:</strong>

        <div class="table-container">

            <table class="php-table">

                <thead>
                    <tr>
                        <th>Estudiante</th>
                        <th>Calificación</th>
                        <th>Resultado</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($estudiantes as $estudiante): ?>

                        <tr>

                            <td>
                                <?php echo $estudiante["nombre"]; ?>
                            </td>

                            <td>
                                <?php echo $estudiante["calificacion"]; ?>
                            </td>

                            <td>

                                <?php if ($estudiante["calificacion"] >= 70): ?>

                                    <span class="status-approved">
                                        Aprobado
                                    </span>

                                <?php else: ?>

                                    <span class="status-failed">
                                        Reprobado
                                    </span>

                                <?php endif; ?>

                            </td>

                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

        <p>
            Total de estudiantes:
            <?php echo count($estudiantes); ?>
        </p>

    </div>

</section>

<?php

require_once __DIR__ . '/includes/footer.php';

?>
