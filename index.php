<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Visual Sim Card</title>
    <link
      rel="shortcut icon"
      href="assets/images/vsm.png"
      type="image/x-icon"
    />
    <!-- Action Bar Color -->
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="theme-color" content="#007bff" />
    <!-- IOS Apple Chrome, Opera and FIreFox -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#007bff" />
    <!-- windows phone -->
    <meta name="msapplication-navbutton-color" content="#007bff" />
    <!-- Meta Info for Open Graph => Facebook> -->
    <!-- Meta Info for Twitter Card View -->
    <!-- Meta Info for Schema.org => Google.com -->
    <meta name="format-detection" content="telephone=no" />
    <!-- CSS Links -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/icons/css/all.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <!-- Scripts -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </head>
  <body>
    <header class="mb-5">
      <nav class="navbar navbar-expand-md bg-primary navbar-dark fixed-top">
        <!-- Brand -->
        <a class="navbar-brand" href="index.php">
          <img
            src="assets/images/vsm.png"
            alt="VSM"
            class="img-fluid rounded"
          />
        </a>

        <!-- Toggler/collapsibe Button -->
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#collapsibleNavbar"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="how_to/how_to.php">How To</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pricing/pricing.php">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="refer_someone/refer.php">Refer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about_us/about_us.php">About us</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="register/register.php">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login/login.php">Login</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <main>
      <!-- Carousel Start -->
      <div id="vsmCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#vsmCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#vsmCarousel" data-slide-to="1"></li>
          <li data-target="#vsmCarousel" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/images/carousel (1).jpg" alt="Carousel 1" />
            <div class="carousel-caption bg-primary">
              <h3>VSM</h3>
              <p>Best Online Calling Platform</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/carousel (2).jpg" alt="Carousel 2" />
            <div class="carousel-caption bg-primary">
              <h3>VSM</h3>
              <p>Try Free <a href="#" class="btn btn-danger">Trial</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/images/carousel (3).jpg" alt="Carousel 3" />
            <div class="carousel-caption bg-primary">
              <h3>VSM</h3>
              <p>See our <a href="#" class="btn btn-danger">FAQs</a></p>
            </div>
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#vsmCarousel" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#vsmCarousel" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
      <!-- Carousel End -->
      <div class="container offset-lg-0">
        <div class="row">
          <div class="col-lg-8 offset-1">
            <div class="container">
              <div class="row">
                <div class="col-lg-4">
                  <div class="card my-5">
                    <div class="card-header text-center text-dark">
                      How We Work
                    </div>
                    <div class="card-body">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      <a href="#" class="btn btn-primary btn-block">
                        Read More <i class="fa fa-caret-right"></i>
                      </a>
                    </div>
                    <div class="card-footer">
                      <img
                        src="assets/images/bussiness team.jpg"
                        class="card-img-bottom"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="card my-5">
                    <div class="card-header text-center text-dark">
                      Our Ratings
                    </div>
                    <div class="card-body">
                      <div class="progress  my-2" style="height: 30px;">
                        <div
                          class="progress-bar progress-bar-striped bg-danger"
                          style="width:65%; height: 30px;"
                        >
                          Calls 65%
                        </div>
                      </div>
                      <div class="progress  my-2" style="height: 30px;">
                        <div
                          class="progress-bar progress-bar-striped bg-success"
                          style="width:80%; height: 30px;"
                        >
                          Messages 80%
                        </div>
                      </div>
                      <div class="progress  my-2" style="height: 30px;">
                        <div
                          class="progress-bar progress-bar-striped bg-info"
                          style="width:90%; height: 30px;"
                        >
                          Effiency 90%
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <a href="#">See More</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="card my-5">
                    <div class="card-header text-center text-dark">
                      Our team
                    </div>
                    <div class="card-body">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      <a href="#" class="btn btn-primary btn-block">
                        Read More <i class="fa fa-caret-right"></i>
                      </a>
                    </div>
                    <div class="card-footer">
                      <img
                        src="assets/images/team.jpg"
                        class="card-img-bottom"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Side Navs -->
      <div class="icon-bar">
        <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
        <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
        <a href="#" class="google"><i class="fab fa-google"></i></a>
        <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
        <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
      </div>
      <!-- Side Nav end -->
    </main>
    <!-- Footer -->
    <footer class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-sm bg-primary navbar-dark footer">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="#"
                  ><i class="	fa fa-copyright fa-2x"><sup>2020</sup></i></a
                >
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </footer>
  </body>
</html>
