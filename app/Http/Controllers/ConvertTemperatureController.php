<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertTemperatureController extends Controller
{
    public function __invoke(Request $request, $value, $unit)
    {
        if ($unit === 'celsius') {
            $result = ($value * 9/5) + 32; // Convert Celsius to Fahrenheit
            return response()->json(['result' => $result]);
        } elseif ($unit === 'fahrenheit') {
            $result = ($value - 32) * 5/9; // Convert Fahrenheit to Celsius
            return response()->json(['result' => $result]);
        } else {
            return response()->json(['error' => 'Invalid unit.'], 400);
        }
    }
}