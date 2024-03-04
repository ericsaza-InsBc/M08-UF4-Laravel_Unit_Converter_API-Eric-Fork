<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConvertSpeed extends Model
{
    use HasFactory;

    /**
     * Convert speed from kilometers per hour to miles per hour.
     *
     * @param float $kilometersPerHour Speed in kilometers per hour
     * @return float Speed in miles per hour
     */
    public static function kmPerHourToMilesPerHour($kilometersPerHour)
    {
        return $kilometersPerHour * 0.621371;
    }

    /**
     * Convert speed from miles per hour to kilometers per hour.
     *
     * @param float $milesPerHour Speed in miles per hour
     * @return float Speed in kilometers per hour
     */
    public static function milesPerHourToKmPerHour($milesPerHour)
    {
        return $milesPerHour / 0.621371;
    }
}