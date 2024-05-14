<?php

namespace App\Models;

use CodeIgniter\Model;

class ManufacturersModel extends Model
{
    protected $table = 'TB_Manufacturers';
    protected $primarykey = 'id';
    public function return_manufacturers()
    {
        return $this->orderBy('manufacturer', 'asc')
            ->findAll();
    }
}
