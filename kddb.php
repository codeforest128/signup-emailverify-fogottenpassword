<?php
  include('config.php');

  Class kddb{
      function connect(){
          $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Couldn't connect");
          return $conn;
      }

  }

  function getUserInfo($id) {
    $dbobj = new kddb();
    $query = mysqli_query($dbobj->connect(), "SELECT * FROM scientists WHERE id = '$id'");
    return mysqli_fetch_array($query);
  }
  function kddb_query($query){
    $dbobj = new kddb();
    $query = mysqli_query($dbobj->connect(), $query);
    return mysqli_fetch_array($query);
  }
  function getScientistsInfo() {
    $dbobj = new kddb();
    $result = mysqli_query($dbobj->connect(), "SELECT id, Name, Surname, OrganisationName, Department, ResearchFocus, Country, Title FROM scientists");
  //  $row = mysqli_fetch_array($result, MYSQLI_NUM);
  //  return $row;

    // $responce->page = 1;
    // $responce->total = 1;
    // $responce->records = 10;
    $i = 0;
    while($row = mysqli_fetch_assoc($result)){
      $response[$i]=array(
        $row['id'],
        $row['Name'],
        $row['Surname'],
        $row['OrganisationName'],
        $row['Department'],
        $row['ResearchFocus'],
        $row['Country'],
        $row['Title']
      );
      $i++;
    }
    return $response;
  }

  function auth($user, $pwd){
    session_start();
    $dbobj = new kddb();
    $result = mysqli_query($dbobj->connect(), "SELECT id, password FROM users WHERE email={$user}");
    $row = mysqli_fetch_assoc($result);

    $hashfordb = password_hash($pwd, PASSWORD_BCRYPT);
    $condition = password_verify($row['password'], $hashfordb);
    if ($condition) {
      $_SESSION['loggedin'] = TRUE;
  		//$_SESSION['name'] = $_POST['username'];
  		$_SESSION['id'] = $row['id'];
      return 1;
    } else {
      return 0;
      }
  }

 ?>
