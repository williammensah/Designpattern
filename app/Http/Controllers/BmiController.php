<?php

namespace App\Http\Controllers;

use App\Models\CarFactoryModel;
use App\StategyPattern\BmiService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BmiController extends Controller
{
    //
   public function index(Request $request, BmiService $bmiService) : JsonResponse
   {
      $calculateBmi = $bmiService->getBMI($request->weight, $request->height);
      $message = $bmiService->getResult($calculateBmi);
      return response()->json(['responseCode' => 200, 'responseMessage'=> 'success','data' => $message]);
   }
}
