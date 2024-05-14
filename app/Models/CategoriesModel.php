<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoriesModel extends Model
{
    protected $table = 'TB_Categories';
    protected $primarykey = 'id';
    public function return_categories()
    {
        return $this->orderBy('category_name', 'asc')
            ->findAll();
    }
}
