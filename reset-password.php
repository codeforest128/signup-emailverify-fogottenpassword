<?php
  ob_start();
  session_start();
?>
<?php 
      include('users.php');
      $users = new users();
      $txt_full_name = 'Kagiso Malepe';
      if(isset($_POST['submit']))
      {
        if(isset($_POST['email'])){
          $email = $_POST['email'];
          $token = $users->getToken(5);
          $result = $users->settoken($email, $token);
          if($result == 0){
            $txt_subject = 'Confirmation African Scientists';
            $txt_message = '<p>Hi,<br>Welcome to the African Scientists Knowledge Directory<br>';
            $txt_message .= '<br>Enter below Confirm Code in your page<p>';
            // $txt_message .= '<a href="'.SITE_URL.'auth/'.$txt_token.'"><button>email confirm</button>';
            $txt_message .= '<h2>'.$token.'</h2>';
            $users->kddb_mail($txt_full_name, $email, $txt_subject, $txt_message);
            $confirm = 1;
            $msg = "successfuly sent, please enter your confirmcode";
          }
          else {
            $msg = "your email is not registered user.first please sign up.";
          }
        }
        if(isset($_POST['confirmcode']))
        {
          $email = $_POST['email1'];
          // print_r($email);
          $confirmcode = $_POST['confirmcode'];
          $result = $users->confirmcode($confirmcode, $email);
          if($result == 0){
            $confirm = 1;
            $reset = 1; 
          }
          if($result == 1){
            $confirm = 1;
            $msg = "incorrect confirm code";
          }
        }
        if(isset($_POST['password']))
        {
          $password = $_POST['password'];
          $password1 = $_POST['password1'];
          $email = $_POST['email2'];
          $password_hash = password_hash($password, PASSWORD_DEFAULT);
          if($password == $password1)
          {
            $users->reset_password($email, $password_hash);
            header("Location: login.php");
          }
          else {
            $confirm = 1;
            $reset = 1;
            $msg = "your confirm password doesn't match with confirm password";
          }
        }
      }

      
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>reset password</title>
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
                <h4 class="card-title">Reset your password</h4>
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
              <?php if(!isset($confirm)) {?>
                <p class="description text-center">Please enter your Email so we can send you an email to reset your password.</p>
              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <input type="email" name="email" class="form-control" placeholder="Email..." required>
                </div>
              </div>
              <?php }?>
              <?php if(isset($confirm)) {?>
                <?php if(!isset($reset)) {?>
                <p class="description text-center">Please enter your correct confirmcode so we can reset your password.</p>
                <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">account_circle</i>
                    </span>
                  </div>
                  <input type="text" name="confirmcode" class="form-control" placeholder="Enter your Confirm Code" required>
                  <input type="hidden" name="email1" class="form-control" value="<?php echo $email;?>">
                </div>
              </div>
              <?php }?>
              <?php if(isset($reset)) {?>
                <p class="description text-center">Please enter your password and confirm password</p>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" name="password" class="form-control" placeholder="New Password" required>
                  <input type="hidden" name="email2" class="form-control" value="<?php echo $email;?>">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" name="password1" class="form-control" placeholder="Confirm Password" required>
                </div>
              <?php }?>
              <?php }?>
              <div class="text-center p-t-13 p-b-23 text-danger" style="font-size: 16px;">
                  <?php if (isset($msg)) echo $msg; ?>
              </div>
              <div class="footer text-center">
                <button value="submit" name="submit" type="submit" class="btn btn-dark">Submit</button>
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
