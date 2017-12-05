<?php
ob_start();
require_once("connection.php");

$target_dir = "gallery/";
if (isset($_POST['submit'])){
	if (isset($_POST['galleryId'])){
		$gallery_id = $_POST['galleryId'];
	
	
  //$gallery_id = isset($_POST['galleryId']) ? $_POST['galleryId']:"property"; 


   $temp = explode(".",$_FILES["fileToUpload"]["name"]);
// Create a distinct name for the file.
 $newfilename = $gallery_id . '_' . time(). '.' .end($temp);
 $target_file = $target_dir . $newfilename;
 $uploadOk = 1;

//basename($_FILES["fileToUpload"]["name"].

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists.
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size.
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats.
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error.
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file.
} else {
	
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $message ="<h2>success!!</h2>" . "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		$galleryIdToUpdate =$_POST['galleryId'];
		$picToUpdate=$_POST['pictureSelected'];	
		$sql = "update gallery set ".$picToUpdate." = "."'".$newfilename."'"." where galleryId = "."'".$galleryIdToUpdate."'";
		if(mysqli_query($bd,$sql)){
			header("location:admin.php");
			exit();
		}
		else{
			echo "Error: " . $sql . "<br>" . mysqli_error($bd);
		}
			   		
		
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}
}
else{
	echo "invalid data";
}
ob_end_clean();
?>