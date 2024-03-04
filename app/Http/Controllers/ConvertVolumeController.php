<?php

namespace App\Http\Controllers;

class ConvertVolumeController extends Controller
{
    public function __invoke($value, $unit)
    {
        if ($unit === 'liters') {
            $usGallons = round($value * 0.264172, 2); // Convert liters to US gallons
            return response()->json(['usGallons' => $usGallons]);
        } elseif ($unit === 'usgallons') {
            $liters = round($value / 0.264172, 2); // Convert US gallons to liters
            return response()->json(['liters' => $liters]);
        } else {
            return response()->json(['error' => 'Invalid unit.'], 400);
        }
    }
}
