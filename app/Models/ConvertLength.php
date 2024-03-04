<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConvertLength extends Model
{
    use HasFactory;

    /**
     * Convert length from meters to feet.
     *
     * @param float $meters Length in meters
     * @return float Length in feet
     */
    public static function metersToFeet($meters)
    {
        return $meters * 3.28084;
    }

    /**
     * Convert length from feet to meters.
     *
     * @param float $feet Length in feet
     * @return float Length in meters
     */
    public static function feetToMeters($feet)
    {
        return $feet / 3.28084;
    }
}