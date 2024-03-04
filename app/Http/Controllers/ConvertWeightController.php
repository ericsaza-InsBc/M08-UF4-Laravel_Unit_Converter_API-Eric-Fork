<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConvertWeight;

class ConvertWeightController extends Controller
{
    public function __invoke(Request $request, $value, $unit)
    {
        if ($unit === 'kilograms') {
            $result = ConvertWeight::kilogramsToPounds($value);
            return response()->json(['result' => $result]);
        } elseif ($unit === 'pounds') {
            $result = ConvertWeight::poundsToKilograms($value);
            return response()->json(['result' => $result]);
        } else {
            return response()->json(['error' => 'Invalid unit.'], 400);
        }
    }
}