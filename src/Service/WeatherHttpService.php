<?php


namespace App\Service;


use App\Model\WeatherData;
use JetBrains\PhpStorm\NoReturn;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class WeatherHttpService
{

    private HttpClientInterface $http;
    private string $endpoint;
    private string $api_key;

    public function __construct(HttpClientInterface $http, string $api_key, string $api_endpoint){
        $this->http = $http;
        $this->api_key = $api_key;
        $this->endpoint = $api_endpoint;

    }

    public function getWeatherToday(string $city): WeatherData{

        $response = $this->http->request('GET', $this->endpoint, [
            "query" => [
                "q" => $city,
                "appid" => $this->api_key,
                "lang"=>'fr'
            ]
        ]);
        return new WeatherData($response->toArray());

    }

}