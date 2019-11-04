<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>Admin</title>
      <link rel="stylesheet" href="css/bootstrap.min.css"/>
      <link rel="stylesheet" href="css/master.css">
      <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="js/popper.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/tooltip.min.js"></script>
      <script type="text/javascript" src="https://www.google.com/recaptcha/api.js" async defer></script>
      <script type="text/javascript" src="js/index_helper.js"></script>
  </head>
  <body>
    <!-- Main page container start -->
    <div class="container-fluid">
      <!-- Top navigation bar start -->
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.php">KD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(Current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact </a>
            </li>
            <li class="nav-item">
                <input class="form-control mr-sm-2" type="search" id="fld_search" placeholder="Enter search criteria here" aria-label="Search">
            </li>
            <li class="nav-item">
              <button type="submit" id="btn_search" class="btn btn-dark">Search</button>
            </li>
          </ul>
        </div>
          <!-- Login starts -->
          <form class="form-inline my-2 my-lg-0" action="index.php" method="post" id="frm_search">
            <button class="btn btn-dark" type="submit" name="btn_login">Sign Out</button>
          </form>
          <!-- Login ends here -->
        </div>
      </nav>
      <!-- Top navigation bar ends here -->
      <!-- Grids container start -->
      <div class="row justify-content-center">
        <!-- Left grid starts here -->
        <div class="col col-md-auto">

        </div>
        <!-- Left grid ends her -->
        <!-- Center Grid start -->
        <div class="col-8">
          <!-- Blank spaces at the top of center page -->
          <div class="row mt-5"></div>
          <div class="row mt-5"></div>
          <!-- Center title and contents in center start -->
          <div class="jumbotron">
            <h1 class="display-4">Admin page</h1>
            <hr class="my-4">
            <div class="alert alert-danger" role="alert">
              Please note that this page is only limited to users with administrative rights. Changes made on here shall affect the entire metadata.
            </div>
          </div>
          <!-- Center title and contents in center start -->
          <!-- Start of admin page option cards -->
          <div class="row">
          <div class="col-sm">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Add new member</h5>
                <p class="card-text">Click here to add a new member to the knowledge directory.</p>
                <a href="#" class="btn btn-outline-secondary">Add</a>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Edit member details</h5>
                <p class="card-text">Click here to update or change details of an existing member.</p>
                <a href="#" class="btn btn-outline-secondary">Edit</a>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Remove existing member</h5>
                <p class="card-text">Click here to remove a member from the knowledge directory.</p>
                <a href="#" class="btn btn-outline-secondary">Remove</a>
              </div>
            </div>
          </div>
        </div>
        <!-- End of admin page option cards -->


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
