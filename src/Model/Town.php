<?php


namespace App\Model;


class Town
{

    private string $city;


    public function __construct(){
        $this->city = 'nice';
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return Town
     */
    public function setCity(string $city): Town
    {
        $this->city = $city;
        return $this;
    }


}