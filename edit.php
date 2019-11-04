<?php
	ob_start();
	session_start();
	if(empty($_SESSION['email']))
	{
		header('Location: login.php');
	}
	
	include('config.php');

	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	$id = $_SESSION['scientists_id'];
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$alteremail = $_POST['alteremail'];
	$organisation = $_POST['organisation'];
	$department = $_POST['department'];
	$affiliation = $_POST['affiliation'];
	$orcid = $_POST['orcid'];
	$region = $_POST['region'];
	$country = $_POST['country'];
	$research = $_POST['research'];
	$shortbio = $_POST['shortbio'];

	$query = "UPDATE scientists SET Name = '$name', Surname = '$surname', Gender = '$gender', Age ='$age', EmailAddress = '$email', AltEmailAddress = '$alteremail', OrganisationName = '$organisation', Department = '$department', Affiliation = '$affiliation', ORCID = '$orcid', Region = '$region', Country = '$country', ResearchFocus = '$research', ShortBio = '$shortbio' WHERE id = $id";
	mysqli_query($mysqli, $query);

	// echo "<script> alert('successfully updated')</script>";
	header("Location: dashboard/user/user.php?flag=1");

?>