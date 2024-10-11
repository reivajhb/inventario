<!-- app/views/inventory/consultarinventario.php -->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Inventario</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
    /* Ajuste opcional para manejar el tamaño de la tabla */
    .table th,
    .table td {
        white-space: nowrap;
    }

    .filter-button {
        margin-top: 20px;
    }
    </style>
</head>

<body>
    <?php include 'sidebar.php'; ?>

    <div class="container mt-4">
        <h1>Consultar Inventario</h1>
        <form method="GET" action="index.php">
            <input type="hidden" name="action" value="consultar">
            <div class="d-flex align-items-center">
                <div class="d-inline-block">
                    <button type="submit" class="btn btn-primary">Filtrar</button>
                </div>
                <div class="d-inline-block">
                    <a href="index.php?action=downloadExcel" class="btn btn-success">Descargar Excel</a>
                </div>
            </div>
            <div class="table-responsive mt-3">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Acciones</th> <!-- Añadir columna para acciones -->
                            <!--<th>ID <input type="text" name="filter_id" class="form-control form-control-sm" placeholder="ID"></th>-->
                            <th>Nombre del equipo <input type="text" name="filter_nombre_equipo"
                                    class="form-control form-control-sm" placeholder="Nombre del equipo"></th>
                            <th>Número de serie <input type="text" name="filter_numero_serie"
                                    class="form-control form-control-sm" placeholder="Número de serie"></th>
                            <th>Sistema operativo - Nombre <input type="text" name="filter_sistema_operativo_nombre"
                                    class="form-control form-control-sm" placeholder="Sistema operativo"></th>
                            <th>Serial Windows <input type="text" name="filter_serial_windows"
                                    class="form-control form-control-sm" placeholder="Serial Windows"></th>
                            <th>Versión de Office <input type="text" name="filter_version_office"
                                    class="form-control form-control-sm" placeholder="Versión Office"></th>
                            <th>Serial Office <input type="text" name="filter_serial_office"
                                    class="form-control form-control-sm" placeholder="Serial Office"></th>
                            <th>Localizaciones <input type="text" name="filter_localizaciones"
                                    class="form-control form-control-sm" placeholder="Localizaciones"></th>
                            <th>Usuario <input type="text" name="filter_usuario" class="form-control form-control-sm"
                                    placeholder="Usuario"></th>
                            <th>Área <input type="text" name="filter_area" class="form-control form-control-sm"
                                    placeholder="Área"></th>
                            <th>Licencia WIN 10 Verificada <select name="filter_licencia_win10_verificada"
                                    class="form-control form-control-sm">
                                    <option value="">-- Todos --</option>
                                    <option value="1">Sí</option>
                                    <option value="0">No</option>
                                </select></th>
                            <th>Licencia Office Verificada <select name="filter_licencia_office_verificada"
                                    class="form-control form-control-sm">
                                    <option value="">-- Todos --</option>
                                    <option value="1">Sí</option>
                                    <option value="0">No</option>
                                </select></th>
                            <th>¿Desinstalo software no licenciado? <input type="text"
                                    name="filter_softwarenolicenciado" class="form-control form-control-sm"
                                    placeholder="software no licenciado"></th>
                            <th>Marquilla Licencia <input type="text" name="filter_marquilla_licencia"
                                    class="form-control form-control-sm" placeholder="Marquilla Licencia"></th>
                            <th>Marquilla PC <input type="text" name="filter_marquilla_pc"
                                    class="form-control form-control-sm" placeholder="Marquilla PC"></th>
                            <th># Inventario CPU <input type="text" name="filter_inventario_cpu"
                                    class="form-control form-control-sm" placeholder="# Inventario CPU"></th>
                            <th># Inventario Monitor <input type="text" name="filter_inventario_monitor"
                                    class="form-control form-control-sm" placeholder="# Inventario Monitor"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($inventoryItems as $item): ?>
                        <tr>
                            <td>
                                <a href="index.php?action=edit&id=<?php echo htmlspecialchars($item['id']); ?>"
                                    class="btn btn-warning btn-sm">Editar</a>
                            </td>
                            <!--<td><?php echo htmlspecialchars($item['id']); ?></td>-->
                            <td><?php echo htmlspecialchars($item['nombre_equipo']); ?></td>
                            <td><?php echo htmlspecialchars($item['numero_serie']); ?></td>
                            <td><?php echo htmlspecialchars($item['sistema_operativo_nombre']); ?></td>
                            <td><?php echo htmlspecialchars($item['serial_windows']); ?></td>
                            <td><?php echo htmlspecialchars($item['version_office']); ?></td>
                            <td><?php echo htmlspecialchars($item['serial_office']); ?></td>
                            <td><?php echo htmlspecialchars($item['localizaciones']); ?></td>
                            <td><?php echo htmlspecialchars($item['usuario']); ?></td>
                            <td><?php echo htmlspecialchars($item['area']); ?></td>
                            <td><?php echo htmlspecialchars($item['licencia_win10_verificada'] ? 'Sí' : 'No'); ?></td>
                            <td><?php echo htmlspecialchars($item['licencia_office_verificada'] ? 'Sí' : 'No'); ?></td>
                            <td><?php echo htmlspecialchars($item['softwarenolicenciado'] ? 'Sí' : 'No'); ?></td>
                            <td><?php echo htmlspecialchars($item['marquilla_licencia'] ? 'Sí' : 'No'); ?></td>
                            <td><?php echo htmlspecialchars($item['marquilla_pc'] ? 'Sí' : 'No'); ?></td>
                            <td><?php echo htmlspecialchars($item['inventario_cpu']); ?></td>
                            <td><?php echo htmlspecialchars($item['inventario_monitor']); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>