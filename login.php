<?php
  ob_start();
  session_start();
?>
<?php 

      include('config.php');
          $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            
            if (!empty($_POST['email']) 
               && !empty($_POST['password'])) {
              $password = $_POST['password'];
               $query = "  
                 SELECT * FROM users  
                 WHERE email = '".$_POST["email"]."'  
                  ";
            $result = mysqli_query($mysqli, $query);
               if (mysqli_num_rows($result) > 0) {
                  $row = mysqli_fetch_array($result);
                  $password_hash = $row['password'];
                  $scientists_id = $row['scientists_id'];
                  if(password_verify($password, $password_hash))
                  {
                    if($row['flag'] == 1) {
                      $_SESSION['email'] = $_POST["email"];
                      $_SESSION['scientists_id'] = $scientists_id;
                      $_SESSION['password'] = $password;
                      $msg = 'You have entered valid use name and password';
                      header("Location: dashboard/user/user.php");
                    }
                    else {
                      $msg = 'Your email is not activated';
                    }
                  }
                  else
                  {
                    $msg = "your password is incorrect";
                  } 

               }else {
                  $msg = 'Invalid username or password!';
               }
            }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>Login</title>
      <?php include('includes/header.php'); ?>
  </head>
  <body>
    <!-- Main page container start -->
    <div class="container-fluid">
      <!-- Top navigation bar start -->
      <!-- Top navigation bar start -->
      <?php include('includes/navbar.php'); ?>
      <!-- Top navigation bar ends here -->
      <!-- Grids container start -->
      <div class="row justify-content-center">
        <!-- Left grid starts here -->
        <div class="col">
            <?php include("includes/sidebar.php"); ?>
        </div>
        <!-- Left grid ends her -->
        <!-- Center Grid start -->
        <div class="col-6">
          <!-- Blank spaces -->
          <div class="row mt-5"></div>
          <div class="row mt-5"></div>
          <!-- User login form start -->
          <div class="card card-login">
            <form class="form" method="post">
              <div class="card-header card-header-dark">
                <h4 class="card-title">Login</h4>
                <div class="social-line">
                  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-facebook-square"></i>
                  </a>
                  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-google-plus"></i>
                  </a>
                </div>
              </div>
              <p class="description text-center">Or Be Classical</p>
              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <input type="email" name="email" class="form-control" placeholder="Email...">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" name="password" class="form-control" placeholder="Password...">
                </div>
              </div>
              <div class="text-center p-t-13 p-b-23 text-danger" style="font-size: 16px;">
                  <?php if (isset($msg)) echo $msg; ?>
              </div>
              <div class="footer text-center">
                <button type="submit" class="btn btn-dark">Get Started</button>
              </div>
              <div class="text-center">
                <a href="reset-password.php">Fogot your password?</a>
              </div>
            </form>
          </div>
        </div>
        <!-- Center grid ends here -->
        <!-- Right grid starts here -->
        <div class="col">

        </div>
        <!-- Right grid ends here -->
      </div>
      <!-- Grids container ends -->
    </div>
    <!-- Main page container ends -->
  </body>
</html>
