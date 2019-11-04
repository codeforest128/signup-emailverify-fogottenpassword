$(document).ready(function(){
  $.ajax(
    url: "localhost:9200/_search?pretty",
    type: "GET",
    contentType: "application/json; charset=UTF-8",
    dataType: "json",
    data: {
       "_source":["name","surname","emailaddress","researchfocus","shortbio"],
       "query":{
          "multi_match" : {
             "query":"William",
             "fields":["surname","researchfocus"]
          }
       }
    },
    success: function(data){
      console.log(data);
    }
  );
  $.getJSON("")
});
