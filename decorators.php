<?php 
interface CarService {
    public function getCost();
}
class BasicInception implements CarService {
    
    public function getCost() {
        return 20;
    }
}



class OilChange implements CarService {
    protected $carService;
    function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }
    public function getCost() {
        return 20 + $this->carService->getCost();
    }
}



class TireRotation implements CarService {
    protected $carService;
    function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }
    public function getCost() {
        return 20 + $this->carService->getCost();
    }
}



echo (new TireRotation(new OilChange(new BasicInception())))->getCost();
