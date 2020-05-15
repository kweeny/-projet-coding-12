<!DOCTYPE html>
<html lang="en">
<head>

     <title>Hydro - Landing Page Template</title>
<!-- 
Hydro Template 
http://www.templatemo.com/tm-509-hydro
-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">
</head>
<body>



     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand">Hydro</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="/home" class="smoothScroll">Home</a></li>
                         <li><a href="/about" class="smoothScroll">About</a></li>
                         <li><a href="/blog" class="smoothScroll">Event</a></li>
                         <li><a href="/work" class="smoothScroll">Our Work</a></li>
                         <li><a href="/contact" class="smoothScroll">Contacts</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                         <li class="section-btn"><a href="#" data-toggle="modal" data-target="#modal-form">Sign in / Join</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="home-info">
                              <h1>We make beautiful websites for all people.</h1>
                              <a href="#about" class="btn section-btn smoothScroll">Start a project</a>
                              <span>
                                   CALL US (+66) 010-020-0340
                                   <small>For any inquiry</small>
                              </span>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="home-video">
                              <div class="embed-responsive embed-responsive-16by9">
                                   <iframe src="https://www.youtube.com/embed/AqcjdkPMPJA" frameborder="0" allowfullscreen></iframe>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>

     @yield('content')
     
</body>
</html>