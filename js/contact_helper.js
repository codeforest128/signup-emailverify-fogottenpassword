$(document).ready(function(){
  console.log("Contact Us Page");
  $("#$txt_email").css("border","1px solid #28a745");
  // error checking for name
  $("#txt_full_name").on('keypress', function(){
    if ($("#txt_full_name").val() == ""){
      console.log("Name invalid");
    } else {
      console.log("Name ok");
    }
  });
  // Check if email construction is valid.
  function validateEmail(e){
    var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(e);
  }
  // Error checking for email
  $("#txt_email").on('keypress', function(){
    if (validateEmail($("#txt_email").val())){
      console.log("Email ok");
    } else {
      console.log("Email invalid");
    }
  });

  $("#txt_subject").on('keypress', function(){
    if ($("#txt_subject").val() == ""){
      console.log("Subject invalid");
    } else {
      console.log("Subject ok");
    }
  });

  $("#txt_message").on('keypress', function(){
    if ($("#txt_message").val() == ""){
      console.log("Message invalid");
    } else {
      console.log("Message ok");
    }
  });

  // error checkig for subject
  // error checking for message
  $("#btn_send_email").on('click', function(){
    var txt_full_name = ($("#txt_full_name").val()).trim();
    var txt_email = ($("#txt_email").val()).trim();
    var txt_subject = ($("#txt_subject").val()).trim();
    var txt_message = $("#txt_message").val();

    $.ajax({
      url: "mailer.php",
      dataType: "json",
      contentType: "application/json; charset=UTF-8",
      async: true,
      data: {name: txt_full_name, email: txt_email, subject: txt_subject, message: txt_message},
      success: function(data){
        alert(data);
      }
    });

  })

});
