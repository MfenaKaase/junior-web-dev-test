<?php

namespace app;

use PDO;
use app\models\Product;

class Database 
{
    public \PDO $pdo;
    public static Database $db;

    private $host = "localhost";
    private $port = "3307";
    private $db_name = "junior_dev_test";
    private $username = "root";
    private $password = "";


    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->db_name, $this->username, $this->password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        self::$db = $this;
    }

    public function getProducts(){ 
        $statement = $this->pdo->prepare('SELECT * FROM products ORDER BY id');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
         
    }

    public function addProduct(Product $product){
        $name = $product->name;
        $sku = $product->sku;
        $price = $product->price;
        $attr_name = $product->attr_name;
        $attribute = $product->attribute;
        $type = $product->type;
        $date_created = $product->date_created;
        $statement = $this->pdo->prepare(
            "INSERT INTO products (sku, name, price, attr_name, attribute, type, create_date)
            VALUE (:sku, :name, :price, :attr_name, :attribute, :type, :date_created)"
        );

        $statement->bindValue(':sku', $sku);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':attr_name', $attr_name);
        $statement->bindValue(':attribute', $attribute);
        $statement->bindValue(':type', $type);
        $statement->bindValue(':date_created', $date_created);
        $statement->execute();
        
        
    }

    public function deleteProducts($arr) {
        for ($i = 0; $i < count($arr); $i++) {
            $id = $arr[$i];
            $statement = $this->pdo->prepare('DELETE FROM products WHERE id = :id' );
            $statement->bindValue(':id', $id);
            $statement->execute();
        }
    }
}

/*`
class Database{
 
    // specify your own database credentials
    
   
   
    // get the database connection
   

    

    


}

?>

*/