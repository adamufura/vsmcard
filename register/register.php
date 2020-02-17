<?php 
  
  require_once("../includes/config.php"); 
  include("../includes/functions.php");
  include(HEADER . DS . "header.php");

  $connection = mysqli_connect('localhost', 'root', '', 'vsm');
  if (!$connection) {
    echo "failed";
  }

  if (isset($_POST['register'])) {
    $email = escape_string($_POST['email']);
    $password = $_POST['password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $code = $_POST['country_code'];
    $number = $_POST['number'];
    $phone_number = $code.$number;
    $sql = "INSERT INTO USERS(email, password, first_name, last_name, phone) VALUES ('$email', '$password', '$first_name', '$last_name', '$phone_number')";
    $query = mysqli_query($connection, $sql);
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
    <title>Register</title>
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
            <li class="nav-item active">
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
                  Join VSM <i class="fa fa-phone-volume fa-2x"></i>
                </div>
                <div class="card-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <!-- First Name Input -->
                          <label for="fnameID">First Name</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="fa fa-user-alt"></i>
                              </span>
                            </div>
                             <input
                              type="text"
                              name="first_name"
                              id="fnameID"
                              placeholder="Enter First Name"
                              class="form-control is-invalid"
                              required
                            />
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <!-- Last Name Input -->
                          <label for="lnameID">Last Name</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="fa fa-user-alt"></i>
                              </span>
                            </div>
                             <input
                              type="text"
                              name="last_name"
                              id="lnameID"
                              placeholder="Enter Last Name"
                              class="form-control is-invalid"
                              required
                            />
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                          <!-- Email Input -->
                          <label for="emailID">Email (It Must Be Gmail)*</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="fa fa-at"></i>
                              </span>
                            </div>
                            <input
                              type="email"
                              name="email"
                              id="emailID"
                              placeholder="Enter Google Mail"
                              class="form-control"
                              required
                            />
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <!-- Phone Number Input -->
                        <label for="lnameID">Phone Number</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="fa fa-phone-square-alt"></i>
                            </span>
                          </div>

                          <select name="country_code" class="custom-select w-25" required>
                            <option selected>Select Country Code</option>
                            <option value="+234">+234</option>
                            <option value="+91">+91</option>
                            <option value="+444">+44</option>
                          </select>
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="fa fa-phone"></i>
                            </span>
                          </div>
                          <input
                            type="text"
                            name="number"
                            id="lnameID"
                            placeholder="Enter Phone Number"
                            class="form-control is-invalid"
                            required
                          />
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <!-- Password Input -->
                          <label for="passwordID">Password</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="fa fa-lock"></i>
                              </span>
                            </div>
                            <input
                              type="password"
                              name="password"
                              id="passwordID"
                              placeholder="Enter Password"
                              class="form-control is-invalid"
                              required
                            />
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <!-- Cofirm Password Input -->
                          <label for="confirmID">Cofirm Password</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="fa fa-lock"></i>
                              </span>
                            </div>
                            <input
                              type="password"
                              name="confirm_password"
                              id="confirmID"
                              placeholder="Cofirm Password"
                              class="form-control is-invalid"
                              required
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer bg-primary">
                  <div class="form-group">
                    <div
                      class="custom-control custom-checkbox custom-control-inline mt-1"
                    >
                      <input
                      type="checkbox"
                      name=""
                      class="custom-control-input is-invalid"
                      id="termsID"
                      required
                    />
                      <label
                        class="custom-control-label text-white"
                        for="termsID"
                      >
                        Accept <a href="#" class="text-warning">Terms</a> and
                        <a href="#" class="text-warning">Conditons</a>
                      </label>
                    </div>
                    <button type="submit" name="register" class="btn btn-info float-right">
                    Join VSM <i class="fas fa-user-plus"></i>
                  </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
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
    <!-- Scripts -->
    <script src="../assets/js/jquery-3.4.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>
