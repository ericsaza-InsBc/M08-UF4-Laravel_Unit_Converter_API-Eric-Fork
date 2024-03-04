<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConvertLength;

class ConvertLengthController extends Controller
{
    public function __invoke(Request $request, $value, $unit)
    {
        if ($unit === 'meters') {
            $result = ConvertLength::metersToFeet($value);
            return response()->json(['result' => $result]);
        } elseif ($unit === 'feet') {
            $result = ConvertLength::feetToMeters($value);
            return response()->json(['result' => $result]);
        } else {
            return response()->json(['error' => 'Invalid unit.'], 400);
        }
    }
}