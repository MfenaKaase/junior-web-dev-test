<?php

namespace app\models;

abstract class Product{
  
    public string $name;
    public float $price;
    public string $sku;
    public $date_created;
    public string $type;

    abstract function load($data);

}











