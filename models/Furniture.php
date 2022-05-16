<?php

namespace app\models;

use app\models\Product;

class Furniture extends Product {
    public $attribute;
    public function load($data)
    {
        $this->attr_name = 'CM';
        $this->name = $data['name'];
        $this->price = (float)$data['price'];
        $this->sku = $data['sku'];
        $this->type = $data['type'];
        $this->attribute = $data['height'] . "x" . $data['width'] . "x" . $data['length'];
        $this->date_created = date('Y-m-d H:i:s');
    }

}
