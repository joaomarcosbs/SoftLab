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
          <li class="nav-item active">
            <a class="nav-link" href="./?page=home">Home
              <span class="sr-only">(current)</span>
            </a>
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

      <div class="col-lg-3">

        <h5 class="my-4 cool-font">BW Surf Shop</h5>
        <div class="list-group">
          <a href="./?page=categories&category=1" class="list-group-item cool-menu">Surfboards</a>
          <a href="./?page=categories&category=2" class="list-group-item cool-menu">Wetsuites</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
        <div class="col-md-8 cool-sign-up">
            <h5 class="cool-font">Sign Up Here</h5>

            <form action="./?page=sign-up" method="post">

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text cool-form" id="inputGroup-sizing-default">Name</span>
                    </div>
                    <input type="text" class="form-control cool-form" name="name">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text cool-form" id="inputGroup-sizing-default">E-mail</span>
                    </div>
                    <input type="email" class="form-control cool-form" name="email">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text cool-form" id="inputGroup-sizing-default">Password</span>
                    </div>
                    <input type="password" class="form-control cool-form" name="password">
                </div>

                <button type="submit" class="cool-button" style="float: right; width: 100%;">Sign up</button>
            </form>

        </div>

        <div class="col-md-6" style="padding: 1px;">
            <h6 class="cool-font registered">Already registerd? <a href="./?page=login"> click to Login</a></h6>
            
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
