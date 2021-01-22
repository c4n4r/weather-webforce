<?php

namespace App\Controller;
use App\Form\TownType;
use App\Model\Town;
use App\Model\WeatherData;
use App\Service\TemperatureService;
use App\Service\WeatherHttpService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class WeatherController extends AbstractController
{
    public function homeAction(
        Request $request,
        WeatherHttpService $weatherHttpService){

        $town = new Town();
        $townForm = $this->createForm(TownType::class, $town);

        $townForm->handleRequest($request);

        if($townForm->isSubmitted()){
            $town = $townForm->getData();
        }

        $data = $weatherHttpService->getWeatherToday($town->getCity());
        $data->setTemperature(TemperatureService::kelvinToCelsius($data->getTemperature()));
        return $this->render('home.html.twig', ['city' => $town->getCity(),'data' => $data, 'form' => $townForm->createView()]);
    }

}