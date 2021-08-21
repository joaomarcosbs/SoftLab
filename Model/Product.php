<?php

class Product {

    public $id;
    public $title;
    public $category;
    public $details;
    public $image;
    public $price;
    public $highlight;
    public $quantity;
    

    public function __construct($id = '', $title = '', $category = '', $details = '', $image = '', $price = '', $highlight = '') {
        $this->id = $id;
        $this->title = $title;
        $this->category = $category;
        $this->details = $details;
        $this->image = $image;
        $this->price = $price;
        $this->highlight = $highlight;
        $this->quantity = 1; //In order to be able to manage the cart with session - not added to DB;
    }

    public static function get($id) {

        $query = DB::conn()->prepare('SELECT * FROM product WHERE id = :id');
        $query->bindValue('id', $id);
        $query->execute();

        if ($query->rowCount() != 0) {
            $product = $query->fetch(PDO::FETCH_OBJ);

            return new Product($id, $product->title, $product->category, $product->details, $product->image, $product->price, $product->highlight);
        }

        return false;
    }

    public static function getAll() {

        $query = DB::conn()->prepare('SELECT * FROM product WHERE highlight = 1');
        //$query->bindValue('id', $id);
        $query->execute();

        $products = [];

        if ($query->rowCount() != 0) {

            while ($product = $query->fetch(PDO::FETCH_OBJ))
            array_push($products, Product::get($product->id));
        }


        return $products ;
    }

    public static function getCategory($category) {

        $query = DB::conn()->prepare('SELECT * FROM product WHERE category = :category');
        $query->bindValue('category', $category);
        $query->execute();

          

        $products = [];

        if ($query->rowCount() != 0) {

            while ($product = $query->fetch(PDO::FETCH_OBJ))
            array_push($products, Product::get($product->id));
        }

        return $products ;
    }
}