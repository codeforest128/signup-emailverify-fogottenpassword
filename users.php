<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/SMTP.php';

include('config.php');

Class users{
  function kddb_mail($txt_full_name, $txt_email, $txt_subject, $txt_message){
    $mail = new PHPMailer(true);
    $sys_email = 'donotreply@cagegroup.co.za';
    try {
      $mail->SMTPDEbug = 2;
      $mail->isSMTP();
      $mail->Host = 'mail.cagegroup.co.za';
      $mail->SMTPAuth = true;
      $mail->Username = $sys_email;
      $mail->Password = 'B5E2!@B4eH8{';
      $mail->SMTPSecure = 'ssl';
      $mail->Port = 465;

      $mail->sender = $sys_email;
      $mail->setFrom( $sys_email, 'African Scientists', FALSE);
      $mail->Subject = $txt_subject;


      $mail->addAddress($txt_email, $txt_full_name);//must be changed to admin's email
      $mail->isHTML(true);

      // $mail->Body = "<p>Hello Kagiso, Whats happening up in this. Random stuff here</p>";
      // $mail->AltBody = 'Hello Kagiso, Whats happening up in this. Random stuff here';

      $mail->Body = $txt_message;
      $mail->AltBody = $txt_message;

      $mail->send();
      return "success";
    } catch(Exception $e){
        return $mail->ErrorInfo;
    }
  }
  function register_new_user($email, $password, $role, $token){
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $query = "  
                 SELECT * FROM users  
                 WHERE email = '".$email."'AND flag = 1  
                  ";
    $result = mysqli_query($mysqli, $query);
    if(mysqli_num_rows($result) > 0)
    {
      return 0;
    }
    else {

      $query1 = "  
                 SELECT * FROM scientists  
                 WHERE EmailAddress = '".$email."' 
                  ";
      $result1 = mysqli_query($mysqli, $query1);
      if(mysqli_num_rows($result1) > 0){
          $row = mysqli_fetch_array($result1);
          $id = $row['id'];
          $flag = 0;
          $dbobj = $mysqli->prepare("INSERT INTO users (scientists_id, email, password, role, flag, token) VALUES (?, ?, ?, ?, ?, ?)");
          $dbobj->bind_param("isssis", $id , $email , $password, $role, $flag, $token);
          $dbobj->execute();
          $dbobj->close();
          return 1;
      }
      else {
          $query2 = "INSERT INTO scientists (EmailAddress) VALUES ('$email')";
          mysqli_query($mysqli, $query2);
          $insert = mysqli_insert_id($mysqli);
          $id = $insert;
          $flag = 0;
          $dbobj = $mysqli->prepare("INSERT INTO users (scientists_id, email, password, role, flag, token) VALUES (?, ?, ?, ?, ?, ?)");
          $dbobj->bind_param("isssis", $id , $email , $password, $role, $flag, $token);
          $dbobj->execute();
          $dbobj->close();
          return 1;
      }
    }
    // $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    // $flag = 0;
    // $dbobj = $mysqli->prepare("INSERT INTO users (email, password, role, flag) VALUES (?, ?, ?, ?)");
    // $dbobj->bind_param("sssi", $email , $password, $role, $flag);
    // $dbobj->execute();
    // $dbobj->close();
    // return 1;
  }
  function getToken($length){
     $token = "";
     $codeAlphabet = "abcdefghijklmnopqrstuvwxyz";
     $codeAlphabet.= "0123456789";
     $max = strlen($codeAlphabet); // edited

    for ($i=0; $i < $length; $i++) {
        $token .= $codeAlphabet[random_int(0, $max-1)];
    }

    return $token;
  }
  function settoken($email, $token){
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $query = "SELECT * FROM users WHERE email = '".$email."' AND flag = 1";
    $result = mysqli_query($mysqli, $query);
    if(mysqli_num_rows($result) > 0)
    {
      // print_r($email);
      $query1 = "UPDATE users SET token = '$token' WHERE email = '$email'";
      mysqli_query($mysqli, $query1);
      return 0;
    }
    else {
      return 1;
    }
  }
  function confirmcode($confirmcode, $email)
  {
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $query = "SELECT * FROM users WHERE token = '".$confirmcode."' AND email = '".$email."'";
    $result = mysqli_query($mysqli, $query);
    if(mysqli_num_rows($result) > 0)
    {
      return 0;
    }
    else {
      return 1;
    }
  }
  function reset_password($email, $password)
  {
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $query = "UPDATE users SET token = 0, password = '$password' WHERE email = '$email'";
    mysqli_query($mysqli, $query);
    return 0;
  }
}
 ?>
