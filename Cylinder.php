<?php


class Cylinder extends Circle
{
    protected $height;

    function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }
    function getHeight(){
        return $this->height;
    }
    function setHeight($height){
        $this->height=$height;
    }

    function getArea()
    {
        return pi()*pow($this->getRadius(),2)*2+pi()*$this->getRadius()*2*$this->getHeight();

    }

    function getVolum()
    {
        return parent::getArea() * $this->height;
    }
    public function toString()
    {
        return "Radius ".$this->getRadius()." color ".$this->getColor()." area: ".$this->getArea()."volum: ".$this->getVolum();
    }
}