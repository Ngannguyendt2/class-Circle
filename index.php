<?php
include_once "Circle.php";
include_once "Cylinder.php";
$circle=new Circle(5,'blue');
$cylinder=new Cylinder(6,'yellow',15);
echo $circle->toString()."<br>";
echo $cylinder->toString();
