<?php
namespace app\controllers;

use app\Database;
use app\models\Dvd;
use app\models\Book;
use app\models\Furniture;
use app\Router;


class ProductController 
{
    static function index(Router $router)
    {
        $products = $router->db->getProducts();
        $router->renderView('index', 
        ['products' => $products]);
    }

    static function addProducts(Router $router)
    {
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $formData = $_POST;
            
            foreach (array_keys($formData) as $key) {
                if (!$formData[$key]) {
                    $errorString = 'Please provide ' . $key;
                    $errors[] = $errorString;
                }
            }
        
            if (empty($errors)) {
                $type = ucfirst($formData['type']);
                $product = $type == 'Book'? new Book : ($type == 'Dvd'? new Dvd : new Furniture);
                $product->load($formData);
                $db = Database::$db;
                $db->addProduct($product);
                header('Location: /');
                exit;
            }
        }

        $router->renderView('create', [
            
            'errors' => $errors
        ]);

       
    }

    static function deleteProducts()
    {
        $itemsToDelete = array_keys($_POST);
        $db = Database::$db;
        $db->deleteProducts($itemsToDelete);
        header('Location: /');
        exit;
    }
}