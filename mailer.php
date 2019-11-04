<?php
  include('kddb.php');
  include('users.php');
  $txt_full_name = 'Full Name';
  $txt_email = 'email@example.com';
  $txt_subject = 'Subject';
  $txt_message = 'This is a message';
  $users = new users();
  $responce = $users->kddb_mail($txt_full_name, $txt_email, $txt_subject, $txt_message);
  echo $responce;
  // $txt_full_name = $_GET['name'];
  // $txt_email = $_GET['email'];
  // $txt_subject = $_GET['subject'];
  // $txt_message = $_GET['message'];
  //
  //
  // use PHPMailer\PHPMailer\PHPMailer;
  // use PHPMailer\PHPMailer\Exception;
  //
  // require 'PHPMailer/src/PHPMailer.php';
  // require 'PHPMailer/src/Exception.php';
  // require 'PHPMailer/src/SMTP.php';
  //
  // $mail = new PHPMailer(true);
  //
  // try {
  //   $mail->SMTPDEbug = 2;
  //   $mail->isSMTP();
  //   $mail->Host = 'mail.cagegroup.co.za';
  //   $mail->SMTPAuth = true;
  //   $mail->Username = 'donotreply@cagegroup.co.za';
  //   $mail->Password = 'B5E2!@B4eH8{';
  //   $mail->SMTPSecure = 'ssl';
  //   $mail->Port = 465;
  //
  //   $mail->sender = $txt_email;
  //   $mail->setFrom($txt_email, $txt_full_name, FALSE);
  //   $mail->Subject = $txt_subject;
  //
  //
  //   $mail->addAddress('kagiso@cagegroup.co.za', 'Kagiso Malepe');//must be changed to admin's email
  //   $mail->isHTML(true);
  //
  //   // $mail->Body = "<p>Hello Kagiso, Whats happening up in this. Random stuff here</p>";
  //   // $mail->AltBody = 'Hello Kagiso, Whats happening up in this. Random stuff here';
  //
  //   $mail->Body = "<p><strong>".$txt_full_name."</strong> (".$txt_email.") has sent you the message below:<br/>".$txt_message."</p>";
  //   $mail->AltBody = $txt_message;
  //
  //   $mail->send();
  //   var_dump($mail);
  //   echo json_encode("success")
  // } catch(Exception $e){
  //     echo json_encode($mail->ErrorInfo);
  // }
?>
