<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/carousel/">
      <!--google fonts cormorant garamond-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&display=swap" rel="stylesheet">
      <!--google font prata-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">
      <!--google fonts roboto condensed-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
      <!--fontshare fonts aktura-->
      <link href="https://api.fontshare.com/v2/css?f[]=aktura@400&display=swap" rel="stylesheet">
      <!--font-awesome-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--animate.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
      <!-- Custom styles for this template -->
      <link href="carousel.css" rel="stylesheet">
      <title>Rivendale</title>
      <link rel="icon" type="image/x-icon" href="img/logoz2.png">
   </head>
   <body>
      <div class="icon-bar">
         <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
         <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
         <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
      <header>
        <!-- create your responsive navbar -->
        <nav class="navbar navbar-dark navbar-expand-lg" id="myNavbar">
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
           </button>
           <a href="index.php" class="navbar-brand animate__animated animate__backInDown">
              <h1>Rivendale</h1>
           </a>
           <div class="collapse navbar-collapse" id="mainNav">
              <ul class="navbar-nav ml-auto nav-fill ">
                 <li class="nav-item px-4">
                    <a href="#" class="nav-link">Admissions <span class="sr-only">(current)</span></a>
                 </li>
                 <li class="nav-item px-4 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Visions and Values</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="servicesDropdown">
                       <a class="dropdown-header" href="#">Visions and Values</a>
                       <img class="px-3"  src="img/sample9.png" alt="holder image" height="180" class="rounded-lg dropdown-item">
                       <div class="dropdown-divider"></div>
                       <div class="d-md-flex align-items-start justify-content-start">
                          <div>
                             <div class="dropdown-header">Development</div>
                             <a class="dropdown-item" href="#">Bespoke software</a>
                             <a class="dropdown-item" href="#">Mobile apps</a>
                             <a class="dropdown-item" href="#">Websites</a>
                          </div>
                          <div>
                             <div class="dropdown-header">Professional Services</div>
                             <a class="dropdown-item" href="#">Project rescue</a>
                             <a class="dropdown-item" href="#">Source code recovery</a>
                             <a class="dropdown-item" href="contact.php">Contact Us</a>
                          </div>
                       </div>
                    </div>
                 </li>
                 <li class="nav-item px-4">
                   <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Curriculum</a>
                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="servicesDropdown">
                      <a class="dropdown-header" href="#">Curriculum</a>
                      <img class="px-3"  src="img/sample4.png" alt="holder image" height="180" class="rounded-lg dropdown-item">
                      <div class="dropdown-divider"></div>
                      <div class="d-md-flex align-items-start justify-content-start">
                         <div>
                            <div class="dropdown-header">Development</div>
                            <a class="dropdown-item" href="#">Bespoke software</a>
                            <a class="dropdown-item" href="#">Mobile apps</a>
                            <a class="dropdown-item" href="#">Websites</a>
                         </div>
                         <div>
                            <div class="dropdown-header">Professional Services</div>
                            <a class="dropdown-item" href="#">Project rescue</a>
                            <a class="dropdown-item" href="#">Source code recovery</a>
                            <a class="dropdown-item" href="#">Application support &amp; maintenance</a>
                         </div>
                      </div>
                   </div>                 </li>
                 <li class="nav-item px-4">
                    <a href="#" class="nav-link">News</a>
                 </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search">
                    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit"><i class="fa fa-search" style="font-size:24px"></i></button>
              </form>
           </div>
        </nav>
        <!--svg container-->
        <div class="svg-container">
           <div class="custom-shape-divider-top-1663710033">
              <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                 <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" class="shape-fill"></path>
              </svg>
           </div>
        </div>
      </header>
