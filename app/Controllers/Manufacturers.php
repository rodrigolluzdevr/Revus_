<?php

namespace App\Controllers;

use App\Models\ManufacturersModel;
use CodeIgniter\Controller;

class Manufacturers extends Controller
{
    public function index()
    {
        // load model
        $ManufacturersModel = new ManufacturersModel();

        // load manufacturers
        $manufacturers = $ManufacturersModel->return_manufacturers();

        //load data
        $data['manufacturers'] = $manufacturers;

        //load view -- data > retorna o array para a view
        return view('manufacturers', $data);
    }
}