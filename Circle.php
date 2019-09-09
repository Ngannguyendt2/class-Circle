<?php


class Circle
{
    protected $radius;
    protected $color;

    function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    function getRadius()
    {
        return $this->radius;
    }

    function setRadius($radius)
    {
        $this->radius = $radius;
    }

    function getColor()
    {
        return $this->color;
    }

    function setColor($color)
    {
        $this->color = $color;
    }
    function getArea(){
        return pi()*pow($this->getRadius(),2);
    }
    function toString(){
        return "Radius ".$this->getRadius()." color ".$this->getColor()." area: ".$this->getArea();
    }
}