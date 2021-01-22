<?php


namespace App\Service;


class TemperatureService
{

    public static function kelvinToCelsius(float $temperature) {

        return ($temperature - 273.15);

    }

}