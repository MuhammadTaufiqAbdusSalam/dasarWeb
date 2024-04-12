<?php
// // Mendefinisikan interface Shape yang memiliki method calculateArea().
/* interface Shape {
    public function calculateArea();
}

class Circle implements Shape {
    private $radius;

    public function __construct($radius)
    {
        $this -> radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this -> radius, 2);
    }
}

class Rectangle implements Shape  {
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this -> width = $width;
        $this -> height = $height;
    }

    public function calculateArea()
    {
        return $this -> width * $this -> height;
    }
}

function printArea(Shape $shape)
{
    echo "Area: " . $shape -> calculateArea() . "<br>";
}

$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

printArea($circle);
printArea($rectangle);


//Menyembunyikan detail internal dan hanya mengekspos fungsionalitas yang diperlukan
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

echo "Area of Circle: " . $circle -> calculateArea() . "<br>";
echo "Area of Rectangle: " . $rectangle -> calculateArea() . "<br>";
*/


// INTERFACE
// Mengimplementasikan dua interface, Shape dan Color, dan menghitung luas lingkaran dan mendapatkan warnanya
interface Shape {
    public function calculateArea();
}

interface Color
{
    public function getColor();
}

class Circle implements Shape, Color {
    private $radius;
    private $color;

    public function __construct($radius, $color)
    {
        $this -> radius = $radius;
        $this -> color = $color;
    }

    public function calculateArea()
    {
        return pi() * pow($this -> radius, 2);
    }

    public function getColor()
    {
        return $this -> color;
    }
}

$circle = new Circle(5, "Blue");

echo "Area of Circle: " . $circle -> calculateArea() . "<br>";
echo "Color of Circle: " . $rectangle -> getColor() . "<br>";
?>