<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConvertVolume extends Model
{
    use HasFactory;

    /**
     * Convert volume from liters to US gallons.
     *
     * @param float $liters Volume in liters
     * @return float Volume in US gallons
     */
    public static function litersToUSGallons($liters)
    {
        return $liters * 0.264172;
    }

    /**
     * Convert volume from US gallons to liters.
     *
     * @param float $usGallons Volume in US gallons
     * @return float Volume in liters
     */
    public static function usGallonsToLiters($usGallons)
    {
        return $usGallons / 0.264172;
    }
}