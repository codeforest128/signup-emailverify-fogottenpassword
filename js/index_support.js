$(function  () {
  // var options = {
  //   valueNames: [ 'name', 'born' ]
  // };
  // var userList = new List('users', options);
  // $('#grid').hide();
  $('#myLayout').w2layout({
    name: 'myLayout',
    panels: [
      {type: 'top', size:'5%', content: '<div id="toolbar"></div>'},
      {type: 'right', size:'15%'},
      {type: 'main', size:'80%',content:'<div id="grid"></div>'},
      {type: 'bottom', size:'10%'}
    ]
  });

  $('#grid').w2grid({
      name: 'grid',
      header: 'List of Names',
      show: {
          toolbar: true,
          footer: true
      },
      columns: [
          { field: 'recid', caption: 'ID', size: '50px', sortable: true, attr: 'align=center' },
          { field: 'lname', caption: 'Last Name', size: '30%', sortable: true, resizable: true },
          { field: 'fname', caption: 'First Name', size: '30%', sortable: true, resizable: true },
          { field: 'email', caption: 'Email', size: '40%', resizable: true },
          { field: 'sdate', caption: 'Start Date', size: '120px', resizable: true },
      ],
      searches: [
          { field: 'lname', caption: 'Last Name', type: 'text' },
          { field: 'fname', caption: 'First Name', type: 'text' },
          { field: 'email', caption: 'Email', type: 'text' },
      ],
      sortData: [{ field: 'recid', direction: 'ASC' }],
      records: [
          { recid: 1, fname: 'John', lname: 'doe', email: 'jdoe@gmail.com', sdate: '4/3/2012' },
          { recid: 2, fname: 'Stuart', lname: 'Motzart', email: 'jdoe@gmail.com', sdate: '4/3/2012' },
          { recid: 3, fname: 'Jin', lname: 'Franson', email: 'jdoe@gmail.com', sdate: '4/3/2012' },
          { recid: 4, fname: 'Susan', lname: 'Ottie', email: 'jdoe@gmail.com', sdate: '4/3/2012' },
          { recid: 5, fname: 'Kelly', lname: 'Silver', email: 'jdoe@gmail.com', sdate: '4/3/2012' },
          { recid: 6, fname: 'Francis', lname: 'Gatos', email: 'jdoe@gmail.com', sdate: '4/3/2012' },
          { recid: 7, fname: 'Mark', lname: 'Welldo', email: 'jdoe@gmail.com', sdate: '4/3/2012' },
          { recid: 8, fname: 'Thomas', lname: 'Bahh', email: 'jdoe@gmail.com', sdate: '4/3/2012' },
          { recid: 9, fname: 'Sergei', lname: 'Rachmaninov', email: 'jdoe@gmail.com', sdate: '4/3/2012' },
          { recid: 20, fname: 'Jill', lname: 'Doe', email: 'jdoe@gmail.com', sdate: '4/3/2012' },
          { recid: 21, fname: 'Frank', lname: 'Motzart', email: 'jdoe@gmail.com', sdate: '4/3/2012' },
          { recid: 22, fname: 'Peter', lname: 'Franson', email: 'jdoe@gmail.com', sdate: '4/3/2012' },
          { recid: 23, fname: 'Andrew', lname: 'Ottie', email: 'jdoe@gmail.com', sdate: '4/3/2012' },
          { recid: 24, fname: 'Manny', lname: 'Silver', email: 'jdoe@gmail.com', sdate: '4/3/2012' },
          { recid: 25, fname: 'Ben', lname: 'Gatos', email: 'jdoe@gmail.com', sdate: '4/3/2012' },
          { recid: 26, fname: 'Doer', lname: 'Welldo', email: 'jdoe@gmail.com', sdate: '4/3/2012' },
          { recid: 27, fname: 'Shashi', lname: 'bahh', email: 'jdoe@gmail.com', sdate: '4/3/2012' },
          { recid: 28, fname: 'Av', lname: 'Rachmaninov', email: 'jdoe@gmail.com', sdate: '4/3/2012' }
      ]
  });

  $('#toolbar').w2toolbar({
  	name: 'toolbar',
  	items: [

      { type: 'button',  id: 'home',  caption: 'Home', icon: 'fa-home' },
  		{ type: 'button',  id: 'login',  caption: 'Login', icon: 'fa-home' },
      { type: 'spacer' }
  	]
  });

  var layout_height = $(window).height();
  $("#myLayout").css('height', layout_height+'px');
});
