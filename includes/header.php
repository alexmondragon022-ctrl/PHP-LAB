
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP LAB | Aprende PHP</title>

    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

<div class="main-container">

    <header class="main-header">

        <div class="logo">
            <span class="logo-icon">&lt;/&gt;</span>
            <div>
                <h1>PHP LAB</h1>
                <p>Programación del lado del servidor</p>
            </div>
        </div>

        <div class="header-info">
            <span class="status-dot"></span>
            Sistema activo
        </div>

    </header>

    <?php include __DIR__ . '/menu.php'; ?>

    <main class="content">

        <section class="session-panel">

            <div class="session-title">
                <span>⏱</span>
                <h3>Información de sesión</h3>
            </div>

            <div class="session-data">

                <div>
                    <small>Hora de inicio</small>
                    <strong><?php echo $inicio_formato; ?></strong>
                </div>

                <div>
                    <small>Hora actual</small>
                    <strong><?php echo $actual_formato; ?></strong>
                </div>

                <div>
                    <small>Tiempo activo</small>
                    <strong>
                        <?php echo $minutos . " min " . $segundos . " seg"; ?>
                    </strong>
                </div>

            </div>

        </section>
