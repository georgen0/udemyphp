<?php

class Dog
{
    var $fur = "Brown";
    var $age = 5;

    function ShowAll()
    {
        echo $this->fur . "<br>" . $this->age;
    }

    function __construct($fur, $age)
    {
        $this->fur = $fur;
        $this->age = $age;
    }
}

$pitbull = new Dog("Aqua", 10);
$pitbull->ShowAll();
?>