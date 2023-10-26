<?php
require_once __DIR__ . '/Car.php';

class Taxi extends Car
{   public $Passengers=0;
    public $numPassengers;
    

    public function __construct($name, $number, $color)
    {
    parent::__construct($name,$number,$color);
    
    }

public function pickUp($numPassengers)
    {   $this-> Passengers += $numPassengers;
        return  strval($numPassengers)."人乗車しました".PHP_EOL ;
    
    }

public function lower($numPassengers)
    {    if ($this->Passengers - $numPassengers >=0)  {
            $this->Passengers = $this->Passengers - $numPassengers;
        
        return  strval($numPassengers)."人降車しました".PHP_EOL ;
        }
        else{
        return strval($numPassengers)."人は降車できません".PHP_EOL ;
        
        }
                
                
    }

public function information()
    {
        return  
                "車の車種:{$this->name}".PHP_EOL .
                "車体番号:{$this->number}".PHP_EOL .
                "カラー:{$this->color}".PHP_EOL .
                "乗車人数:{$this->Passengers}人".PHP_EOL ;
                
}

}
