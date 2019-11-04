<?php
$fld_name = $_GET['fld_name'];
$fld_surname = $_GET['fld_surname'];
$fld_id = $_GET['fld_id'];

echo $fld_name."<br>".$fld_surname."<br>".$fld_id;
$srv = "";
$usr = "";
$pwd = "";
$db = "";

$con = mysqli_connect($srv, $usr, $pwd, $db);
if (!$con){
  die("Connection to $db failed!"."<br/>");
} else echo "successfully connected to database: ".$db."<br/>";

$sql = "INSERT INTO tbl_Person (col_firstname, col_surname, col_idnumber) VALUES ($fld_name, $fld_surname, $fld_id);";
$result = mysqli_query($con, $sql);
mysqli_close($con);
?>
