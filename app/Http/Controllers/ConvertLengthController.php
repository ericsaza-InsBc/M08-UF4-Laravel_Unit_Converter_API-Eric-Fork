<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertLengthController extends Controller
{
    public function __invoke(Request $request, $value, $unit)
    {
        if ($unit === 'meters') {
            $result = $value * 3.28084; // Convert meters to feet
            return response()->json(['result' => $result]);
        } elseif ($unit === 'feet') {
            $result = $value / 3.28084; // Convert feet to meters
            return response()->json(['result' => $result]);
        } else {
            return response()->json(['error' => 'Invalid unit.'], 400);
        }
    }
}