<?php


namespace App\Model;


class WeatherData
{

    private string $state;
    private string $description;
    private float $temperature;
    private float $humidity;
    private string $icon;


    public function __construct(array $data){

        $this->state = $data['weather'][0]['main'];
        $this->description = $data['weather'][0]['description'];
        $this->temperature = $data['main']['temp'];
        $this->humidity = $data['main']['humidity'];
        $this->icon = $data['weather'][0]['icon'];

    }


    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return WeatherData
     */
    public function setState(string $state): WeatherData
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return mixed|string
     */
    public function getIcon(): mixed
    {
        return $this->icon;
    }

    /**
     * @param mixed|string $icon
     * @return WeatherData
     */
    public function setIcon(mixed $icon): WeatherData
    {
        $this->icon = $icon;
        return $this;
    }

    /**
     * @param string $description
     * @return WeatherData
     */
    public function setDescription(string $description): WeatherData
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return float
     */
    public function getTemperature(): float
    {
        return $this->temperature;
    }

    /**
     * @param float $temperature
     * @return WeatherData
     */
    public function setTemperature(float $temperature): WeatherData
    {
        $this->temperature = $temperature;
        return $this;
    }

    /**
     * @return float
     */
    public function getHumidity(): float
    {
        return $this->humidity;
    }

    /**
     * @param float $humidity
     * @return WeatherData
     */
    public function setHumidity(float $humidity): WeatherData
    {
        $this->humidity = $humidity;
        return $this;
    }

}