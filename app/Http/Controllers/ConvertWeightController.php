<?php

namespace App\Http\Controllers;

class ConvertWeightController extends Controller
{
    public function __invoke($value, $unit)
    {
        if ($unit === 'kilograms') {
            $pounds = round($value * 2.20462, 2); // Convert kilograms to pounds
            return response()->json(['pounds' => $pounds]);
        } elseif ($unit === 'pounds') {
            $kilograms = round($value / 2.20462, 2); // Convert pounds to kilograms
            return response()->json(['kilograms' => $kilograms]);
        } else {
            return response()->json(['error' => 'Invalid unit.'], 400);
        }
    }
}
