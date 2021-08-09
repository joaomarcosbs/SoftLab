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

    <div class="row">

      
      <!-- /.col-lg-3 -->

      <div class="col-md-6" style="margin-left: 35%;">
        <div class="col-md-8 cool-sign-up">
            <h5 class="cool-font">Contact Us</h5>

            <form action="./?page=contact-us" method="post">

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Name" name="name">
                </div>

                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                </div>

                <div class="input-group mb-3">
                    <textarea class="form-control" name="visitor_message" style="width: 100%;" placeholder="Say whatever you want." required></textarea>
                </div>


                <button type="submit" class="btn btn-lg btn-primary btn-block cool-button">Send</button>
            </form>

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
