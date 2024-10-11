
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Éxito</title>
    <script>
        function showAlertAndRedirect() {
            alert("Datos insertados exitosamente");
            window.location.href = "http://192.168.155.32/inventario/public/index.php?action=consultar";
        }
        window.onload = showAlertAndRedirect;
    </script>
</head>
<body>
    <!-- El contenido se gestiona con JavaScript -->
</body>
</html>
