<?php
abstract class Equipment {
    public $id;
    public $type;
    public $status;
    public $address;
    public $previousMaintenanceDate;

    abstract public function checkout();
    abstract public function return();
    abstract public function isAvailable();
    abstract public function updateInventory();
    abstract public function scheduleMaintenance();
}