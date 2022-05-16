<?php
class Product{
  
    public $name;
    public $price;
    public $sku;
    public $date_created;

    public function __construct($name, $price, $sku)
    {
        $this->name = $name;
        $this->price = $price;
        $this->sku = $sku;
        $this->date_created = date('Y-m-d H:i:s');
    }

}

class Dvd extends Product {
    public $attribute;
    public function __construct($name, $price, $sku, $size)
    {
        $this->attr_name = 'size';
        $this->name = $name;
        $this->price = $price;
        $this->sku = $sku;
        $this->attribute = $size;
        $this->date_created = date('Y-m-d H:i:s');
    }

}

class Furniture extends Product {
    public $attribute;
    public function __construct($name, $sku, $price, $height, $width, $length)
    {
        $this->attr_name = 'dimension';
        $this->name = $name;
        $this->price = $price;
        $this->sku = $sku;
        $this->attribute = $height . "x" . $width . "x" . $length;
        $this->date_created = date('Y-m-d H:i:s');
    }

}

class Book extends Product {
    public $attribute;
    public function __construct($name, $price, $sku, $weight)
    {
        $this->attr_name = 'weight';
        $this->name = $name;
        $this->price = $price;
        $this->sku = $sku;
        $this->attribute = $weight;
        $this->date_created = date('Y-m-d H:i:s');
    }

}