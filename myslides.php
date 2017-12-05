<?php

require_once('fields.php');


function databaseSlides($query,$link){
	$result=mysqli_query($link,$query);
	if (mysqli_num_rows($result)>0){
		$row=mysqli_fetch_assoc($result);
		$query2="select * from gallery where galleryId='".$row['property_name']."'";
		$result2=mysqli_query($link,$query2);
	if (mysqli_num_rows($result2)>0){
		while($row2 = mysqli_fetch_assoc($result2)){
		
		for ($i=1;$i<mysqli_num_fields($result2);$i++){
     if ($row2[pics($link,$query2,$i)]){
			$query3 = "select * from pictures_desc where pic_id='".pics($link,$query2,$i)."'";
			$result3 = mysqli_query($link,$query3);
	if (mysqli_num_rows($result3)>0){
		$row3=mysqli_fetch_assoc($result3);
			
			echo '<div class="mySlides">
      <div class="numbertext">'.$row3['picture_name'].'</div>
      <img src="gallery/';echo $row2[pics($link,$query2,$i)].'" style="width:100%" />
    </div>';
	}
			
		}
}
		
			
	
	
	}

}
	}
}



function databaseThumbs($query,$link){
	$result=mysqli_query($link,$query);
	if ($numRows=mysqli_num_rows($result)>0){
		$row=mysqli_fetch_assoc($result);
		$query2="select * from gallery where galleryId='".$row['property_name']."'";
		$result2=mysqli_query($link,$query2);
		
	if (mysqli_num_fields($result2)>0){

		while($row2 = mysqli_fetch_assoc($result2)){

    for ($i=1;$i<mysqli_num_fields($result2);$i++){
             

			
		$query3 = "select * from pictures_desc where pic_id='".pics($link,$query2,($i))."'";
			$result3 = mysqli_query($link,$query3);
	if (mysqli_num_rows($result3)>0){
		$row3=mysqli_fetch_assoc($result3);
		   
		   
	}
	if ($row2[pics($link,$query2,$i)]){

			
			echo '<div  class=" column col-xs-3">
			 <span style="border-radius:10px;background:#008B45;color:white;top:50%;left:5%;position:relative">'.$row3['picture_name'].'</span>
          
      <img onclick="currentSlide('.($i).')" style="height:100%;width:100%" class="img-thumbnail demo" src="gallery/';echo $row2[pics($link,$query2,($i))].'" ></img>
	 
	
    </div>';
	} 
else{
      
  continue;
}
			
		
		}
		
			}
	
	
	}

}
	}
function databaseDetails($query,$link){
	$result=mysqli_query($link,$query);
	if (mysqli_num_rows($result)>0){
		$row=mysqli_fetch_assoc($result);
$query2="select * from locations where location_id='".$row['location_id']."'";
$result2=mysqli_query($link,$query2);
	if (mysqli_num_rows($result2)>0){
		$row2=mysqli_fetch_assoc($result2);
}
echo '<h4 id="headerName"><i class="fa fa-home">'.$row['short_desc'].'</i></h4>
     <table class=" table table-striped table-responsive table-condensed " >
  <tr>
<th>Location</th>
  <td>'.$row2['location_name'].'</td>
</tr>
<tr>
  <th>Available</th>
  <td>'.$row['available'].'</td>
  </tr> 
<tr>
  <th>Property Type</th>
  <td>'.$row['property_type'].'</td>
  </tr>

  <tr>
  <th>Property Price</th>
  <td>KSH '.$row['property_price'].'</td>
</tr>

<tr>
  <th>Transaction Type</th>
  <td>'.$row['transaction_type_'].'</td>
</tr>
<tr>
<th>General Size</th>
  <td>'.$row['ground_size'].'</td>
</tr>

<tr>  
<th>Floor Location</th>
  <td>'.round($row['floor_location']).'</td>
</tr>
<tr>
<th>Living Area Size</th>
  <td>'.$row['living_area_size'].'</td>
</tr>
<tr>
<th>No Of Bedrooms</th>
  <td>'.round($row['bedrooms']).'</td>
</tr>
<tr>
<th>No Of Bathrooms</th>
  <td>'.round($row['bathrooms']).'</td>
  </tr>
  <tr>
  <th>Outdoor Feature(s)</th>
  <td>'.$row['outdoor_feature'].'</td>
  </tr>
  </table>
';
}
}
function databaseDesc($query,$link){
	$result=mysqli_query($link,$query);
	if (mysqli_num_rows($result)>0){
		$row=mysqli_fetch_assoc($result);
echo '<div class="page-header" ><h1>'.$row['short_desc'].'</h1></div>
  
	<p>'.$row['full_desc'].' </p>';

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


?>








