<?php

namespace App\Models;

class Employee {
    public $id;
    public $name;
    public $skills;
    public $role;
    public $checkedOutEquipment = [];

    public function updateSkills() {
        // under construction
    }

    public function checkOutEquipment(Equipment $equipment) {
        if ($equipment->isAvailable()) {
            $equipment->checkout();
            $this->checkedOutEquipment[] = $equipment;
        }
    }

    public function returnEquipment(Equipment $equipment) {
        $equipment->return();
        foreach ($this->checkedOutEquipment as $key => $item) {
            if ($item->id == $equipment->id) {
                unset($this->checkedOutEquipment[$key]);
                break;
            }
        }
    }
}