<?php

class Car
{
    public $name;
    public $number;
    public $color;

    public function __construct($name, $number, $color)
    {
        $this->name = $name;
        $this->number = $number;
        $this->color = $color;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function Information()
    {
        return "車の車種：{$this->name}" . PHP_EOL .
            "車体番号：{$this->number}" . PHP_EOL .
            "カラー：{$this->color}" . PHP_EOL;
    }
}
