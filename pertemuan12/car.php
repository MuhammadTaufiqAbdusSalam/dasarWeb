<?php 
// // Mendefinisikan atribut model dan color, serta menyediakan metode untuk mengakses dan mengubah nilai atribut
/*class Car
{
    private $model;
    private $color;

    public function __construct($model, $color)
    {
        $this -> model = $model;
        $this -> color = $color;
    }

    public function getModel()
    {
        return $this -> model;
    }

    public function setColor($color)
    {
        $this -> color = $color;
    }

    public function getColor()
    {
        return $this -> color;
    }
}

$car = new Car("Toyota", "Blue");

echo "Model: " . $car -> getModel() . "<br>";
echo "Color: " . $car -> getColor() . "<br>";

$car -> setColor("Red");

echo "Updated Color: " . $car -> getColor() . "<br>";
*/


// CONSTRUSTOR DAN DESTRUCTORS
// Mendefinisikan konstruktor untuk membuat pesan saat objek mobil dibuat, dan mengembalikan merek mobil
class Car
{
    private $brand;

    public function __construct($brand)
    {
        echo "A new car is created. <br>";
        $this -> brand = $brand;
    }

    public function getBrand()
    {
        return $this -> brand;
    }

    public function __destruct()
    {
        echo "The car is destroyed. <br>";   
    }
}

$car = new Car("Toyota");

echo "Brand: " . $car -> getBrand() . "<br>";
?>