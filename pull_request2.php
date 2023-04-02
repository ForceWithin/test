<?php 
class CarController extends AbstractController
{
    private $cars;
    public function __contruct() {
        $this->cars = $entityManager->getRepository(Car::class)->findAll();
    }

    public function getCarByName($name) {

      foreach($this->cars as $car) {
        if ($car->getName() == $name) {
            return $car;
         }
      }
      
      return null;
    }

    public function getCarByEngine($engine) {
    
      foreach($this->cars as $car) {
        if ($car->getEngine() == $engine) {
            return $car;
         }
      }
      
      return null;
    }

    public function getCarByColor($color) {
     
      foreach($this->cars as $car) {
        if ($car->getColor() == $color) {
            return $car;
         }
      }
      
      return null;
    }
   
}
