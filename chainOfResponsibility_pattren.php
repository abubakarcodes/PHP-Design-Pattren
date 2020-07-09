<?php
//i did not understand it well but implement it so kindly review it again.
abstract class HomeChecker{
    protected $successor;
    public abstract function check(HomeStatus $home);
    public function succeedWith(HomeChecker $successor){
        $this->successor = $successor;
    }
    public function next(HomeStatus $home){
        if($this->successor){
            $this->successor->check($home);
        }

    }
}


class Lights  extends HomeChecker{
    public function check(HomeStatus $home){
        if(! $home->lights){
            throw new Exception('The lights are still on. abort!! abort!!');
        }

        $this->next($home);
    }
}




class Locks extends HomeChecker {
    public function check(HomeStatus $home){
    if(! $home->locked){
        throw new Exception('The doors are not locked');
    }

    $this->next($home);
    }
}



class Alarm  extends HomeChecker{
    public function check(HomeStatus $home){
        if(! $home->alarm){
            throw new Exception('The alarm is still off.');
        }

        $this->next($home);
    }
}





class HomeStatus{
    public $alarm = true;
    public $locked = true;
    public $lights = false;

}



$locks = new Locks();
$lights = new Lights();
$alarm = new Alarm();
$homeStatus = new HomeStatus();




$locks->succeedWith($lights);
$lights->succeedWith($alarm);
$locks->check($homeStatus);





