<?php
// public/index.php

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../app/controllers/InventoryController.php';
require_once __DIR__ . '/../vendor/autoload.php';

// Crear una instancia de la base de datos
$database = new Database();
$conn = $database->getConnection(); // Asegúrate de que Database tenga un método getConnection()

// Crear una instancia del controlador
$controller = new InventoryController($conn);

// Verificar el parámetro de acción en la URL
$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
    case 'consultar':
        $controller->showInventory(); // Mostrar inventario
        break;
    
    case 'insertar':
        $controller->insert(); // Insertar datos
        break;

    case 'edit':
        $controller->edit(); // Editar datos
        break;
    
    case 'update':
        $controller->update(); // Actualizar datos
        break;

    case 'downloadExcel':
        $controller->downloadExcel(); // Descargar datos en Excel
        break;

    case 'showAll':
        $controller->showAll(); // Mostrar todos los datos
        break;

    default:
        echo "Acción no reconocida.";
        break;
}
?>
