<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Models\Drill;

echo "Running TestEquipmentCheckoutWhenNotAvailable...\n";

$drill = new Drill();
$drill->id = 1;
$drill->type = "Drill";
$drill->status = "checked out";

try {
    $drill->checkout();
    echo "TestEquipmentCheckoutWhenNotAvailable: Failed - No exception thrown\n";
} catch (\Exception $e) {
    echo "TestEquipmentCheckoutWhenNotAvailable: Passed - Exception thrown: " . $e->getMessage() . "\n";
}
