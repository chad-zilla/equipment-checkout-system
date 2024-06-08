<?php

namespace App\Models;

class Drill extends Equipment {
    public $drillSpeed;
    public function checkout() {
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