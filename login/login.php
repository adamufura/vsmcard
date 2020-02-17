<?php 

  session_start();

  include("../includes/header.php");
  include("../includes/functions.php");
	$connection = mysqli_connect('localhost', 'root', '', 'vsm');
	if (!$connection) {
		echo "failed";
  }

	if (isset($_POST['login'])) {

		$email = escape_string($_POST['email']);
    $password = escape_string($_POST['password']);

		$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $query = mysqli_query($connection, $sql);
    
    if(!$query){
      die(mysqli_error($connection));
    }

		while ($row = mysqli_fetch_assoc($query)) {
			$db_username = $row['email'];
      $db_password = $row['password'];
      $id = $row['id'];
      $first_name = $row['first_name'];
      $last_name = $row['last_name'];
      $name = $first_name . " " . $last_name;
      $phone_number = $row['phone'];
    }
    
    if ($email == $db_username && $password == $db_password) {


      $_SESSION['id'] = $id;
      $_SESSION['name'] = $name;
      $_SESSION['email'] = $db_username;
      $_SESSION['phone_number'] = $phone_number;

      header("Location: ../profile/my_profile.php");
    } else{
      $_SESSION['error'] = "Invalid Username or Password";

      header("Location: login.php");
    }
		
	}

?>

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
                  Welcome Back! Login VSM
                  <i class="fa fa-phone-volume fa-2x"></i>
                </div>
                <div class="card-body">
                  <div class="container">
                    <div class="row">
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
                              type="text"
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
                      <div class="col-lg-12">
                        <div class="form-group">
                          <!-- Login Button -->
                          <div class="input-group">
                            <input
                              type="submit"
                              name="login"
                              id=""
                              value="Log In VSM"
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
                    <a
                      href="../forgot_password/forgot_password.php"
                      class="alert-link float-right"
                      >Forgot Password</a
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
