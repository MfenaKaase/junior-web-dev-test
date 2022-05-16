<?php

namespace app\models;
use app\models\Product;

class Dvd extends Product {
    public $attribute;
    public function load($data)
    {
        $this->attr_name = 'MB';
        $this->name = $data['name'];
        $this->price = (float)$data['price'];
        $this->sku = $data['sku'];
        $this->attribute = $data['size'];
        $this->type = $data['type'];
        $this->date_created = date('Y-m-d H:i:s');
    }

}
