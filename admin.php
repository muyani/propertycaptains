<html>
<?php 
    require_once("auth.php");
    require_once('connection.php');
	require_once('datalink.php');
	
?>
<html>
<html lang="en">
<head>
<meta charset="utf8">
<title>
Welcome to the admin panel
</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  <script src="js/jquery-3.0.0.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.3/moment-2.18.1/dt-1.10.16/b-1.4.2/sl-1.2.3/datatables.min.css">
		<link rel="stylesheet" type="text/css" href="css/generator-base.css">
		<link rel="stylesheet" type="text/css" href="css/editor.dataTables.min.css">

		<script type="text/javascript" charset="utf-8" src="https://cdn.datatables.net/v/dt/jqc-1.12.3/moment-2.18.1/dt-1.10.16/b-1.4.2/sl-1.2.3/datatables.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="js/dataTables.editor.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="js/table.customers1.js"></script>
  
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"></link>
</head>
<body id="websitebody">
<div id="bodyDiv">
<p style="float:left"><a style="display:inline-block"href="index.php" >Home</a></p>
<h1 style="margin:10">Welcome to the admin panel</h1>
<div style="padding:50;text-align:center" class="row">
<a href="properties/properties.php">
<div id="propertyButton" class="well btn col-sm-4">
<h1>Properties</h1>
</div>
</a>
<div class="col-xs-4">
</h1></h1>
</div>
<a href="customers1.php">
<div id="propertyButton" class="well btn col-sm-4">
<h1>Customers</h1>
</div>
</a>
</div>
<div style="padding:50" class="row">
<div class="panel panel-success col-sm-12">
<hr style="background-color:green"></hr>
<h1 style="">Picture Manager</h1>
<form id="picForm" action="upload.php" method="post" enctype="multipart/form-data">
   	<div class=" col-sm-4 form-group">
	<label for ="fileToUpload">Please choose a picture </p>
    <input class="form-control" id="fileUpload" type="file" name="fileToUpload" id="fileToUpload" class="image" required>
	<div id="imagepreview"><image class="img img-thumbnail" src="#" id="thumbPic"></image></div>
	</div>
	<style>
	#imagePreview {
    width: auto;
    height: auto;
    background-position: center center;
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
    }
	</style>
	<div class="col-sm-4 form-group">
	<label for= "galleryId"> Enter property name:</label>
	<select class="form-control" name="galleryId">
	<?php
	$query="select * from gallery";
	databaseN($query,$bd,'galleryId');
	?>
	</select> 
	</div>
	<div class="col-sm-4 form-group">
	<label for="pictureSelected">Picture For</label>
	<select class="form-control" name="pictureSelected">
	<option value="pic1">Main View</option>
	<option value="pic2">Entrance</option>
	<option value="pic3">Living Room</option>
	<option value="pic4">Kitchen</option>
	<option value="pic5">Bedroom</option>
	<option value="pic6">Bathroom</option>
	<option value="pic7">Toilet</option>
	<option value="pic8">Back</option>
	<option value="pic9">Parking lot</option>
	</select>
	</div>
	<div class=" col-sm-12 form-group">
    <input class="form-control" type="submit" value="Upload Image" name="submit"></input>
	</div>
</form>
<script>
$(document).ready(function(){
	$('#picForm').submit(function(evt){
		if ($('#fileUpload').prop('files') == null){
			evt.preventDefault();
			window.history.back();
			alert ("file empty");
		}
		else {
			
		}
	});
});

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#thumbPic').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#fileUpload").change(function(){
        readURL(this);
    });
</script>

</div>

<!--
<a id="button" href="/cpanel" style="display:block">
<div id="cPanel" class="col-sm-4 well">
<h2>Control panel</h2>
</div>
</a>-->
</div>
<div class="row">
<div class="col-sm-12">

</div>
</div>


</div>


</body>
</html>
