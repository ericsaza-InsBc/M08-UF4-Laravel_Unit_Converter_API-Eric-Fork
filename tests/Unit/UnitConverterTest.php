<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\ConvertLengthController;
use App\Http\Controllers\ConvertSpeedController;
use App\Http\Controllers\ConvertTemperatureController;
use App\Http\Controllers\ConvertVolumeController;
use App\Http\Controllers\ConvertWeightController;

class UnitConverterTest extends TestCase
{
    /**
     * Test conversion from meters to feet.
     *
     * @return void
     */
    public function testMetersToFeet()
    {
        $controller = new ConvertLengthController();

        $value = 10;
        $unit = 'meters';

        $response = $controller->__invoke($value, $unit);
        $data = $response->getData();

        $this->assertEquals(32.81, round($data->feet, 2));
    }

    /**
     * Test conversion from feet to meters.
     *
     * @return void
     */
    public function testFeetToMeters()
    {
        $controller = new ConvertLengthController();

        $value = 32.81;
        $unit = 'feet';

        $response = $controller->__invoke($value, $unit);
        $data = $response->getData();

        $this->assertEquals(10, round($data->meters, 2));
    }

    /**
     * Test conversion from kilometers per hour to miles per hour.
     *
     * @return void
     */
    public function testKmPerHourToMilesPerHour()
    {
        $controller = new ConvertSpeedController();

        $value = 100;
        $unit = 'kmPerHour';

        $response = $controller->__invoke($value, $unit);
        $data = $response->getData();

        $this->assertEquals(62.14, round($data->milesPerHour, 2));
    }

    /**
     * Test conversion from miles per hour to kilometers per hour.
     *
     * @return void
     */
    public function testMilesPerHourToKmPerHour()
    {
        $controller = new ConvertSpeedController();

        $value = 62.14;
        $unit = 'milesPerHour';

        $response = $controller->__invoke($value, $unit);
        $data = $response->getData();

        $this->assertEquals(100, round($data->kmPerHour, 2));
    }

    /**
     * Test conversion from Celsius to Fahrenheit.
     *
     * @return void
     */
    public function testCelsiusToFahrenheit()
    {
        $controller = new ConvertTemperatureController();

        $value = 25;
        $unit = 'celsius';

        $response = $controller->__invoke($value, $unit);
        $data = $response->getData();

        $this->assertEquals(77, round($data->fahrenheit, 2));
    }

    /**
     * Test conversion from Fahrenheit to Celsius.
     *
     * @return void
     */
    public function testFahrenheitToCelsius()
    {
        $controller = new ConvertTemperatureController();

        $value = 77;
        $unit = 'fahrenheit';

        $response = $controller->__invoke($value, $unit);
        $data = $response->getData();

        $this->assertEquals(25, round($data->celsius, 2));
    }

    /**
     * Test conversion from liters to US gallons.
     *
     * @return void
     */
    public function testLitersToUSGallons()
    {
        $controller = new ConvertVolumeController();

        $value = 10;
        $unit = 'liters';

        $response = $controller->__invoke($value, $unit);
        $data = $response->getData();

        $this->assertEquals(2.64, round($data->usGallons, 2));
    }

    /**
     * Test conversion from US gallons to liters.
     *
     * @return void
     */
    public function testUSGallonsToLiters()
    {
        $controller = new ConvertVolumeController();

        $value = 2.64;
        $unit = 'usgallons';

        $response = $controller->__invoke($value, $unit);
        $data = $response->getData();

        $this->assertEquals(9.99, round($data->liters, 2));
    }

    /**
     * Test conversion from kilograms to pounds.
     *
     * @return void
     */
    public function testKilogramsToPounds()
    {
        $controller = new ConvertWeightController();

        $value = 10;
        $unit = 'kilograms';

        $response = $controller->__invoke($value, $unit);
        $data = $response->getData();

        $this->assertEquals(22.05, round($data->pounds, 2));
    }

    /**
     * Test conversion from pounds to kilograms.
     *
     * @return void
     */
    public function testPoundsToKilograms()
    {
        $controller = new ConvertWeightController();

        $value = 22.05;
        $unit = 'pounds';

        $response = $controller->__invoke($value, $unit);
        $data = $response->getData();

        $this->assertEquals(10, round($data->kilograms, 2));
    }

    /**
     * Test invalid unit for weight conversion.
     *
     * @return void
     */
    public function testInvalidUnitWeight()
    {
        $controller = new ConvertWeightController();

        $value = 10;
        $unit = 'invalidUnit';

        $response = $controller->__invoke($value, $unit);
        $data = $response->getData();

        $this->assertEquals('Invalid unit.', $data->error);
    }
}
