
<?php

require_once __DIR__ . '/includes/session.php';
require_once __DIR__ . '/includes/header.php';

// ==========================================
// 1. ARREGLO INDEXADO
// ==========================================

$lenguajes = [
    "PHP",
    "JavaScript",
    "Python",
    "Java",
    "C++"
];

// ==========================================
// 2. ARREGLO ASOCIATIVO
// ==========================================

$producto = [
    "nombre" => "Laptop",
    "precio" => 12500,
    "stock" => 8,
    "categoria" => "Tecnologia"
];

// ==========================================
// 3. ARREGLO MULTIDIMENSIONAL
// ==========================================

$productos = [

    [
        "nombre" => "Laptop",
        "precio" => 12500,
        "stock" => 8
    ],

    [
        "nombre" => "Teclado",
        "precio" => 650,
        "stock" => 15
    ],

    [
        "nombre" => "Mouse",
        "precio" => 350,
        "stock" => 0
    ],

    [
        "nombre" => "Monitor",
        "precio" => 3200,
        "stock" => 5
    ],

    [
        "nombre" => "Audifonos",
        "precio" => 850,
        "stock" => 0
    ]

];

// ==========================================
// 4. MANIPULACION DE ARREGLOS
// ==========================================

// Agregar un nuevo lenguaje
$lenguajes[] = "Ruby";

// Eliminar el ultimo elemento del arreglo
array_pop($lenguajes);

// Contar elementos
$total_lenguajes = count($lenguajes);

// Calcular el valor total del inventario
$valor_inventario = 0;

foreach ($productos as $item) {
    $valor_inventario += $item["precio"] * $item["stock"];
}

?>

<section class="page-heading">

    <span class="welcome-tag">UNIDAD 4 / PHP</span>

    <h2>Arreglos en PHP</h2>

    <p>
        Los arreglos permiten almacenar varios valores
        dentro de una sola variable. PHP permite organizar
        información mediante arreglos indexados,
        asociativos y multidimensionales.
    </p>

</section>

<!-- ================================== -->
<!-- 1. ARREGLO INDEXADO -->
<!-- ================================== -->

<section class="example-section">

    <h3>1. Arreglo indexado</h3>

    <p>
        Un arreglo indexado almacena elementos mediante
        posiciones numéricas que comienzan desde cero.
    </p>

    <div class="code-example">
        <code>
            $lenguajes = [<br>
            &nbsp;&nbsp;"PHP",<br>
            &nbsp;&nbsp;"JavaScript",<br>
            &nbsp;&nbsp;"Python",<br>
            &nbsp;&nbsp;"Java",<br>
            &nbsp;&nbsp;"C++"<br>
            ];
        </code>
    </div>

    <div class="result-box">

        <strong>Recorrido con FOREACH:</strong>

        <ul class="array-list">

            <?php foreach ($lenguajes as $indice => $lenguaje): ?>

                <li>
                    Índice <?php echo $indice; ?>:
                    <strong><?php echo $lenguaje; ?></strong>
                </li>

            <?php endforeach; ?>

        </ul>

        <p>
            Total de lenguajes:
            <?php echo count($lenguajes); ?>
        </p>

    </div>

</section>

<!-- ================================== -->
<!-- 2. ARREGLO ASOCIATIVO -->
<!-- ================================== -->

<section class="example-section">

    <h3>2. Arreglo asociativo</h3>

    <p>
        Un arreglo asociativo utiliza claves con nombre
        para identificar cada elemento y almacenar
        información relacionada.
    </p>

    <div class="code-example">
        <code>
            $producto = [<br>
            &nbsp;&nbsp;"nombre" => "Laptop",<br>
            &nbsp;&nbsp;"precio" => 12500,<br>
            &nbsp;&nbsp;"stock" => 8,<br>
            &nbsp;&nbsp;"categoria" => "Tecnologia"<br>
            ];
        </code>
    </div>

    <div class="result-box">

        <strong>Datos del producto:</strong>

        <ul class="array-list">

            <?php foreach ($producto as $clave => $valor): ?>

                <li>
                    <strong><?php echo ucfirst($clave); ?>:</strong>

                    <?php
                    if ($clave === "precio") {
                        echo "$" . number_format($valor, 2);
                    } else {
                        echo $valor;
                    }
                    ?>
                </li>

            <?php endforeach; ?>

        </ul>

    </div>

</section>

<!-- ================================== -->
<!-- 3. ARREGLO MULTIDIMENSIONAL -->
<!-- ================================== -->

<section class="example-section">

    <h3>3. Arreglo multidimensional</h3>

    <p>
        Un arreglo multidimensional permite almacenar
        varios arreglos dentro de otro arreglo.
        Es útil para representar tablas de información.
    </p>

    <div class="code-example">
        <code>
            $productos = [<br>
            &nbsp;&nbsp;[<br>
            &nbsp;&nbsp;&nbsp;&nbsp;"nombre" => "Laptop",<br>
            &nbsp;&nbsp;&nbsp;&nbsp;"precio" => 12500,<br>
            &nbsp;&nbsp;&nbsp;&nbsp;"stock" => 8<br>
            &nbsp;&nbsp;],<br>
            &nbsp;&nbsp;[<br>
            &nbsp;&nbsp;&nbsp;&nbsp;"nombre" => "Teclado",<br>
            &nbsp;&nbsp;&nbsp;&nbsp;"precio" => 650,<br>
            &nbsp;&nbsp;&nbsp;&nbsp;"stock" => 15<br>
            &nbsp;&nbsp;]<br>
            ];
        </code>
    </div>

    <div class="result-box">

        <strong>Inventario generado con FOREACH:</strong>

        <div class="table-container">

            <table class="php-table">

                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Disponibilidad</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($productos as $item): ?>

                        <tr>

                            <td>
                                <?php echo $item["nombre"]; ?>
                            </td>

                            <td>
                                $<?php echo number_format($item["precio"], 2); ?>
                            </td>

                            <td>
                                <?php echo $item["stock"]; ?>
                            </td>

                            <td>

                                <?php if ($item["stock"] > 0): ?>

                                    <span class="status-approved">
                                        Disponible
                                    </span>

                                <?php else: ?>

                                    <span class="status-failed">
                                        Agotado
                                    </span>

                                <?php endif; ?>

                            </td>

                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

        <p>
            Total de productos:
            <?php echo count($productos); ?>
        </p>

    </div>

</section>

<!-- ================================== -->
<!-- 4. MANIPULACION DE ARREGLOS -->
<!-- ================================== -->

<section class="example-section">

    <h3>4. Manipulación de arreglos</h3>

    <p>
        PHP incluye funciones que permiten agregar,
        eliminar y contar elementos de un arreglo.
    </p>

    <div class="result-box">

        <p>
            Se agregó un lenguaje utilizando el operador [].
        </p>

        <p>
            Después se eliminó el último elemento con array_pop().
        </p>

        <strong>Resultado final:</strong>

        <p>
            <?php echo implode(", ", $lenguajes); ?>
        </p>

        <strong>
            Total de elementos:
            <?php echo $total_lenguajes; ?>
        </strong>

    </div>

    <div class="result-box">

        <strong>Valor total del inventario:</strong>

        <h2>
            $<?php echo number_format($valor_inventario, 2); ?>
        </h2>

        <p>
            Se calculó multiplicando el precio por la cantidad
            disponible de cada producto.
        </p>

    </div>

</section>

<?php

require_once __DIR__ . '/includes/footer.php';

?>
