<?php session_start();

  include("../includes/functions.php");

  if ($_SESSION['name'] == null) {
    header("Location: ../index.php");
  }
  if (isset($_GET['logout'])) {
    logout();
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Profile</title>
    <link
      rel="shortcut icon"
      href="../assets/images/vsm.png"
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
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/icons/css/all.css" />
    <link rel="stylesheet" href="../profile/assets/css/profile.css" />
    <!-- Scripts -->
    <script src="../assets/js/jquery-3.4.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
  </head>
  <body id="myBody">
    <header class="mb-5">
      <nav
        class="navbar navbar-expand-md bg-primary navbar-dark fixed-top text-center"
      >
        <!-- Brand -->
        <a class="navbar-brand logo" href="../index.html">
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
          <a class="navbar-brand">
            <img
              src="../assets/images/img_avatar3.png"
              alt="VSM"
              class="img-fluid rounded"
            />
          </a>
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
            <a class="navbar-brand" href="#">
              <img
                src="../assets/images/img_avatar3.png"
                alt="VSM"
                class="img-fluid rounded"
              />
            </a>
            <ul class="navbar-nav d-flex flex-row justify-content-center">
              <li class="nav-item">
                <span class="nav-link text-white">signed in as &nbsp;</span>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link btn btn-outline-info text-white dropdown-toggle"
                  href="#"
                  data-toggle="dropdown"
                  ><?php echo $_SESSION['name']; ?></a
                >
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Add Account</a>
                  <a class="dropdown-item" href="#">Switch Account</a>
                  <a class="dropdown-item" href="my_profile.php?logout">Log Out</a>
                </div>
              </li>
            </ul>
          </ul>
        </div>
      </nav>
    </header>
    <main class="">
      <div class="sidebar">
        <div class="list-group">
          <li
            class="list-group-item disabled text-primary text-uppercase text-center"
          >
            User Dashboard
            <div class="custom-control custom-switch">
              <input
                type="checkbox"
                class="custom-control-input"
                id="nightMode"
              />
              <label class="custom-control-label" for="nightMode"
                >Night Mode</label
              >
            </div>
          </li>
          <a
            href="../profile/my_profile.php"
            class="list-group-item list-group-item-action active"
            ><i class="fa fa-user"></i>&nbsp; My Profile</a
          >
          <a
            href="../contacts/contacts.php"
            class="list-group-item list-group-item-action"
            ><i class="fa fa-phone"></i>&nbsp; Contacts
            <span class="badge badge-pill badge-success">203</span></a
          >
          <a
            href="../message/messages.php"
            class="list-group-item list-group-item-action"
            ><i class="fas fa-sms"></i>&nbsp; Messages
            <span class="badge badge-pill badge-success">15</span></a
          >
          <a
            href="../call_logs/call_logs.php"
            class="list-group-item list-group-item-action"
            ><i class="fa fa-history"></i>&nbsp; Call Logs</a
          >
          <a
            href="../notifications/notifications.php"
            class="list-group-item list-group-item-action"
            ><i class="fa fa-bell"></i>&nbsp; Notification
            <span class="badge badge-pill badge-success">3</span></a
          >
          <a
            href="../settings/settings.html"
            class="list-group-item list-group-item-action"
            ><i class="fa fa-edit"></i>&nbsp; Settings</a
          >
          <a href="my_profile.php?logout" class="list-group-item list-group-item-action bg-danger"
            ><i class="fa fa-sign-out-alt"></i>&nbsp; Log Out</a
          >
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-3">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 col-12">
                  <div class="card mt-5 shadow">
                    <img
                      class="card-img-top"
                      src="../assets/images/img_avatar3.png"
                      alt="Card image"
                    />
                    <div class="card-body">
                      <h4 class="card-title">
                        <i class="fa fa-user"></i>&nbsp; <?php echo $_SESSION['name']; ?>
                      </h4>
                      <h6 class="card-title">
                        <i class="fa fa-mail-bulk"></i>&nbsp;
                         <?php echo $_SESSION['email']; ?>
                      </h6>
                      <h6 class="card-title">
                        <i class="fa fa-phone"></i>&nbsp;  <?php echo $_SESSION['phone_number']; ?>
                      </h6>
                    </div>
                    <div class="card-footer bg-primary">
                      <a href="#" class="btn btn-success btn-block"> Upgrade</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card mt-5 shadow">
                    <div class="card-header bg-primary">Details</div>
                    <div class="card-body">
                      <h5 class="card-title">
                        <span class="badge badge-success">My Social Links</span>
                      </h5>
                      <a href="#" class="facebook"
                        ><i class="fab fa-facebook"></i
                      ></a>
                      <a href="#" class="twitter"
                        ><i class="fab fa-twitter"></i
                      ></a>
                      <a href="#" class="google"
                        ><i class="fab fa-google"></i
                      ></a>
                      <a href="#" class="linkedin"
                        ><i class="fab fa-linkedin"></i
                      ></a>
                      <a href="#" class="youtube"
                        ><i class="fab fa-youtube"></i
                      ></a>
                      <h5 class="card-title">
                        <span class="badge badge-success"
                          >Status & Last Seen</span
                        >
                      </h5>
                      <h6>
                        Status:
                        <span class="badge badge-success"
                          >Active <i class="fa fa-dot-circle text-danger"></i
                        ></span>
                      </h6>
                      <h5 class="card-title">
                        <span class="badge badge-success">Invite Someone</span>
                      </h5>
                      <a href="#" class="btn btn-info"
                        >Invite &nbsp;<i class="fa fa-share"></i
                      ></a>
                    </div>
                    <div class="card-footer bg-primary">
                      <a href="my_profile.php?logout" class="btn btn-danger btn-block">Log Out</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Footer -->
    <footer class="mt-5"></footer>
  </body>
</html>
