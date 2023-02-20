<?php

class Product {
    public $name;
    public $image;
    public $description;
    public $price;

    public function __construct($name, $image,$description,$price)
    {
        $this->name = $name;
        $this->image = $image;
        $this->description = $description;
        $this->price = $price;
    }
}