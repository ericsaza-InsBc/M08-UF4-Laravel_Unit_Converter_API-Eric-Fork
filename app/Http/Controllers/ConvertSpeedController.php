<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConvertSpeed;

class ConvertSpeedController extends Controller
{
    public function __invoke(Request $request, $value, $unit)
    {
        if ($unit === 'kmPerHour') {
            $result = ConvertSpeed::kmPerHourToMilesPerHour($value);
            return response()->json(['result' => $result]);
        } elseif ($unit === 'milesPerHour') {
            $result = ConvertSpeed::milesPerHourToKmPerHour($value);
            return response()->json(['result' => $result]);
        } else {
            return response()->json(['error' => 'Invalid unit.'], 400);
        }
    }
}