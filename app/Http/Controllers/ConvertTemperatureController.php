<?php

namespace App\Http\Controllers;

class ConvertTemperatureController extends Controller
{
    public function __invoke($value, $unit)
    {
        if ($unit === 'celsius') {
            $fahrenheit = round(($value * 9 / 5) + 32, 2); // Convert Celsius to Fahrenheit
            return response()->json(['fahrenheit' => $fahrenheit]);
        } elseif ($unit === 'fahrenheit') {
            $celsius = round(($value - 32) * 5 / 9, 2); // Convert Fahrenheit to Celsius
            return response()->json(['celsius' => $celsius]);
        } else {
            return response()->json(['error' => 'Invalid unit.'], 400);
        }
    }
}
