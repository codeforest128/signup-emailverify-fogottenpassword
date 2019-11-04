$(document).ready(function(){
  $("#btn_sign_in").on('click', function(){
    $.get("verify_captcha.php", function(client_key, status){
      $.ajax({
        url: "https://www.google.com/recaptcha/api/siteverify",
        data: {
          secret:6LcOAZ4UAAAAAPFGdf57pz_itML8wEpTjKXxeS3k,
          response: client_key  },
        dataType: "json",
        success: function(data){
          alert(data);
        }
      });
    });
  });
});
