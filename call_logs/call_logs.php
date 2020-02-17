<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Call Logs</title>
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
      <nav class="navbar navbar-expand-md bg-primary navbar-dark fixed-top text-center">
        <!-- Brand -->
        <a class="navbar-brand" href="../index.php">
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
                  >adam_programmer</a
                >
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Add Account</a>
                  <a class="dropdown-item" href="#">Switch Account</a>
                  <a class="dropdown-item" href="#">Log Out</a>
                </div>
              </li>
            </ul>
          </ul>
        </div>
      </nav>
    </header>
    <main class="">
      <div class="sidebar">
        <div class="list-group ">
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
            class="list-group-item list-group-item-action"
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
          <a href="../call_logs/call_logs.php" class="list-group-item list-group-item-action active"
            ><i class="fa fa-history"></i>&nbsp; Call Logs</a
          >
          <a href="../notifications/notifications.php" class="list-group-item list-group-item-action"
            ><i class="fa fa-bell"></i>&nbsp; Notification
            <span class="badge badge-pill badge-success">3</span></a
          >
          <a href="../settings/settings.php" class="list-group-item list-group-item-action"
            ><i class="fa fa-edit"></i>&nbsp; Settings</a
          >
          <a href="#" class="list-group-item list-group-item-action bg-danger"
            ><i class="fa fa-sign-out-alt"></i>&nbsp; Log Out</a
          >
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 offset-lg-3 offset-sm-3">
            <div class="card mt-4">
              <!-- Message header -->
              <div class="card-header">
                Call Logs
                <span class="float-right"
                  >Missed Calls
                  <span class="badge badge-pill badge-danger">2</span>
                </span>
                <!-- Search Bar -->
                <form>
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Search Call Logs"
                    />
                    <div class="input-group-append">
                      <button class="btn btn-primary">Search</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="card-body">
                <!-- message content -->
                <div class="list-group">
                  <a
                    href="#"
                    class="list-group-item list-group-item-action list-group-item-secondary"
                  >
                    <div class="media border">
                      <img
                        src="../assets/images/img_avatar2.png"
                        alt="John Doe"
                        class="mr-3 mt-3 rounded-circle"
                        style="width:60px;"
                      />
                      <div class="media-body">
                        <h4>
                          Adam Suleiman
                          <small
                             class="float-right"><i class="small">02:24PM Dec 19, 2019</i></small
                          >
                        </h4>
                        <p>
                          <i>Dur: 2 Min 02 Secs</i>
                          <small class="float-right">
                              <i class="fa fa-phone-alt fa-2x text-success"></i>
                          </small>
                        </p>
                      </div>
                    </div>
                  </a>
                  <a
                    href="#"
                    class="list-group-item list-group-item-action list-group-item-secondary"
                  >
                    <div class="media border">
                      <img
                        src="../assets/images/img_avatar3.png"
                        alt="John Doe"
                        class="mr-3 mt-3 rounded-circle"
                        style="width:60px;"
                      />
                      <div class="media-body">
                        <h4>
                          Suleiman Adam
                          <span
                            class="badge badge-danger badge-pill float-right"
                            >2</span
                          >
                          <small class="float-right"><i class="small">12:00AM 1 FEB 2020</i></small>
                        </h4>
                        <p>
                          <i>Dur: 02 Secs</i>
                          <small class="float-right">
                              <i class="fa fa-phone-alt fa-2x text-danger"></i>
                          </small>
                        </p>
                      </div>
                    </div>
                  </a>
                  <a
                    href="#"
                    class="list-group-item list-group-item-action list-group-item-secondary"
                  >
                    <div class="media border">
                      <img
                        src="../assets/images/student.png"
                        alt="John Doe"
                        class="mr-3 mt-3 rounded-circle"
                        style="width:60px;"
                      />
                      <div class="media-body">
                        <h4>
                          Abdul Ahmad
                          <small
                             class="float-right"><i class="small">02:24PM Dec 19, 2019</i></small
                          >
                        </h4>
                        <p>
                          <i>Dur: 2 Min 02 Secs</i>
                          <small class="float-right">
                              <i class="fa fa-phone-alt fa-2x text-success"></i>
                          </small>
                        </h4>
                        
                      </div>
                    </div>
                  </a>
                  <a
                    href="#"
                    class="list-group-item list-group-item-action list-group-item-secondary"
                  >
                    <div class="media border">
                      <img
                        src="../assets/images/team.jpg"
                        alt="John Doe"
                        class="mr-3 mt-3 rounded-circle"
                        style="width:60px;"
                      />
                      <div class="media-body">
                        <h4>
                          Customer Care
                          <small
                             class="float-right"><i class="small">02:24PM Dec 19, 2019</i></small
                          >
                        </h4>
                        <p>
                          <i>Dur: 1 Hour 2 Min 02 Secs</i>
                          <small class="float-right">
                              <i class="fa fa-phone-alt fa-2x text-success"></i>
                          </small>
                      </div>
                    </div>
                  </a>               
                </div>
              </div>
              <div class="card-footer">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-6">
                      <!-- Message Footer -->
                <span class=""
                  >View More Messages
                  <button class="btn btn-primary" type="button">
                    <i class="fa fa-reply"></i></button
                ></span>
                    </div>
                    <div class="col-lg-6">
                      <span class="badge badge-dan">
                  <button
                    class="btn btn-light btn-lg"
                    type="button"
                  >Clear Logs
                    <i class="fa fa-random text-danger"></i>
                  </button>
                </span>
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
