<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metas -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="LionCoders" />
    <!-- Links -->
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="icofont.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/slick.css" rel="stylesheet" />
    
    <link href="css/main.css" rel="stylesheet" />
    <!-- Document Title -->
    <title>FRFEED</title>
</head>
<body>
  <!-- HEADER SECTION -->  
  <header id="home">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light ">
        <!-- Change Logo Img Here -->
        <a class="navbar-brand" href="#"><img src="images/logofeed2.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <div class="interactive-menu-button">
            <a href="#">
              <span>Menu</span>
            </a>
          </div>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <!-- Nav Link -->
              <a class="nav-link" data-scroll href="/">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <!-- Nav Link -->
              <a class="nav-link" data-scroll href="culture">Culture</a>
            </li>
            <li class="nav-item">
              <!-- Nav Link -->
              <a class="nav-link" data-scroll href="Nasa">Nasa</a>
            </li>
            <li class="nav-item">
              <!-- Nav Link -->
              <a class="nav-link" data-scroll href="Tekno">Tekno</a>
            </li>
            <li class="nav-item">
              <!-- Nav Link -->
              <a class="nav-link" data-scroll href="rsssafly">Rss Saflyi</a>
              <li class="nav-item">
              <!-- Nav Link -->
              <a class="nav-link" data-scroll href="pokemon">Pokemon</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  <!-- ABOUT SECTION -->
  @foreach($index as $index)
  <section class="about">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-6">
          <img src="{{$index->img_url}}">
        </div>
        <div class="col-12 col-sm-12 col-lg-6">
          <h2 class="achive_text">{{$index->title}}</h2>
          <!-- Replace About Us Text Under -->
          <p class="lorem_text">{{$index->description}}</p>
          <a data-scroll href="{{$index->source_url}}">Selengkapnya</a>
        </div>
      </div>
    </div>
  @endforeach
  </section>
 
  <!-- FOOTER SECTION -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h5>FRFEED</h5>
          <h3>FAIRUZRIZQI FEED</h3>
          <ul class="contact-nav">
            <li><a data-scroll href="#home">Home.</a></li>
            <li><a data-scroll href="#about-us">About Us.</a></li>
            <li><a data-scroll href="#portfolio">Portfolio.</a></li>
            <li><aS data-scroll href="#blog">Blog.</a></li>
            <li><a data-scroll href="#contact-us">Contact.</a></li>
          </ul>
          <h6>© 2019 - Doob,All Right Reserved</h6>
          <ul class="social">
            <li><a href="#"><i class="icofont-facebook"></i></a></li>
            <li><a href="#"><i class="icofont-twitter"></i></a></li>
            <li><a href="#"><i class="icofont-dribbble"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/smooth-scroll.min.js"></script>
  <script src="js/main.js"></script>
  <!-- Scripts Ends -->
</body>
</html>