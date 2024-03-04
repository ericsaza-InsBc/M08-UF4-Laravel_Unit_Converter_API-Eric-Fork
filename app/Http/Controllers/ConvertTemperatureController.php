<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConvertTemperature;

class ConvertTemperatureController extends Controller
{
    public function __invoke(Request $request, $value, $unit)
    {
        if ($unit === 'celsius') {
            $result = ConvertTemperature::celsiusToFahrenheit($value);
            return response()->json(['result' => $result]);
        } elseif ($unit === 'fahrenheit') {
            $result = ConvertTemperature::fahrenheitToCelsius($value);
            return response()->json(['result' => $result]);
        } else {
            return response()->json(['error' => 'Invalid unit.'], 400);
        }
    }
}