
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>Home</title>
    <?php include("includes/header.php"); ?>
    <script type="text/javascript" src="js/index_helper.js"></script>
    </head>
  <body>
    <!-- Main page container start -->
    <div class="container-fluid">
      <!-- Top navigation bar start -->
      <?php include('includes/navbar.php'); ?>
      <!-- Top navigation bar ends here -->
      <!-- Grids container start -->
      <div class="row">
        <!-- Left grid starts here -->
        <?php include("includes/sidebar.php"); ?>
        <!-- Left grid ends her -->
        <!-- Center Grid start -->
        <div class="col-8" style="height: 720px; overflow: auto;">
          <!-- Blank spaces -->
          <div class="row mt-5"></div>
          <!-- Card for displaying expert -->
          <div class="card-deck">
            <div class="card border-info mb-3" style="max-width: 18rem;">
              <div class="card-header">John Doe</div>
              <div class="card-body">
                <h5 class="card-title">Biologist</h5>
                <p class="card-text">Organisation: ASSAF <br/>
                  Molecular Biology, DNA, Molecular Cloning
                </p>
                <a href="#" class="card-link">Read Bio</a>
                <a href="#" class="card-link">Get in Touch</a>
              </div>
            </div>
            <div class="card border-info mb-3" style="max-width: 18rem;">
              <div class="card-header">Jane Doe</div>
              <div class="card-body">
                <h5 class="card-title">Ornithologist</h5>
                <p class="card-text">Organisation: SANCOB <br/>
                  Bird Population, Conservation, Migration Patterns
                </p>
                <a href="#" class="card-link">Read Bio</a>
                <a href="#" class="card-link">Get in Touch</a>
              </div>
            </div>
            <div class="card border-info mb-3" style="max-width: 18rem;">
              <div class="card-header">Janie Doe</div>
              <div class="card-body">
                <h5 class="card-title">Space Physicist</h5>
                <p class="card-text">Organisation: SANSA<br/>
                  Whistlers, Space Weather, Solar Flaires, Aurorae
                </p>
                <a href="#" class="card-link">Read Bio</a>
                <a href="#" class="card-link">Get in Touch</a>
              </div>
            </div>
          </div>
          <!-- End of card for expert -->
          <!-- Center title and contents in center start -->
          <div class="jumbotron">
            <h1 class="display-4">African Scientists Knowledge Directory</h1>
            <hr class="my-4">
            <p class="lead"><strong>International Science Council Regional Office for Africa (ISC ROA)</strong></p>
<p class="lead">The International Science Council Regional Office for Africa (ISC ROA), formerly known as ICSU ROA, was established in September 2005 and is currently hosted by the Academy of Science of South Africa (ASSAf) in Pretoria, South Africa. <a href="about.php">Read More...</a>
</p>
          </div>
          <!-- Center title and contents in center start -->
          <!-- Slider starts here -->
          <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="css/images/1.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Research fields</h5>
                    <p>The directory lists researchers in numerous research fields.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="css/images/3.png" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Research professionals</h5>
                    <p>Professionals on our database can be contacted through the webpage after searching.</p>
                  </div>
                </div>
                <!-- <div class="carousel-item">
                  <img src="css/images/4.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Research professionals</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                  </div>
                </div> -->
              </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <!-- Slider ends here -->
        </div>
        <!-- Center grid ends here -->
        <!-- Right grid starts here -->
        <div class="col col-md-auto">

        </div>
        <!-- Right grid ends here -->
      </div>
      <!-- Grids container ends -->
      <hr>
    </div>
    <!---->
    <!-- Main page container ends -->
  </body>
</html>
