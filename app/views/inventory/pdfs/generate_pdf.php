<?php
require '../vendor/autoload.php'; // Asegúrate de haber instalado TCPDF con Composer o de incluir la biblioteca

use TCPDF;

// Obtener el filtro de área
$filter_area = $_GET['filter_area'] ?? '';

// Configuración de TCPDF
$pdf = new TCPDF();
$pdf->AddPage();
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(0, 10, 'Listado de Equipos - Área: ' . htmlspecialchars($filter_area), 0, 1, 'C');


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta con filtro
    $query = "SELECT * FROM tbl_inventarioeqc WHERE area = :area";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['area' => $filter_area]);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Agregar datos al PDF
    foreach ($data as $item) {
        $pdf->Cell(0, 10, 'Nombre del equipo: ' . htmlspecialchars($item['nombre_equipo']), 0, 1);
        $pdf->Cell(0, 10, 'Sistema operativo - Nombre: ' . htmlspecialchars($item['sistema_operativo_nombre']), 0, 1);
        $pdf->Cell(0, 10, 'Serial Windows: ' . htmlspecialchars($item['serial_windows']), 0, 1);
        $pdf->Cell(0, 10, 'Versión de Office: ' . htmlspecialchars($item['version_office']), 0, 1);
        $pdf->Cell(0, 10, 'Serial Office: ' . htmlspecialchars($item['serial_office']), 0, 1);
        $pdf->Ln();
    }

} catch (PDOException $e) {
    $pdf->Cell(0, 10, 'Error: ' . $e->getMessage(), 0, 1);
}

$pdf->Output('inventario.pdf', 'I');
?>
