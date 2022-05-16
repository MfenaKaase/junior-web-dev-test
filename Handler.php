<?php
require_once 'Product.php';

class Handler {

    public function chooseType($data) {
        $name = $data['name'];
        $sku = $data['sku'];
        $price = $data['price'];
        $type = $data['type'];
        if ($type == 'dvd') {
            $size = $data['size'];
            $product = new Dvd($name, $price, $sku, $size, $type);
        } elseif ($type == 'book') {
            $weight = $data['weight'];
            $product = new Book($name, $sku, $price, $weight, $type);

        } else {
            $height= $data['height'];
            $width = $data['width'];
            $length = $data['length'];
            $product = new Furniture($name, $sku, $price, $type, $height, $width, $length);

        }

       return $product;
    }
}