<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertSpeedController extends Controller
{
    public function __invoke(Request $request, $value, $unit)
    {
        if ($unit === 'kmPerHour') {
            $result = $value * 0.621371; // Convert kilometers per hour to miles per hour
            return response()->json(['result' => $result]);
        } elseif ($unit === 'milesPerHour') {
            $result = $value / 0.621371; // Convert miles per hour to kilometers per hour
            return response()->json(['result' => $result]);
        } else {
            return response()->json(['error' => 'Invalid unit.'], 400);
        }
    }
}
