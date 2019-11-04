<?php
echo '
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="index.php">KD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="home">Home <span class="sr-only">(Current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about">About </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact">Contact </a>
      </li>
      <li class="nav-item">
          <input class="form-control mr-sm-2" type="search" id="fld_search" placeholder="Search for experts here" aria-label="Search">
      </li>

      <li class="nav-item">
        <!-- <button type="submit" id="btn_search" class="btn btn-dark">Search</button> -->
        <button id="btn_search" type="submit" class="btn btn-white btn-just-icon btn-round">
            <i class="material-icons">search</i>
        </button>
      </li>
    </ul>
  </div>
    <!-- Login starts -->
    <form class="form-inline my-2 my-lg-0" action="sign-in" method="post" id="frm_search">
      <button class="btn btn-dark" type="submit" id="btn_login">Login</button>
    </form>
    <form class="form-inline my-2 my-lg-0" action="sign-up" method="post" id="frm_search">
      <button class="btn btn-dark" type="submit" id="btn_sign_up">Sign Up</button>
    </form>
    <!-- Login ends here -->
  </div>
</nav>
';
?>
