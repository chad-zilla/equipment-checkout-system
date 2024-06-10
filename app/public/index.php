<?php

require_once __DIR__ . '/../../vendor/autoload.php';
//require_once __DIR__ . '/../database.php';

use App\Services\AuthenticationService;
use App\Models\Employee;
use App\Models\Drill;
use App\Models\Inventory;

// Test Database Connection
use App\Database;

echo "Chad Mueller - CEIS 400 ECS Testing:\n";
echo "Testing Database Connection...\n";

try {
    // Get the database connection instance
    $db = Database::getInstance()->getConnection();

    // Execute a simple query to test the connection
    $stmt = $db->query("SELECT 1");
    if ($stmt) {
        echo "Database Connection Successful\n";
    } else {
        echo "Database Connection Failed\n";
    }
} catch (PDOException $e) {
    echo "Database Connection Failed: " . $e->getMessage() . "\n";
}

// Test Authentication
$authService = AuthenticationService::getInstance();
if ($authService->signIn("user@example.com", "password123")) {
    echo "Sign In Successful\n";
} else {
    echo "Sign In Failed\n";
}

// Test Equipment Checkout
$employee = new Employee();
$employee->id = 1;
$employee->name = "John Doe";
$drill = new Drill();
$drill->id = 1;
$drill->type = "Concrete Drill";
$drill->status = "available";
$employee->checkOutEquipment($drill);
echo "Equipment Checkout Status: " . $drill->status . "\n";


// Test Inventory Update
$inventory = new Inventory();
$inventory->id = 1;
$inventory->quantity = 5;
$inventory->updateQuantity(10);
echo "Inventory Updated: " . $inventory->quantity . "\n";
