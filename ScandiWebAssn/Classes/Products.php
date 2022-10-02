<?php

use Controllers\AllController;
use Models\db;

// This code contains the abstract class for product differentiation as well as the extended classes (DVD, Books and Furniture).

abstract class Products{
    public $sku;
    public $name;
    public $price;
    public $size;
    public $weight;
    public $height;
    public $width;
    public $length;
    

    public function __construct($sku, $name, $price) {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
    }
        
    abstract public function unique();
   
    
    }

  abstract class Loc{
      abstract public function get();
  }  


?>