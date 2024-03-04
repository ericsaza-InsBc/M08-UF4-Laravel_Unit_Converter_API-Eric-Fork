<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConvertTemperature extends Model
{
    use HasFactory;

    /**
     * Convert temperature from Celsius to Fahrenheit.
     *
     * @param float $celsius Temperature in Celsius
     * @return float Temperature in Fahrenheit
     */
    public static function celsiusToFahrenheit($celsius)
    {
        return ($celsius * 9/5) + 32;
    }

    /**
     * Convert temperature from Fahrenheit to Celsius.
     *
     * @param float $fahrenheit Temperature in Fahrenheit
     * @return float Temperature in Celsius
     */
    public static function fahrenheitToCelsius($fahrenheit)
    {
        return ($fahrenheit - 32) * 5/9;
    }
}