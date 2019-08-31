<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
  <meta name="description" content="">
  <meta name="author" content="">

    <title>Lanier HS Art</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/grayscale.min.css" rel="stylesheet">
</head>

<body id="page-top">

  <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Lanier HS Art</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="adminhome.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminevents.php">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminclasses.php">Classes</a>
          </li>
             <li class="nav-item">
    
            <li class="nav-item">
            <a class="nav-link" href="adminclubs.php">Clubs</a>
         
          </li>
            
              <li class="nav-item">
            <a class="nav-link" href="admingallery.php">Gallery</a>
         
          </li>
         <li class="nav-item">
            <a class="nav-link" href="adminupdates.php">Updates</a>
            </li>
        <li class="nav-item">
        <a class="nav-link" href="profile.php"><?php echo $_SESSION['username'];?></a>
            </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  

  <!-- About Section -->
  <section id="about" class="pageHeads text-center">
    <div class="container">
      <div class=" row">
        <div class="col-lg-8 mx-auto">
          <h1 class="text-white mb-4">Media</h1>
          <p class="text-white-50"></p>
        </div>
      </div>
      
    
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="projects-section bg-light">
    <div class="container">

      <!-- Featured Project Row -->
   
        <div class="Galleryrow"> 
  <div class="Gallerycolumn">
     <div class="Galleryitem">
   
        
      </div>
     <div class="Galleryitem">
    <a href="img/placeholder.png"><img src="img/trackMain.jpg" style="width:100%">
       </a> 
        
      </div>
      <div class="Galleryitem">
    <img src="img/placeholder.png" style="width:100%">
         
      </div>
          <div class="Galleryitem">
              <img src="img/placeholder.png" style="width:100%">
    </div> 
  </div>
              <div class="Gallerycolumn">
     <div class="Galleryitem">
   
        
      </div>
     <div class="Galleryitem">
    <img src="img/placeholder.png" style="width:100%">
        
      </div>
      <div class="Galleryitem">
    <img src="img/placeholder.png" style="width:100%">
         
      </div>
          <div class="Galleryitem">
              <img src="img/placeholder.png" style="width:100%">
    </div> 
  </div>
              <div class="Gallerycolumn">
     <div class="Galleryitem">
   
        
      </div>
     <div class="Galleryitem">
    <img src="img/placeholder.png" style="width:100%">
        
      </div>
      <div class="Galleryitem">
    <img src="img/placeholder.png" style="width:100%">
         
      </div>
          <div class="Galleryitem">
              <img src="img/placeholder.png" style="width:100%">
    </div> 
  </div>
      	 <div class="Gallerycolumn">
     <div class="Galleryitem">
   
        
      </div>
     <div class="Galleryitem">
    <img src="img/placeholder.png" style="width:100%">
        
      </div>
      <div class="Galleryitem">
    <img src="img/placeholder.png" style="width:100%">
         
      </div>
          <div class="Galleryitem">
              <img src="img/placeholder.png" style="width:100%">
    </div> 
  </div>
		
      <!-- Project One Row -->
        
        </div>

    </div>
  </section>

  <!-- Signup Section -->
  <section id="signup" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Subscribe to receive updates!</h2>

          <form class="form-inline d-flex">
            <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address...">
            <button type="submit" class="btn btn-primary mx-auto">Subscribe</button>
          </form>

        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact-section bg-black">
    <div class="container">

      <div class="row">

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Address</h4>
              <hr class="my-4">
              <div class="small text-black-50">4923 Market Street, Orlando FL</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4">
              <div class="small text-black-50">
                <a href="#">hello@yourdomain.com</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-mobile-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Phone</h4>
              <hr class="my-4">
              <div class="small text-black-50">+1 (555) 902-8832</div>
            </div>
          </div>
        </div>
      </div>

      <div class="social d-flex justify-content-center">
        <a href="#" class="mx-2">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-instagram"></i>
        </a>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; Your Website 2019
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
    
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
   
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    

  <!-- Custom scripts for this template -->
  <script src="js/grayscale.min.js"></script>
      <script src="js/grayscale.js"></script>

</body>

</html>
