<?php
include_once __DIR__ . '/Product.php';
class Food extends Product  {
   public $ingredients;
   public $expiration;

   public function __construct($name, $image,$description,$price,Categories $categories,$expiration,$ingredients)
{
   parent::__construct($name, $image,$description,$price,$categories) ;
   $this->ingredients=$ingredients;
   $this->expiration=$expiration;   
   }
}