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
      <a class="navbar-brand" href="./?page=home">Basque Waves Surf Shop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="./?page=categories&category=1">Surfboards</a>
              <a class="dropdown-item" href="./?page=categories&category=2">Wetsuites</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <?php if(isset($_SESSION['authenticated'])): ?>
                    <a class="nav-link" href="./?page=log-out">Log Out</a>
            <?php else: ?> 
                    <a class="nav-link" href="./?page=login">Log In</a>
            <?php endif; ?>        
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

    <div class="">

      
      <!-- /.col-lg-3 -->

      <div class="">
        <h5 class="my-4 cool-font">Daily Spots</h5>
        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <a href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.surfer.com%2Ffeatures%2Fworlds-best-waves-hossegor%2F&psig=AOvVaw0JW90MtMgSCTF32n-GbGrz&ust=1607962967347000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCLia9f6uy-0CFQAAAAAdAAAAABAD">
              <img class="d-block img-fluid" src="https://i2.wp.com/www.surfer.com/wp-content/uploads/2017/06/Hossegor_France_Testemale.jpg?resize=1200%2C600&ssl=1" alt="First slide">
              </a>
            </div>
            <div class="carousel-item">
                <a href="https://www.sansebastianturismoa.eus/en/blog/sport-city/984-the-waves-of-la-zurriola">
              <img class="d-block img-fluid" src="https://spot-thumbnails.cdn-surfline.com/spots/5842041f4e65fad6a7708e74/5842041f4e65fad6a7708e74_1500.jpg" alt="Second slide">
                </a>
            </div>
            <div class="carousel-item">
              <a href="https://surfsimply.com/travel/the-freight-train-a-celebration-of-mundaka/"> 
              <img class="d-block img-fluid" src="https://noticiasdomar.com.br/wp-content/uploads/2015/05/Mundaka-Foto-Oscar-Diego-e1432491214712.jpg" alt="Third slide">
              </a>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <h5 class="my-4 cool-font">Highlights - Stay Tuned:</h5>
        <div class="row">

           
            <?php 

            foreach ($products as $product): ?>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 cool-card">
                <a href="./?page=product&id=<?php echo $product->id; ?>"><img src="<?php echo $product->image; ?>" class="card-img-top product-highlight" alt=""></a>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->title; ?></h5>
                            <h3 class="product-price">$ <?php echo number_format($product->price, 2,'.'); ?></h3>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                </div>
            </div>

            <?php endforeach; ?>  

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-3 bg-dark">
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
