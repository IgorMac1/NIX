<?php
interface Drive
{
    function drive();
}
abstract class Cars implements Drive
{
    public function __construct($make,$model,$color){
        $this->make = $make;
        $this->model = $model;
        $this->color = $color;
    }
    public function get_info(){
        $properties = ['color','mark','model'];
        $res=[];
        foreach ($properties as $prop){
            $res[] = $this->$prop;
        }
        return implode(' ', $res);
    }
    function drive(){
        return 'I am driving ' . $this->get_info();
    }
}
class Ford extends Cars
{
    function drive()
    {
        echo parent::drive() . '. It is sadly.' . ' ';
    }
}
class Person {

    public function __construct($name, $surname){
        $this->name = $name;
        $this->surname = $surname;
    }
    private $car;
    function sit($car) {
        if(!is_object($car)) return;
        $this->car = $car;
    }
    function drive(){
        if(is_object($this->car)) {
            $this->car->drive();
        } else echo 'I do not have a car';
    }
    function get_info(){
        echo 'I am ' . $this->name . ' ' . $this->surname . '. ';
        echo $this->drive() . '</br>';
    }
}

$ford = new Ford('Ford','Fusion','Red');
$vasya = new Person('Vasya','Pupkin');



$vasya->sit($ford);
$vasya->get_info();