<?php

class Car {

    private $nbWheels;

    private $currentSpeed;

    private $color;

    private $nbSeats;

    private $energyType;

    private $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energyType)
    {
            $this->color = $color;
            $this->nbSeats = $nbSeats;
            $this->energyType = $energyType;
    }

    public function start(): string{
        $this->$currentSpeed = 0;
        return "Go!";
    }
    public function forward(): string{
        $this->currentSpeed = 50;
        return "Speeding up!";
    }
    public function brake(): string{
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed-=5;
            $sentence .= "Brake !!!<br>";
        }
        $sentence .= "I'm stopped !<br>";
        return $sentence;
    }
    public function getNbWheels():int {
        return $this->nbWheels;
    }
    public function getCurrentSpeed():int {
        return $this->currentSpeed;
    }
    public function getColor():string {
        return $this->color;
    }
    public function getNbSeats():int {
        return $this->nbSeats;
    }
    public function getEnergyType():string {
        return $this->energyType;
    }
    public function getEnergyLevel():int {
        return $this->energyLevel;
    }
}