<?php

require_once "../model/DB.php";
require_once "../model/Product.php";
require_once "../model/Client.php";
require_once "../model/Cart.php";
require_once "../model/PHPMailer.php";
require_once "../model/SMTP.php";

session_start();
$cart = new Cart(); // Session to control the Cart feature;


// Router Arrays
$actions = ['sign-up', 'log-in', 'log-out', 'add-cart', 'remove-quantity', 'remove-product', 'cancel-cart','end-purchase', 'filter-category'];
$pages = ['home', 'register', 'login', 'product', 'cart', 'receipt', 'contact', 'categories'];

// Router Settings
if(!isset($_GET['page']) || $_GET['page'] == 'home' ||  $_GET['page'] == '') {

    $products = Product::getAll();
    require_once '../views/home.php';

} else {
	// Action route
    if(isset($_GET['page']) && in_array($_GET['page'], $actions)) {


    	// Route to Sign Up page
        if ($_GET['page'] == 'sign-up') {
        	
            $name = filter_input(INPUT_POST, 'name');
            $email = filter_input(INPUT_POST, 'email');
            $password = filter_input(INPUT_POST, 'password');


            if (Client::register($name, $email, $password))
              header('Location: ./?page=login'); //If register replies back with a good response route to login page
            else
                header('Location: ./?page=register');
        }
       
        // Route to Login page
        if ($_GET['page'] == 'log-in') {

            $email = filter_input(INPUT_POST, 'email');
            $password = filter_input(INPUT_POST, 'password');

            if ($client = Client::login($email, $password)){
                $_SESSION['authenticated'] = $client;
                echo "<script>alert('Authenticated');location.href='./?page=home'</script>";//If login replies back with a good response route to home page
        	} else{
                echo "<script>alert('Error! Please try again!');location.href='./?page=login'</script>";
        	}

         die();       
        }

        // Route to Logout
        if ($_GET['page'] == 'log-out' &&  isset($_SESSION['authenticated'])) {
            unset($_SESSION['authenticated']);
            header('Location: ./');
        }

        // Purchase section route	
        // Add Product to Cart
        if ($_GET['page'] == 'add-cart') {
            if (isset($_GET['id']) && is_numeric($_GET['id'])) {
				$product = Product::get($_GET['id']);
                if ($product) // If get from Product Class replies back with data the add to cart function will be called.
                    $cart->addProduct($product);
            }

            header('Location: ./?page=cart');
        }

        // Remove Product quantity from Cart
        if ($_GET['page'] == 'remove-quantity') {
            if (isset($_GET['id']) && is_numeric($_GET['id']))
                $cart->removeQuantity($_GET['id']);

            header('Location: ./?page=cart');
        }

        // Remove Product from Cart
        if ($_GET['page'] == 'remove-product') {
            if (isset($_GET['id']) && is_numeric($_GET['id']))
                $cart->removeProduct($_GET['id']);

            header('Location: ./?page=cart');
        }

        // End Purchase
        if ($_GET['page'] == 'end-purchase') {	
            if(!isset($_SESSION['authenticated'])) {
               $_SESSION['location'] = '/?page=end-purchase';
               header('Location: ./?page=login');
            } else {
                if (count($_SESSION['cart']) == 0) {
                    header('Location: ./');
                } else {

                    $html = '';
                    $html .= '<h1>E-Receipt</h1><br>';

                    foreach ($cart->getProduct() as $product) {
                        $subtotal = number_format(($product->price * $product->quantity), 2, ',', '.');
                        $price = number_format($product->price, 2, ',', '.');

                        $html .= "<h3>{$product->title}</h3>";
                        $html .= "<h5>Price: R$ {$price}</h5>";
                        $html .= "<h5>Quantity: {$product->quantity}</h5>";
                        $html .= "<h5>Total: R$ {$subtotal}</h5><hr><br>";
                    }

                    $total = number_format($cart->total(), 2, ',', '.');

                    $html .= '<br><br>';
                    $html .= "<h2>Purchase Amount: R$ {$total}</h2><br>";

                    // Sender data
                    //$mail = new PHPMailer(true);
                    //$mail->IsSMTP();
                    //$mail->Host = 'smtp.gmail.com ';
                    //$mail->Port = 587;
                    //$mail->SMTPSecure = 'tls';
                    //$mail->SMTPAuth = true;
                    //$mail->Username = '';
                    //$mail->Password = '';
                    //$mail->SMTPOptions = array(
                        //'ssl' => array(
                           // 'verify_peer' => false,
                          //  'verify_peer_name' => false,
                           // 'allow_self_signed' => true
                        //)
                    //);

                    //$mail->setFrom('test@gmail.com', 'Basque Surf Shop');

                    //$mail->Subject = 'E-Receipt - Basque Waves Surf Shop';
                    //$mail->msgHTML($html);

                    //Client Data
                    //$mail->addAddress($_SESSION['authenticated']->email);

                    //if(!$mail->Send()) {
                    if(true){
                        echo '<script>alert("The e-mail has not been sent");location.href="./?page=receipt"</script>';
                    } else {
                    	 echo '<script>alert("The e-mail has been sent");location.href="./?page=receipt"</script>';
                    }
                }
            }
        }
    }

    // Page route
    if(isset($_GET['page']) && in_array($_GET['page'], $pages)) {

        // Product Page
        if ($_GET['page'] == 'product' && isset($_GET['id'])) {
            if (is_numeric($_GET['id'])) {
                $product = Product::get($_GET['id']);
            } else
                header('Location: ./');
        }

        if ($_GET['page'] == 'categories' && isset($_GET['category'])) {
            if (is_numeric($_GET['category'])) {
                $products = Product::getCategory($_GET['category']);
            } else
                header('Location: ./');
        }

        include "../views/{$_GET['page']}.php";

    } else { // Page not found
        include "../views/404.php";
    }

}