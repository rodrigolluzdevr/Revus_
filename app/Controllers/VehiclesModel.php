<?php

namespace App\Controllers;

use App\Models\VehiclesModelModel;
use CodeIgniter\Controller;

class VehiclesModel extends Controller
{
    public function index()
    {
        // load model
        $VehiclesModelModel = new VehiclesModelModel();

        // load vehiclesmodel
        $vehiclesmodel = $VehiclesModelModel->return_vehicles_model();

        //load data
        $data['vehiclesmodel'] = $vehiclesmodel;

        //load view -- data > retorna o array para a view
        return view('vehicles_model', $data);
    }
}