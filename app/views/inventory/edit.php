<!-- app/views/inventory/edit.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Inventario</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <div class="container mt-4">
        <h1>Editar Inventario</h1>
        <form action="index.php?action=update" method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($item['id']); ?>">

            <!-- Campos del formulario -->
            <div class="form-group">
                <label for="nombre_equipo">Nombre del equipo:</label>
                <input type="text" id="nombre_equipo" name="nombre_equipo" class="form-control" value="<?php echo htmlspecialchars($item['nombre_equipo']); ?>" required>
            </div>

            <div class="form-group">
                <label for="numero_serie">Número de serie:</label>
                <input type="text" id="numero_serie" name="numero_serie" class="form-control" value="<?php echo htmlspecialchars($item['numero_serie']); ?>" required>
            </div>

            <div class="form-group">
                <label for="sistema_operativo_nombre">Sistema operativo - Nombre:</label>
                <input type="text" id="sistema_operativo_nombre" name="sistema_operativo_nombre" class="form-control" value="<?php echo htmlspecialchars($item['sistema_operativo_nombre']); ?>" required>
            </div>

            <div class="form-group">
                <label for="serial_windows">Serial Windows:</label>
                <input type="text" id="serial_windows" name="serial_windows" class="form-control" value="<?php echo htmlspecialchars($item['serial_windows']); ?>" required>
            </div>

            <div class="form-group">
                <label for="version_office">Versión de Office:</label>
                <input type="text" id="version_office" name="version_office" class="form-control" value="<?php echo htmlspecialchars($item['version_office']); ?>" required>
            </div>

            <div class="form-group">
                <label for="serial_office">Serial Office:</label>
                <input type="text" id="serial_office" name="serial_office" class="form-control" value="<?php echo htmlspecialchars($item['serial_office']); ?>" required>
            </div>

            <div class="form-group">
              <label for="localizaciones">Localizaciones:</label>
               <select id="localizaciones" name="localizaciones" class="form-control">
                <option value="SAN ANDRES" <?php echo $item['localizaciones'] === 'SAN ANDRES' ? 'selected' : ''; ?>>SAN ANDRES</option>
                <option value="RINCON DEL PARQUE" <?php echo $item['localizaciones'] === 'RINCON DEL PARQUE' ? 'selected' : ''; ?>>RINCON DEL PARQUE</option>
                <option value="ASTAF" <?php echo $item['localizaciones'] === 'ASTAF' ? 'selected' : ''; ?>>ASTAF</option>
                <option value="CARTAGENA" <?php echo $item['localizaciones'] === 'CARTAGENA' ? 'selected' : ''; ?>>CARTAGENA</option>
                <option value="CASA" <?php echo $item['localizaciones'] === 'CASA' ? 'selected' : ''; ?>>CASA</option>
                <option value="MEDELLIN" <?php echo $item['localizaciones'] === 'MEDELLIN' ? 'selected' : ''; ?>>MEDELLIN</option>
              </select>
            </div>

            <div class="form-group">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" class="form-control" value="<?php echo htmlspecialchars($item['usuario']); ?>" required>
            </div>

            <div class="form-group">
             <label for="area">Área:</label>
              <select id="area" name="area" class="form-control">
               <option value="ADMINISTRATIVO" <?php echo $item['area'] === 'ADMINISTRATIVO' ? 'selected' : ''; ?>>ADMINISTRATIVO</option>
               <option value="CONTABILIDAD" <?php echo $item['area'] === 'CONTABILIDAD' ? 'selected' : ''; ?>>CONTABILIDAD</option>
               <option value="RECEPTIVO" <?php echo $item['area'] === 'RECEPTIVO' ? 'selected' : ''; ?>>RECEPTIVO</option>
               <option value="TURIVEL" <?php echo $item['area'] === 'TURIVEL' ? 'selected' : ''; ?>>TURIVEL</option>
               <option value="AGENCIAS" <?php echo $item['area'] === 'AGENCIAS' ? 'selected' : ''; ?>>AGENCIAS</option>
               <option value="SISTEMAS" <?php echo $item['area'] === 'SISTEMAS' ? 'selected' : ''; ?>>SISTEMAS</option>
               <option value="MERCADEO Y DISEÑO" <?php echo $item['area'] === 'MERCADEO Y DISEÑO' ? 'selected' : ''; ?>>MERCADEO Y DISEÑO</option>
             </select>
            </div>


            <div class="form-group">
                <label for="licencia_win10_verificada">Licencia WIN 10 Verificada:</label>
                <select id="licencia_win10_verificada" name="licencia_win10_verificada" class="form-control">
                    <option value="1" <?php echo $item['licencia_win10_verificada'] ? 'selected' : ''; ?>>Sí</option>
                    <option value="0" <?php echo !$item['licencia_win10_verificada'] ? 'selected' : ''; ?>>No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="licencia_office_verificada">Licencia Office Verificada:</label>
                <select id="licencia_office_verificada" name="licencia_office_verificada" class="form-control">
                    <option value="1" <?php echo $item['licencia_office_verificada'] ? 'selected' : ''; ?>>Sí</option>
                    <option value="0" <?php echo !$item['licencia_office_verificada'] ? 'selected' : ''; ?>>No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="softwarenolicenciado">¿Desinstalo software no licenciado?:</label>
                <select id="softwarenolicenciado" name="softwarenolicenciado" class="form-control">
                    <option value="1" <?php echo $item['softwarenolicenciado'] ? 'selected' : ''; ?>>Sí</option>
                    <option value="0" <?php echo !$item['softwarenolicenciado'] ? 'selected' : ''; ?>>No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="marquilla_licencia">Marquilla Licencia:</label>
                <select id="marquilla_licencia" name="marquilla_licencia" class="form-control">
                    <option value="1" <?php echo $item['marquilla_licencia'] ? 'selected' : ''; ?>>Sí</option>
                    <option value="0" <?php echo !$item['marquilla_licencia'] ? 'selected' : ''; ?>>No</option>
                </select>
                
            </div>

            <div class="form-group">
                <label for="marquilla_pc">Marquilla PC:</label>
                <select id="marquilla_pc" name="marquilla_pc" class="form-control">
                    <option value="1" <?php echo $item['marquilla_pc'] ? 'selected' : ''; ?>>Sí</option>
                    <option value="0" <?php echo !$item['marquilla_pc'] ? 'selected' : ''; ?>>No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="inventario_cpu"># Inventario CPU:</label>
                <input type="text" id="inventario_cpu" name="inventario_cpu" class="form-control" value="<?php echo htmlspecialchars($item['inventario_cpu']); ?>" required>
            </div>

            <div class="form-group">
                <label for="inventario_monitor"># Inventario Monitor:</label>
                <input type="text" id="inventario_monitor" name="inventario_monitor" class="form-control" value="<?php echo htmlspecialchars($item['inventario_monitor']); ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
