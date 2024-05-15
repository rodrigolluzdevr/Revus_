<?php

namespace App\Models;

use CodeIgniter\Model;

class FabricantesModel extends Model
{
    protected $table = 'fabricante';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nomefabricante'];
    protected $returnType = 'object';

}
