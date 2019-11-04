
$(document).ready(function(){
  // console.log("Hello");
  //Request to elasticsearch on localhost
  // $.ajax({
  //   url: "search.php",
  //   dataType: "json",
  //   contentType: "application/json; charset=UTF-8",
  //   async: false,
  //   success: function(data){
  //     var d = data.hits.hits;
  //     $.each(d, function(index, value){
  //       var email = value._source.email;
  //     });
  //   }
  // });


  $("#btn_search").on('click', function(){
    var fld_search = $("#fld_search").val();
    $.ajax({
      url: "search.php",
      dataType: "json",
      data: {
        "fld_search": fld_search
      },
      contentType: "application/json; charset=UTF-8",
      type: "GET",
    //  async: true,
      success: function(data) {
        // var d = data.hits;
        // $.each(d, function(index, value){
        //   var email = value._source.email;
        //   console.log(email);
        // });


        for (var i=0; i<data.hits.total; i++){
          var val = data.hits.hits[i]._source;
          //var html = '<div class="card border-info mb-3" style="max-width: 18rem;"><div class="card-header">'+val.name+' '+val.surname+'</div><div class="card-body"><h5 class="card-title">'+val.researchfocus+'</h5><p class="card-text">Organisation: '+val.organisationname+' <br/>Department: '+val.department+'</p><a href="#" class="card-link">Read Bio</a><a href="#" class="card-link">Get in Touch</a></div</div>';
          // $(".card-deck").append(html);
          console.log(val.name);
        }
      }
    });

  });




  // $.ajax({
  //   url: "http://127.0.0.1:9200/bank/_search?q=*&sort=account_number:asc",
  //   dataType: "jsonp",
  //   contentType: "application/json; charset=UTF-8",
  //   type: "GET",
  //   async: false,
  //   success: function(data){
  //     alert(data)
  //   }
  // });
  // $.getJSON(
  //   "search.php",
  //   {
  //
  //   },
  //   function(data){
  //
  //   }
  // );
  // var request = new XMLHttpRequest()
  // request.open("GET", "127.0.0.1:9200/bank/_search?q=*&sort=account_number:asc&pretty", true )
  // request.onload = function(){
  //   var data = JSON.parse(this.response)
  //   alert(data)
  // }
  // request.send()
   // End of request
  $("#btn_sign_in").on('click', function(){
    $.get("verify_captcha.php", function(client_key, status){
      $.ajax({
        url: "https://www.google.com/recaptcha/api/siteverify",
        data: {
          secret:"6LcOAZ4UAAAAAPFGdf57pz_itML8wEpTjKXxeS3k",
          response: client_key  },
        dataType: "json",
        success: function(data){
          alert(data);
        }
      });
    });
  });

  // deck-cards handling here
  $(".card-deck").hide();

  // $("#fld_search").keyup(function(){
  //   $(".bd-example").hide();
  //   $(".jumbotron").hide();
  //   $(".card-deck").show();
  // });
  //just for demo, should be removed
  // if ($("fld_search").val() == "") {
  //   $(".bd-example").show();
  //   $(".jumbotron").show();
  // }



});
