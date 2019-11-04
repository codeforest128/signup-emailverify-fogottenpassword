<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>Sign Up</title>
      <?php include("includes/header.php"); ?>
      <script type="text/javascript" src="js/index_helper.js"></script>
      <!-- <script type="text/javascript" src="js/contact_helper.js"></script> -->
  </head>
  <body>
    <!-- Main page container start -->
    <?php
      include('users.php');
      $users = new users();
      $txt_full_name = 'Kagiso Malepe';
      if (isset($_POST['submit'])) {
        $txt_email = $_POST['reg_txt_email'];
        // $txt_email = "kagiso@cagegroup.co.za";
        // echo $_POST['reg_txt_password'];
        $txt_pwd = password_hash($_POST['reg_txt_password'], PASSWORD_DEFAULT);
        $txt_token = $users->getToken(10);
        $result = $users->register_new_user($txt_email, $txt_pwd, 'scientist', $txt_token);
        if($result == 0) {
            $msg = "your email has already registered";
        }
        if($result == 1) {
          $txt_subject = 'Confirmation African Scientists';
          $txt_message = '<p>Hi,<br>Welcome to the African Scientists Knowledge Directory<br>';
          $txt_message .= '<br>Click the link below to confirm your email<p>';
          // $txt_message .= '<a href="'.SITE_URL.'auth/'.$txt_token.'"><button>email confirm</button>';
          $txt_message .= '<a href="localhost/login/auth.php?email='.$txt_email.'&token='.$txt_token.'"><button>email confirm</button>';
          $users->kddb_mail($txt_full_name, $txt_email, $txt_subject, $txt_message);
          $msg = "successfuly registered, please confirm your email";
        }
      }
    ?>
    <div class="container-fluid">
      <!-- Top navigation bar start -->
      <?php include('includes/navbar.php'); ?>
      <!-- Top navigation bar ends here -->
      <!-- Top navigation bar ends here -->
      <!-- Grids container start -->
      <div class="row justify-content-center">
        <!-- <?php// include("includes/sidebar.php"); ?> -->
        <!-- Left grid starts here -->
        <div class="col col-md-aulto">

        </div>
        <!-- Left grid ends her -->
        <!-- Center Grid start -->
        <div class="col-8" style="max-width:30%;">
          <!-- Blank spaces -->
          <div class="row mt-5"></div>
          <div class="row mt-5"></div>
          <!-- Center title and contents in center start -->
          <div class="jumbotron">
            <h1 class="display-4">Sign Up</h1>
            <hr class="my-4">
            <form class="needs-validation" novalidate action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="text-center p-t-13 p-b-23 text-danger" style="font-size: 16px;">
                    <?php if (isset($msg)) echo $msg; ?>
                </div>
              <div class="row">
                <div class="col">
                  <label for="reg_bl_email">Email Address</label>
                  <input type="email" class="form-control" name="reg_txt_email" id="reg_txt_email" aria-describedby="emailHelp" placeholder="Enter your email address" value="">
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <label for="reg_bl_email">Password</label>
                  <input type="password" class="form-control" name="reg_txt_password" id="reg_txt_password" placeholder="Enter your password" value="">
                </div>
              </div>

              <div class="row">
                <div class="col">
                  <!-- start of reCAPTCHA -->
                  <div class="g-recaptcha" data-sitekey="6LcOAZ4UAAAAAPM5ZbTRD9kMLZieub4lU97umQZx"></div>
                  <!-- End of reCAPTCHA  -->
                  <button value="submit" name="submit" type="submit" id="reg_btn_send_email" class="btn btn-dark">Send confirmation email</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- Center grid ends here -->
        <!-- Right grid starts here -->
        <div class="col col-md-auto">

        </div>
        <!-- Right grid ends here -->
      </div>
      <!-- Grids container ends -->
    </div>
    <!-- Main page container ends -->
  </body>
</html>
