$(document).ready(function(){

  $("#grid").jqGrid({
      rowNum: 20,
      rowList: [10,20,50,100],
      regional: "en",
      sortname: "id",
      sortorder: "asc",
      datatype: "local",
      height: 250,
      pager: '#pager',
      loadonce: true,
      viewrecords: true,
      colNames: ["ID", "Name", "Organisation", "Department", "Research Focus", "Country"],
      colModel: [
        { name: "id", index: "id", width: 60, sorttype: "int", hidden: true},
        { name: "name", index: "name", width: 200, sorttype: "text"},
        { name: "organisation", index: "organisation", width: 80, sorttype: "text"},
        { name: "department", index: "department", width: 150, sorttype: "text"},
        { name: "research", index: "research", width: 150, sorttype: "text"},
        { name: "country", index: "country", width: 80, sorttype: "text"}
      ]//,
      //caption: "Table",
      // ondblClickRow: function(rowid,iRow,iCol,e){alert('double clicked');}
  });

  var grid_data = [];
  $.ajax({
    url: "function.php",
    dataType: "json",
    type: "GET",
    contentType: "application/json; charset=UTF-8",
    success: function(data){
      data.forEach(function(value){
        grid_data.push(
          {
            id: value[0],
            name: value[7]+" "+value[1]+" "+value[2],
            organisation: value[3],
            department: value[4],
            research: value[5],
            country: value[6]}
        );
      });
      $("#grid").jqGrid('setGridParam', { data: grid_data});
      $("#grid").trigger('reloadGrid');
    },
    error: function(err){

    }
  });


  $("#grid").jqGrid("filterToolbar", {defaultSearch: "cn", stringResult: true, searchOnEnter: false });
  //

  //
  // for (var i = 0; i <= mydata.length; i++) {
  //     $("#grid").jqGrid('addRowData', i + 1, mydata[i]);
  // }
});
