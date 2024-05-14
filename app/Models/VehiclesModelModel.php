<?php

namespace App\Models;

use CodeIgniter\Model;

class VehiclesModelModel extends Model
{
    protected $table = 'TB_Vehicles_Model';
    protected $primarykey = 'id';
    public function return_vehicles_model()
    {
        return $this->orderBy('vehicle_model', 'asc')
            ->findAll();
    }
}
