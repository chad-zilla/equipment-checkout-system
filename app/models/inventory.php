<?php

namespace App\Models;

class Inventory {
    public $id;
    public $quantity;
    public $equipmentId;
    public $materialId;
    public $warehouseId;

    public function updateQuantity($newQuantity) {
        $this->quantity = $newQuantity;
    }

    public function checkStock() {
        $this->quantity > 0; 
    }
}