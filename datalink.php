
<?php


  
	  //CRUD
//create edit delete display data from database.
//function to display dropdown list data from database.
function databaseN($query,$link,$field){
$result=mysqli_query($link,$query);
if (mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
    echo "<option value=".$row[$field].">".$row[$field]."</option>";
	}
}
else{
	return "cannot find data ";
}

}
//function to display table data from database
function databaseTable($query,$link,$field){
	$result=mysqli_query($link,$query);
if (mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
    echo "<tr><td>".$row[$field]."</td></tr>";
	}
}
else{
	return "cannot find data";
}
}


function databaseField($query,$link){
	$result=mysqli_query($link,$query);
	if (mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result)){
	  $query2='select pic1 from gallery where galleryId="'.$row['property_name'].'"';
     $result2=mysqli_query($link,$query2);
	 if (mysqli_num_rows($result2)>0){
		

		$row2=mysqli_fetch_assoc($result2);
	 
	 	$query3="select * from locations where location_id='".$row['location_id']."'";
		$result3=mysqli_query($link,$query3);
		if (mysqli_num_rows($result)>0){
			$row3=mysqli_fetch_assoc($result3);
		}
			
		echo	' <div class="col-sm-6 featuredSection">
		<a href="modal.php?pid='.$row['property_id'].'">
		
<img style="position:relative" id="myImg" src="gallery/'.$row2['pic1'].'" alt="Property" width="100%" height="100%"></img></a>
    <div class="bathrooms"><i class="fa fa-bath fa-th-large">&nbsp '.round($row['bathrooms']).' bath(s)</i></div>
<div class="bedrooms"><i class="fa fa-bed fa-large">&nbsp '.round($row['bedrooms']).' bed(s)</i></div>
		<div class="location"><p style="opacity:1;color:white;zindex:2"><strong>'.$row3['location_name'].'</strong></div>
<div class="floorSpace">Sitting Room '.$row['living_area_size'].' ft<sup>2</sup></div>
<div class="featuredDesc"><span style="background-color:008B45;font-size:20px" class="label label-info">featured</span></div>
<div class="price">'.$row['property_price'].'</div> </div>';
	 }
	 
	 
	 else{
		 continue;
	 }


			
		 
			
			
		
	}
		
	
}
}
function databaseFieldf($query,$link){
	$result=mysqli_query($link,$query);
	if (mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result)){
	  $query2='select pic1 from gallery where galleryId="'.$row['property_name'].'"';
     $result2=mysqli_query($link,$query2);
	 if (mysqli_num_rows($result2)>0){
		

		$row2=mysqli_fetch_assoc($result2);
	 
	 	$query3="select * from locations where location_id='".$row['location_id']."'";
		$result3=mysqli_query($link,$query3);
		if (mysqli_num_rows($result)>0){
			$row3=mysqli_fetch_assoc($result3);
		}
			
		echo	' <div class="col-sm-6 featuredSection">
		<a href="modal.php?pid='.$row['property_id'].'">
		
<img style="position:relative" id="myImg" src="gallery/'.$row2['pic1'].'" alt="Property" width="100%" height="100%"></img></a>
    <div class="bathrooms"><i class="fa fa-bed fa-large">&nbsp '.$row['bathrooms'].'</i></div>
		<div class="location"><p style="opacity:1;color:white;zindex:2"><strong>'.$row3['location_name'].'</strong></div>
<div class="floorSpace">'.$row['living_area_size'].'</div>
<div class="price">'.$row['property_price'].'</div> </div>';
	 }
	 
	 
	 else{
		 continue;
	 }


			
		 
			
			
		
	}
		
	
}
}




//$dbImages="select * from gallery";
//databaseField($dbImages,$bd);


//databaseTable("select * from property",$bd,'property_id');
?>