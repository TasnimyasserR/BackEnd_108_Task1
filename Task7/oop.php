<?php

abstract class Shape {
   
    abstract public function calculateArea();
    abstract public function calculatePerimeter();
}


interface Drawable {
   
    public function draw();
}


class Circle extends Shape implements Drawable {
    private $radius;

   
    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }

    public function calculatePerimeter() {
        return 2 * pi() * $this->radius;
    }

    
    public function draw() {
        echo "<div style='width: " . (2 * $this->radius) . "px; height: " . (2 * $this->radius) . "px; border-radius: 50%; background-color: lightblue;'></div>";
    }
}


class Rectangle extends Shape implements Drawable {
    private $length;
    private $width;


    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    
    public function calculateArea() {
        return $this->length * $this->width;
    }

    
    public function calculatePerimeter() {
        return 2 * ($this->length + $this->width);
    }

    public function draw() {
        echo "<div style='width:  " . $this->length . "px; height: " . $this->width . "px; background-color: lightblue;'></div>";
    }
}


$circle = new Circle(10);
echo "Circle Area: " . $circle->calculateArea() . "<br>";
echo "Circle Perimeter: " . $circle->calculatePerimeter() . "<br>";
$circle->draw();
echo "<br>";

$rectangle = new Rectangle(15, 20);
echo "Rectangle Area: " . $rectangle->calculateArea() . "<br>";
echo "Rectangle Perimeter: " . $rectangle->calculatePerimeter() . "<br>";
$rectangle->draw();
?>
