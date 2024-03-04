<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertVolumeController extends Controller
{
    public function __invoke(Request $request, $value, $unit)
    {
        if ($unit === 'liters') {
            $result = $value * 0.264172; // Convert liters to US gallons
            return response()->json(['result' => $result]);
        } elseif ($unit === 'usgallons') {
            $result = $value / 0.264172; // Convert US gallons to liters
            return response()->json(['result' => $result]);
        } else {
            return response()->json(['error' => 'Invalid unit.'], 400);
        }
    }
}
