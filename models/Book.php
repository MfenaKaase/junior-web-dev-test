<?php

namespace app\models;
use app\models\Product;

class Book extends Product {
    public $attribute;
    public function load($data)
    {
        $this->attr_name = 'KG';
        $this->name = $data['name'];
        $this->price = (float)$data['price'];
        $this->sku = $data['sku'];
        $this->attribute = $data['weight'];
        $this->type = $data['type'];
        $this->date_created = date('Y-m-d H:i:s');
    }

}