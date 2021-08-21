<?php

class Cart {

    public function __construct() {
        if (!isset($_SESSION['cart']))
            $_SESSION['cart'] = [];
    }

    public function addProduct($product) {
        if (isset($_SESSION['cart'][$product->id]))
            $_SESSION['cart'][$product->id]->quantity++; //Quantity atribute from the Class; 
        else
            $_SESSION['cart'][$product->id] = $product;
    }

    public function getProduct() {
        return $_SESSION['cart'];
    }

    public function removeQuantity($id) {
        if ($_SESSION['cart'][$id]) {
            if ($_SESSION['cart'][$id]->quantity > 1)
                $_SESSION['cart'][$id]->quantity--;
            else
                unset($_SESSION['cart'][$id]);
        }
    }

    public function removeProduct($id) {
        if ($_SESSION['cart'][$id])
            unset($_SESSION['cart'][$id]);
    }

    public function total() {
        $totalPrice = 0;

        foreach ($_SESSION['cart'] as $product) 
            $totalPrice += $product->price * $product->quantity; //Quantity from Class added to the session with the product price, from Class.

        return $totalPrice;
    }

    public function clear() {
        if ($_SESSION['cart'])
            unset($_SESSION['cart']);
    }

}