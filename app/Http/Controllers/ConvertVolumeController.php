<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConvertVolume;

class ConvertVolumeController extends Controller
{
    public function __invoke(Request $request, $value, $unit)
    {
        if ($unit === 'liters') {
            $result = ConvertVolume::litersToUSGallons($value);
            return response()->json(['result' => $result]);
        } elseif ($unit === 'usgallons') {
            $result = ConvertVolume::usGallonsToLiters($value);
            return response()->json(['result' => $result]);
        } else {
            return response()->json(['error' => 'Invalid unit.'], 400);
        }
    }
}