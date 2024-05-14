<?php

namespace App\Controllers;

use App\Models\CategoriesModel;
use CodeIgniter\Controller;

class Categories extends Controller
{
    public function index()
    {
        // load model
        $CategoriesModel = new CategoriesModel();

        // load categories
        $categories = $CategoriesModel->return_categories();

        //load data
        $data['categories'] = $categories;

        //load view -- data > retorna o array para a view
        return view('categories', $data);
    }
}