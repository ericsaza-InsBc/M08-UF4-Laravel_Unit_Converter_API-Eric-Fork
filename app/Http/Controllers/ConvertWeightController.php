<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertWeightController extends Controller
{
    public function __invoke(Request $request, $value, $unit)
    {
        if ($unit === 'kilograms') {
            $result = $value * 2.20462; // Convert kilograms to pounds
            return response()->json(['result' => $result]);
        } elseif ($unit === 'pounds') {
            $result = $value / 2.20462; // Convert pounds to kilograms
            return response()->json(['result' => $result]);
        } else {
            return response()->json(['error' => 'Invalid unit.'], 400);
        }
    }
}