<!DOCTYPE html>
<html>
<head>
    <title>W2UI Demo: grid-5</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="http://rawgit.com/vitmalina/w2ui/master/dist/w2ui.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://rawgit.com/vitmalina/w2ui/master/dist/w2ui.min.css" />
</head>
<body>

<div id="grid" style="width: 100%; height: 350px; overflow: hidden;"></div>

<script type="text/javascript">
$(function () {
    $('#grid').w2grid({
        name: 'grid',
        method: 'GET', // need this to avoid 412 error on Safari
        columns: [
            { field: 'lname', caption: 'Last Name', size: '30%', sortable: true },
            { field: 'fname', caption: 'First Name', size: '30%', sortable: true },
            { field: 'email', caption: 'Email', size: '40%', sortable: true },
            { field: 'sdate', caption: 'Start Date', size: '120px', sortable: true }
        ]
    });
    w2ui['grid'].load('data/list.json');
});
</script>

</body>
</html>
