<!--
=========================================================
 Paper Dashboard 2 - v2.0.0
=========================================================

 Product Page: https://www.creative-tim.com/product/paper-dashboard-2
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/paper-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<?php

  ob_start();
  session_start();

  if(empty($_SESSION['email']))
  {
    echo "first,You must login";
    header("Location: ../../login.php");
  }

  include('../../config.php');

  $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  $scientists_id = $_SESSION['scientists_id'];
  $query = "SELECT * FROM scientists WHERE id = '".$scientists_id."'";
  $result = mysqli_query($mysqli, $query);
  $row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    KD User Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="../../index.php" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
        </a>
        <a href="../../index.php" class="simple-text logo-normal">
          HOME
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="">
              <i class="account_box"></i>
              <p style="color: #5078bA;">User Profile</p>
            </a>
          </li>
          <li class="">
            <a href="../../logout.php">
              <i class="account_box"></i>
              <p style="color: #5078bA;">LOG OUT</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" style="background-color: #343a40;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">User Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-sm">


</div> -->
      <div class="content">
        <div class="row">
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">

              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="../assets/img/user.png" alt="...">
                    <h5 class="title" style="color: #5078bA;"><?php echo $row['Name']." ".$row['Surname'];?></h5>
                  </a>
                  <p class="description">
                    @linkedinprofile
                  </p>
                </div>
                <p class="description text-center">
                  ""
                </p>
              </div>
              <div class="card-footer">
                <hr>
                <div class="button-container">
                  <div class="row">

                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Edit Profile</h5>
              </div>
              <div class="card-body">
                <form method="post" action="../../edit.php">
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" value="<?php echo $row['Name'];?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="surname" placeholder="Enter Surname" value="<?php echo $row['Surname'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Gender</label>
                        <select class="form-control" name="gender">
                          <option value=""  isabled>Select gender</option>
                          <?php if($row['Gender'] == 'Male') {;?>
                            <option value="Male" selected>Male</option>
                            <option value="Female">Female</option>
                            <option value="binary">Binary</option>
                          <?php }
                           elseif($row['Gender'] == 'Female') {;?>
                            <option value="Male">Male</option>
                            <option value="Female" selected>Female</option>
                            <option value="binary">Binary</option>
                          <?php }elseif($row['Gender'] == 'binary') {;?>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="binary" selected>Binary</option>
                          <?php } else {?>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="binary">Binary</option>
                          <?php }?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Age</label>
                        <input type="number" class="form-control" name="age" placeholder="Enter Age" value="<?php echo $row['Age'];?>">
                      </div>
                    </div>
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" name="password" placeholder="Change Password" value="<?php echo $_SESSION['password'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email Address" value="<?php echo $row['EmailAddress'];?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Alternative Email Address</label>
                        <input type="text" class="form-control" name="alteremail" placeholder="Alt Email Address" value="<?php echo $row['AltEmailAddress'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Organisation</label>
                        <input type="text" class="form-control" name="organisation" placeholder="Organisation Name" value="<?php echo $row['OrganisationName'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Department</label>
                        <input type="text" class="form-control" name="department" placeholder="Department Name" value="<?php echo $row['Department'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Affiliation</label>
                        <input type="text" class="form-control" name="affiliation" placeholder="Affiliation" value="<?php echo $row['Affiliation'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>ORCID</label>
                        <input type="text" class="form-control" name="orcid" placeholder="Enter ORCID" value="<?php echo $row['ORCID'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Region</label>
                        <input type="text" class="form-control" name="region" placeholder="Region" value="<?php echo $row['Region'];?>">
                        <select class="form-control" name="region">
                          <option value="" selected disabled>Select region</option>
                          <option value="Southern Africa">Southern Africa</option>
                          <option value="Eastern Africa">Eastern Africa</option>
                          <option value="Western Africa">Western Africa</option>
                          <option value="Northern Africa">Northern Africa</option>
                          <option value="Central Africa">Central Africa</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control" name="country" placeholder="Country" value="<?php echo $row['Country'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Research Focus</label>
                        <textarea class="form-control textarea" name="research"><?php echo $row['ResearchFocus'];?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Short Bio</label>
                        <textarea class="form-control textarea" name="shortbio"><?php echo $row['ShortBio'];?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-dark">Update Profile</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li>
                  <a href="http://assaf.org.za" target="_blank">ASSAF</a>
                </li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script> <i class="fa fa-heart heart">ASSAF</i>
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>
<?php
  if(!empty($_GET['flag']))
  {
    echo "<script> alert('successfully updated')</script>";
  }
?>
