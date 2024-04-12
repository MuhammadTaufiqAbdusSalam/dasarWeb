<?php
// embuat inheritance pewarisan parent class Animal ke subclass Cat
/* class Animal
{
     protected $name;

     public function __construct($name)
     {
         $this -> name = $name;
     }

     public function eat()
     {
         echo $this -> name . " is eating.<br>";
     }

     public function sleep()
     {
         echo $this -> name . " is sleeping.<br>";
     }
}

class Cat extends Animal
{
     public function meow()
     {
         echo $this -> name . " says meow!<br>";
     }
}

class Dog extends Animal
{
     public function bark()
     {
         echo $this -> name . " says woof!<br>";
     }
}

$cat = new Cat("Whiskers");
$dog = new Dog("Buddy");

$cat -> eat();
$dog -> sleep();

$cat -> meow();
$dog -> bark();
*/


// ENCAPSULATION AND ACCESS MODIFIERS
// Mendefinisikan atribut dengan level akses masing-masing dan menyediakan metode untuk mengakses nilai properti tersebut
class Animal
{
    public $name;
    protected $age;
    private $color;

    public function __construct($name, $age, $color)
    {
        $this -> name = $name;
        $this -> age = $age;
        $this -> color = $color;
    }

    public function getName()
    {
        return $this -> name;
    }

    public function getAge()
    {
        return $this -> age;
    }

    public function getColor()
    {
        return $this -> color;
    }
}

$animal = new Animal("Dog", 3, "Brown");

echo "Name: " . $animal -> name . "<br>";
echo "Age: " . $animal -> getAge() . "<br>";
echo "Color: " . $animal -> getColor() . "<br>";
?>