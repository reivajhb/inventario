<!-- sidebar.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/path/to/your/css/styles.css"> <!-- Ajusta la ruta según tu estructura -->
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Inventario</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=insertar">Insertar Datos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=consultar">Consultar Inventario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=showAll">Marquillas Equipo</a>
                    </li>
                    <!-- Puedes añadir más enlaces aquí -->
                </ul>
            </div>
        </nav>
    </div>
</body>

</html>