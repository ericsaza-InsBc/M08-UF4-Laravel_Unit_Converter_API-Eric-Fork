<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConvertWeight extends Model
{
    use HasFactory;

    /**
     * Convert weight from kilograms to pounds.
     *
     * @param float $kilograms Weight in kilograms
     * @return float Weight in pounds
     */
    public static function kilogramsToPounds($kilograms)
    {
        return $kilograms * 2.20462;
    }

    /**
     * Convert weight from pounds to kilograms.
     *
     * @param float $pounds Weight in pounds
     * @return float Weight in kilograms
     */
    public static function poundsToKilograms($pounds)
    {
        return $pounds / 2.20462;
    }
}
