<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Homepage - Basque Waves Surf Shop</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Basque Waves Surf Shop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="./?page=home">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./?page=contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h5 class="my-4 cool-font">BW Surf Shop</h5>
        <div class="list-group">
          <a href="./?page=categories&category=1" class="list-group-item cool-menu">Surfboards</a>
          <a href="./?page=categories&category=2" class="list-group-item cool-menu">Wetsuites</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

     <div class="col-lg-9">
        <h5 class="my-4 cool-font">Purchase Cart</h5>
       
        <div class="row">
	        <div id="cart" class="container cool-cart-container">

    				<?php if(count($cart->getProduct()) == 0): ?>

    				<div >
        				<h5 class="cool-font">There is no item added to your cart</h5>

        				<a href="./" class="cool-button">Go Back to Shop</a>
    				</div>

    				<?php else: ?>

    				<div class="cool-cart">

	        		<ul class="list-group">

	           				<?php foreach ($cart->getProduct() as $product): ?>

		                		<li class="list-group-item d-flex flex-column flex-md-row align-items-center">
		                   				<div class="col-md-3">
		                        				<img src="<?php echo $product->image; ?>" width="100%" 3alt="">
		                    			</div>

		                        		<div class="col-md-6">
		                        				<div>
		                   						<h5 class="cool-font"><?php echo $product->title; ?></h5>
		                   						</div>	

		                        				<div class="cool-quantity-box">
		                        					<input disabled value="<?php echo $product->quantity; ?>">
		                            				<a href="./?page=add-cart&id=<?php echo $product->id; ?>" class="cool-button">+</a>
		                            				<a href="./?page=remove-quantity&id=<?php echo $product->id; ?>" class="cool-button">-</a>
		                        				</div>
		                        				<div class="cool-remove-button">
		                        				<a href="./?page=remove-product&id=<?php echo $product->id; ?>" class="cool-button">Remove</a>
		                        				</div>	
		                    			</div>

		                    			<div class="col-md-3 cool-price-quantity">
		                        				<h7 class="cool-font">$ <?php echo number_format($product->price, 2,'.'); ?></h7>
		                        				<h5 class="cool-font">$ <?php echo number_format(($product->quantity * $product->price), 2,'.'); ?></h5>
		                    			</div>

		                		</li>

	            			<?php endforeach; ?>

	        		</ul>
	        <div class="end-purchase">		
	        		<h5 class="cool-font">Total: $ <?php echo number_format($cart->total(), 2, ',', '.'); ?></h5>

	        		<a href="./?page=end-purchase" class="cool-button">Purchase</a>
	        </div>		
	    </div>

	    <?php endif; ?>

					</div>
      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Basque Surf Co</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="js/jquery/jquery.min.js"></script>
  <script src="js/bootstrap/bootstrap.bundle.min.js"></script>

</body>

</html>
