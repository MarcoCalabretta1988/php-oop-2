<?php
include_once __DIR__ . '/Product.php';
class Game extends Product  {
   public $material;
   public $type;

   public function __construct($name, $image,$description,$price,Categories $categories,$type,$material)
{
   parent::__construct($name, $image,$description,$price,$categories) ;
   $this->material=$material;
   $this->type=$type;   
   }
}