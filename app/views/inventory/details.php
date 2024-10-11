<!-- app/views/inventory/details.php -->
<?php include 'sidebar.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h1 class="mb-4">Listado de Equipos</h1>

        <!-- Filtro de área -->
        <form method="GET" action="">
            <div class="form-group">
                <label for="filter_area">Filtrar por Área:</label>
                <select name="filter_area" id="filter_area" class="form-control">
                    <option value="">Seleccionar Área</option>
                    <!-- Aquí deberías generar las opciones dinámicamente si tienes áreas predefinidas -->
                    <option value="Area1">Área 1</option>
                    <option value="Area2">Área 2</option>
                    <!-- Agrega más áreas según corresponda -->
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Filtrar</button>
        </form>

        <?php if (!empty($data)) : ?>
        <div class="row mt-4">
            <?php foreach ($data as $item) : ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text"><strong>Nombre del equipo:</strong><br>
                        <?php echo htmlspecialchars($item['nombre_equipo']); ?>
                        </p>
                        <p class="card-text"><strong>Sistema operativo - Nombre:</strong><br>
                            <?php echo htmlspecialchars($item['sistema_operativo_nombre']); ?></p>
                        <p class="card-text"><strong>Serial Windows:</strong><br>
                            <?php echo htmlspecialchars($item['serial_windows']); ?></p>
                        <p class="card-text"><strong>Versión de Office:</strong><br>
                            <?php echo htmlspecialchars($item['version_office']); ?></p>
                        <p class="card-text"><strong>Serial Office:</strong><br>
                            <?php echo htmlspecialchars($item['serial_office']); ?></p>
                        <!-- Añade más campos según sea necesario -->
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <a href="/../inventory/pdfs/generate_pdf.php?filter_area=<?php echo urlencode($_GET['filter_area'] ?? ''); ?>" class="btn btn-secondary btn-sm mt-4">Imprimir PDF</a>
        <?php else : ?>
        <p>No se encontraron datos de inventario.</p>
        <?php endif; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
