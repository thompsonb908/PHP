<?php

require "../Helpers/Helper.php";

class Circle {
    /*
     * class members can be public, protected or private.
     * public - can be accessed anywhere
     * protected - can be accessed within objects of the class and subclasses
     * private - can only be access within objects of the class
     */
    public $radius;

    //methods can also have access rights (public, protected, private)
    //the default access for a mthod is public.

    //Class constructor
    function __construct($r)
    {
        $this->radius = $r;
    }

    //a method (function) that returns the area.
    function area()
    {
        return 3.14159 * $this->radius;
    }
}

$rad = 5;
$aCircle = new Circle($rad);
echo "<p>The area of a circle with radius $rad is " .
    $aCircle->area() . "</p>";
pageBottom();
?>