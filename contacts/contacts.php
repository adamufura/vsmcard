<?php 

session_start();

$connection = mysqli_connect('localhost', 'root', '', 'vsm');

$id = $_SESSION['id'];

$sql = "SELECT * FROM contacts WHERE owner = $id ";
$all_contact_query = mysqli_query($connection, $sql);

if (!$all_contact_query) {
  die(mysqli_error($connection));
}

if(isset($_POST['add'])){

  $name = $_POST['name'];
  $number = "+234" . $_POST['number'];

  $sql = "INSERT INTO contacts (numbers, name, owner) VALUES('$number', '$name', $id)";
  $query = mysqli_query($connection, $sql);
  if (!$query) {
    die(mysqli_error($connection));
  }
  header("Location: contacts.php");
}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>My Contacts</title>
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
  <body>
    <header class="mb-5">
      <nav
        class="navbar navbar-expand-md bg-primary navbar-dark fixed-top text-center"
      >
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
                  ><?php echo $_SESSION['name']; ?></a
                >
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Add Account</a>
                  <a class="dropdown-item" href="#">Switch Account</a>
                  <a class="dropdown-item" href="../profile/my_profile.php?logout">Log Out</a>
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
            class="list-group-item list-group-item-action active"
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
            href="../settings/settings.php"
            class="list-group-item list-group-item-action"
            ><i class="fa fa-edit"></i>&nbsp; Settings</a
          >
          <a href="../profile/my_profile.php?logout" class="list-group-item list-group-item-action bg-danger"
            ><i class="fa fa-sign-out-alt"></i>&nbsp; Log Out</a
          >
        </div>
      </div>
      <!-- Contacts -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-9 offset-2">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 ">
                  <div class="card mt-4 shadow contactDetailsCard">
                    <div class="card-header">Contact Details</div>
                    <div class="card-body">
                      Total:
                      <span class="badge badge-success">203 Contacts</span>
                      <div class="custom-control custom-switch">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="switch1"
                        />
                        <label class="custom-control-label" for="switch1"
                          >Show contacts Email</label
                        >
                      </div>
                      <h5 class="card-title">Sync My Contacts</h5>
                      <button class="btn btn-primary btn-block">
                       <a href="sync_contacts" style="text-decoration: none;
                       color: #fff;">Sync Contacts</a>
                      </button>
                      <span class="d-block small"
                        >Last Sync: 29 / Dec/ 2019</span
                      >

                    </div>
                    <a href="contacts.php?add">
                    <button class="btn btn-success">Add New Contact</button>
                    </a>
                      <?php 
                          if (isset($_GET['add'])) {
                      ?>
                      <form action="../contacts/contacts.php" method="POST">
                          <label for="Name">Contact name</label>
                            <input type="text" name="name" id="">
                          <label for="Name">Contact name</label>
                            <input type="text" name="number" id="">
                          <input type="submit" name="add" value="add contact">
                        </form>
                      <?php } ?>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="card mt-4 shadow contactsCard">
                    <div class="card-header">
                      Contacts
                      <form>
                        <div class="input-group">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Search Contacts"
                          />
                          <div class="input-group-append">
                            <button class="btn btn-primary">Search</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="card-body">
                      <!-- contacts here -->
                      <!-- Contact One -->
                      <?php 
                        while ($row = mysqli_fetch_assoc($all_contact_query)) {
                          $name = $row['name'];
                          $number = $row['numbers'];
                      
                      ?>
                        <div class="media border p-2">
                          <img
                            src="../assets/images/img_avatar3.png"
                            alt=""
                            class="mr-3 mt-3 rounded-circle"
                            style="width:60px;"
                          />

                          <div class="media-body">
                            <h4><?php echo $name; ?></h4>
                            <p><?php echo $number; ?></p>
                            <div class="d-flex flex-wrap">
                              <div>
                                <button class="card-link btn btn-primary">
                                  Call
                                </button>
                              </div>
                              <di>

                              <a href="../msg/msg.php?number=<?php echo $number ?>">
                                <button class="card-link btn btn-success">
                                  Message 
                                </button></a>
                              </di>
                              <div>
                                <button class="card-link btn btn-danger">
                                  View Profile
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>

                      <?php }?>
                      
                      <!-- Contact End -->
                    </div>
                    <div class="card-footer text-center">
                      <span class=""
                        >Show More Contacts
                        <button class="btn btn-primary">
                          <i class="fa fa-reply"></i></button
                      ></span>
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
