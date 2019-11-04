<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>Contact Us</title>
      <?php include("includes/header.php"); ?>
      <script type="text/javascript" src="js/index_helper.js"></script>
      <script type="text/javascript" src="js/contact_helper.js"></script>
  </head>
  <body>
    <!-- Main page container start -->
    <div class="container-fluid">
      <!-- Top navigation bar start -->
      <?php include('includes/navbar.php'); ?>
      <!-- Top navigation bar ends here -->
      <!-- Top navigation bar ends here -->
      <!-- Grids container start -->
      <div class="row justify-content-center">
        <?php include("includes/sidebar.php"); ?>
        <!-- Left grid starts here -->
        <div class="col col-md-auto">

        </div>
        <!-- Left grid ends her -->
        <!-- Center Grid start -->
        <div class="col-8">
          <!-- Blank spaces -->
          <div class="row mt-5"></div>
          <div class="row mt-5"></div>
          <!-- Center title and contents in center start -->
          <div class="jumbotron">
            <h1 class="display-4">Get in touch</h1>
            <hr class="my-4">
            <form class="needs-validation" novalidate action="" method="POST">
              <div class="row">
                <div class="col">
                  <label for="lbl_firstname">Full name</label>
                  <input type="text" class="form-control" id="txt_full_name" placeholder="Enter your full name">
                  <!-- <div class="invalid-feedback">
                    Enter first name!
                  </div> -->
                </div>
                <!-- <div class="col">
                  <label for="lbl_lastname">Last name</label>
                  <input type="text" class="form-control" id="lbl_lastname" placeholder="Last name">
                  <div class="invalid-feedback">
                    Enter last name!
                  </div>
                </div> -->
              </div>
              <div class="row">
                <div class="col">
                  <label for="lbl_email">Email Address</label>
                  <input type="email" class="form-control" id="txt_email" aria-describedby="emailHelp" placeholder="Enter your email address" value="">
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <label for="lbl_subject">Subject/ Research Interest</label>
                  <input type="text" class="form-control" id="txt_subject" aria-describedby="emailHelp" placeholder="Enter your subject here" value="">
                </div>
              </div>
              <div class="row">
                <div class="col">
                   <label for="lbl_message">Message</label>
                   <textarea class="form-control" id="txt_message" placeholder="Enter message here" required></textarea>
                   <!-- <div class="invalid-feedback">
                     Enter a message in the textarea please!
                   </div> -->
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <!-- start of reCAPTCHA -->
                  <div class="g-recaptcha" data-sitekey="6LcOAZ4UAAAAAPM5ZbTRD9kMLZieub4lU97umQZx"></div>
                  <!-- End of reCAPTCHA  -->
                  <button type="submit" id="btn_send_email" class="btn btn-dark">Send email</button>
                  <button type="button" id="btn_clear_form" class="btn btn-dark">Clear form</button>
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
