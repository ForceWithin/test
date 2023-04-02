<?php 
class CarController extends AbstractController
{

    public function getCarByName($name) {
      $cars = $entityManager->getRepository(Car::class)->findAll();

      foreach($cars as $car) {
        if ($car->getName() == $name) {
            return $car;
         }
      }
      
      return null;
    }

    public function getCarByEngine($engine) {
      $cars = $entityManager->getRepository(Car::class)->findAll();

      foreach($cars as $car) {
        if ($car->getEngine() == $engine) {
            return $car;
         }
      }
      
      return null;
    }

    public function getCarByColor($color) {
      $cars = $entityManager->getRepository(Car::class)->findAll();

      foreach($cars as $car) {
        if ($car->getColor() == $color) {
            return $car;
         }
      }
      
      return null;
    }
   
}
