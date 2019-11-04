<?php

	include('config.php');

	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	$email = $_GET['email'];
	$token = $_GET['token'];
	$query = "  
                 SELECT * FROM users  
                 WHERE email = '".$email."'AND token = '".$token."'  
                  ";
    $result = mysqli_query($mysqli, $query);
    if(mysqli_num_rows($result)>0)
    {
    	$sql = "DELETE  FROM users
    			WHERE email = '".$email."'";
    	mysqli_query($mysqli, $sql);
    	$row = mysqli_fetch_array($result);
    	$flag = 1;
    	$token = '0';
    	// $insert = "INSERT INTO users (scientists_id, email, password, role, flag, token) VALUES('$row['scientists_id']','$row['email']', '$row['password']', '$row['role']', '$flag', '$token')";
    	// mysqli_query($mysqli, $insert);
    	$dbobj = $mysqli->prepare("INSERT INTO users (scientists_id, email, password, role, flag, token) VALUES (?, ?, ?, ?, ?, ?)");
		$dbobj->bind_param("isssis", $row['scientists_id'] , $row['email'] , $row['password'], $row['role'], $flag, $token);
		$dbobj->execute();
		$dbobj->close();
		header("Location: login.php");
    }
?>