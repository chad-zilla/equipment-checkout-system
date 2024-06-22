<?php
namespace App\Models;
use App\Models\Equipment;

class Drill extends Equipment {
    public $drillSpeed;
    public function checkout() {
        if ($this->status !== 'available') {
            throw new \Exception("Equipment is not available for checkout.");
        }

        $this->status = 'checked out';
    }

    public function return() {
        $this->status = 'available';
    }

    public function isAvailable() {
        return $this->status === 'available';
    }

    public function updateInventory() {
        // under construction
    }

    public function scheduleMaintenance() {
        // under construction
    }
}