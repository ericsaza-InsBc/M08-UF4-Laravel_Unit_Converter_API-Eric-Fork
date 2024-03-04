<?php

namespace App\Http\Controllers;

class ConvertLengthController extends Controller
{
    public function __invoke($value, $unit)
    {
        if ($unit === 'meters') {
            $feet = round($value * 3.28084, 2); // Convert meters to feet
            return response()->json(['feet' => $feet]);
        } elseif ($unit === 'feet') {
            $meters = round($value / 3.28084, 2); // Convert feet to meters
            return response()->json(['meters' => $meters]);
        } else {
            return response()->json(['error' => 'Invalid unit.'], 400);
        }
    }
}
