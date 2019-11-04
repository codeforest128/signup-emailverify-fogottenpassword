<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include("includes/header.php"); ?>
    <script type="text/javascript" src="js/research_field_helper.js"></script>
    <title>Research Field</title>
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
        <div class="col-8">
          <!-- Blank spaces -->

            <table id="grid"></table>
            <div id="pager"></div>
            <br>


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
