<?php
 ob_start();
 
    require_once ("../connection.php");
  
    if (isset($_POST['refresh'])){
    $sql= "INSERT IGNORE into gallery(galleryId) SELECT property_name FROM properties";
       if(mysqli_query($bd,$sql)){
			echo "new record successful!!";
			header ( "location:properties.php");
			exit();
	   }
	   else{
	   echo "unsuccessful:". $sql . "<br>" . mysqli_error($bd);
	}
	}
	else{
	echo "no data received";
	}
	ob_end_clean();
 ?>