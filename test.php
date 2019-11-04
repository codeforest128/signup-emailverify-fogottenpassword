<?php //echo phpinfo();

//check if user is subscribed to newsletter or list id: 3f158260a6. in Mailchimp
// Can check other posts by changing the list_id or the url
// Echoes 404 if not else Echoes subscribed
  //
  // if (isset($_GET['user_email'])){
  //
  // }
  // '{
  //    "_source":["name","surname","emailaddress","researchfocus","shortbio"],
  //    "query":{
  //       "multi_match" : {
  //          "query":"William",
  //          "fields":["surname","researchfocus"]
  //       }
  //    }
  // }';
  // $post = '{
  //    "_source":["firstname","lastname","email","city"],
  //    "query":{
  //       "multi_match" : {
  //          "query":"Opal",
  //          "fields":["lastname","firstname"]
  //       }
  //    }
  // }';
//   //search one field
//   $post = '{
//    "query":{
//       "match" : {
//          "name":"Burns"
//       }
//    }
// }';
//
//   $curl = curl_init();
//   $headers[] = 'Content-Type: application/json';
//   curl_setopt_array($curl, [
//     CURLOPT_RETURNTRANSFER => 1,
//     CURLOPT_URL => 'http://127.0.0.1:9200/scientists/_search?q=CSIR&pretty',
//     CURLOPT_FOLLOWLOCATION => true,
//     CURLOPT_MAXREDIRS => 3,
//     CURLOPT_CUSTOMREQUEST => 'GET',
//     CURLOPT_HTTPHEADER => $headers,
//     CURLOPT_POSTFIELDS => $post
//   ]);
//
//   $result = curl_exec($curl);
//
//   if (curl_errno($curl)) {
//       echo 'Error:' . curl_error($curl);
//       echo json_encode('0');
//   }else {
//     //echo json_encode($result);
//     echo json_encode($result);
//   }
//
//   curl_close($curl);

// include('users.php');
// //if(isset($_GET['submit'])){
//   $users = new users();
//   $txt_full_name = 'Kagiso Malepe';
//   $txt_email = $_GET['reg_txt_email'];
//   // $txt_email = "kagiso@cagegroup.co.za";
//   $txt_subject = 'Confirmation African Scientists';
//   $txt_message = '<p>Hi,<br>Welcome to the African Scientists Knowledge Directory<br>Click the link below to confirm your email<p>';
//   $users->kddb_mail($txt_full_name, $txt_email, $txt_subject, $txt_message);
// //}
  include('users.php');
  $users = new users();
  $txt_pwd = password_hash('password', PASSWORD_BCRYPT);
  $txt_email = "kagiso@cagegroup.co.za";
  $users->register_new_user($txt_email, $txt_pwd, 'scientist');
?>
