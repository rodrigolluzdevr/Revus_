<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoriesModel extends Model
{
    protected $table = 'TB_Categories';
    protected $primaryKey = 'id';
    protected $allowedFields = ['category_name'];
    protected $returnType = 'array';

}