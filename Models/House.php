<?php
include_once __DIR__ . '/Product.php';
class House extends Product  {
   public $material;
   public $weight;

   public function __construct($name, $image,$description,$price,Categories $categories,$weight,$material)
{
   parent::__construct($name, $image,$description,$price,$categories) ;
   $this->material=$material;
   $this->weight=$weight;   
   }
}