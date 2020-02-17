
<?php 
  $connection = mysqli_connect('localhost', 'root', '', 'vsm');
  if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    $sql = "SELECT * FROM users WHERE email = '$email' ";
    $query = mysqli_query($connection, $sql);
    $count = mysqli_num_rows($row);
    if(!$query){
      die(mysqli_error($connection));
    } 
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Visual Sim Card</title>
    <link
      rel="shortcut icon"
      href="../assets/images/vsm.png"
      type="image/x-icon"
    />
    <!-- CSS Links -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/icons/css/all.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
  </head>
  <body>
    <!-- header -->
    <header class="mb-5">
      <nav class="navbar navbar-expand-md bg-primary navbar-dark fixed-top">
        <!-- Brand -->
        <a class="navbar-brand" href="../index.html">
          <img
            src="../assets/images/vsm.png"
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
              <a class="nav-link" href="../how_to/how_to.php">How To</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pricing/pricing.php">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../refer_someone/refer.php">Refer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../about_us/about_us.php">About us</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="../register/register.php">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../login/login.php">Login</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Main -->
    <main class="">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 offset-lg-2">
            <div class="card shadow-lg my-5">
              <form
                action=""
                method="post"
                class="was-validated"
                autocomplete="off"
              >
                <div class="card-header bg-primary text-white">
                  Reset Password
                  <i class="fa fa-phone-volume fa-2x"></i>
                </div>
                <div class="card-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <!-- Email Input -->
                   <!-- Email Input -->
                          <label for="emailID">Email (It Must Be Gmail)*</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="fa fa-at"></i>
                              </span>
                            </div>
                            <input
                              type="text"
                              name=""
                              id="emailID"
                              placeholder="Enter E-mail and get Code"
                              class="form-control"
                              required
                            />
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                          <!-- reset password Button -->
                          <div class="input-group">
                            <input
                              type="submit"
                              name=""
                              id=""
                              value="Reset Password"
                              class="btn btn-primary btn-block "
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer bg-primary">
                  <div class="alert alert-success">
                    <a href="../register/register.php" class="alert-link"
                      >Create account</a
                    >
                    <a href="../login/login.php" class="alert-link float-right"
                      >Log In</a
                    >
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Footer -->
    <footer class="container fixed-bottom">
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
    <!-- Scripts -->
    <script src="../assets/js/jquery-3.4.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>
