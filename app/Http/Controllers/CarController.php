<?php

namespace App\Http\Controllers;

use App\Models\CarFactoryModel;
use Illuminate\Http\Request;

class CarController extends Controller
{
    //
    public function showCarsByManufacturer($manufacturerName){
        return CarFactoryModel::createCar($manufacturerName);
    }

    public function showCarsByColor($color){
        return CarFactoryModel::createCarFromColor($color);
    }

    public function showCarsByClass($className){
        return CarFactoryModel::createCarFromClass($className);
    }
}
