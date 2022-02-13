<?php

class CoffeeMaker
{
    public function brew()
    {
        var_dump('Brewing the coffee')
    }
}

// "is a" relationship
class SpecialtyCoffeemaker extends CoffeeMaker
{
    public function brewLatte()
    {
        var_dump('Brewing a latte')
    }
}

(new SpecialtyCoffeemaker())->brewLatte();
