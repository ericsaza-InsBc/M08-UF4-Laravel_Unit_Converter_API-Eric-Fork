<?php

namespace App\Http\Controllers;

class ConvertSpeedController extends Controller
{
    public function __invoke($value, $unit)
    {
        if ($unit === 'kmPerHour') {
            $milesPerHour = round($value * 0.621371, 2); // Convert kilometers per hour to miles per hour
            return response()->json(['milesPerHour' => $milesPerHour]);
        } elseif ($unit === 'milesPerHour') {
            $kmPerHour = round($value / 0.621371, 2); // Convert miles per hour to kilometers per hour
            return response()->json(['kmPerHour' => $kmPerHour]);
        } else {
            return response()->json(['error' => 'Invalid unit.'], 400);
        }
    }
}
