<?php

require_once __DIR__ . '/Categories.php';

class Product {
    public $name;
    public $image;
    public $description;
    public $price;
    public $categories;

    public function __construct($name, $image,$description,$price,Categories $categories)
    {
        $this->name = $name;
        $this->image = $image;
        $this->description = $description;
        $this->price = $price;
        $this->categories = $categories;
    }
}