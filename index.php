<?php
    abstract class TechnicalUnit 
    {
        public $name;
        abstract public function goForward(); 
        abstract public function goBack();
        public function setName($name)
        {
            $this->name = $name;
        }
        public function getName() 
        {
            return $this->name;
        }
        //Полиморфная функция
        public function unitAction() {
            echo 'move<br>';
            echo $this->action;
        }

    }

    class Car extends TechnicalUnit 
    {
        public $equipment; //Отделка салона (комплектация)
        protected $action = 'nitrous oxide on!';
        public function goForward() 
        {
            echo "$this->name goes forward!";
        }
        public function goBack() 
        {
            echo "$this->name goes back!";
        }
        //ПОдача сигнала
        public function signal() 
        {
            echo 'Beep-beep!<br>';
        }

        //Включение дворников
        public function clearFrontWindow() 
        {
            echo 'Car wipers on!';
        }
        public function turnOnNitro() {
            $this->unitAction();
        }
    }

    class Tank extends TechnicalUnit 
    {
        public function goForward() 
        {
            echo "$this->name goes forward!";
        }
        public function goBack() 
        {
            echo "$this->name goes back!";
        }
    }

    class SpecialUnit extends TechnicalUnit 
    {
        protected $action = 'bucket control';
        public function goForward() 
        {
            echo "$this->name goes forward!";
        }
        public function goBack() 
        {
            echo "$this->name goes back!";
        }
        public function bucketControl() {
            $this->unitAction();
        }
    }

    
    //Тестовые данные:

    /*
    $audi = new Car;
    $audi->setName('Audi');
    $audi->equipment = 'prestige';
    echo $audi->equipment;
    $audi->signal();
    $audi->turnOnNitro();
    $audi->goForward();
    $audi->goBack();

    $t_34 = new Tank;
    $t_34->setName('T-34');
    $t_34->goForward();
  
    $excavator = new SpecialUnit;
    $excavator->bucketControl();
    */
?>
