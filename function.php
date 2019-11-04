<?php
  include('kddb.php');
//  print_r(getUserInfo(2));
  echo json_encode(getScientistsInfo());
//  echo json_encode($data);
?>
