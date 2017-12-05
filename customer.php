<?php
require_once("auth.php");
include ('header.php');

require_once("connection.php");

if (isset($_POST['submit'])){
	if (isset($_POST['Name'])){
		$customer_name = $_POST['Name'];
}
     if (isset($_POST['phoneName'])){
         $customer_phone = $_POST ['phoneName'];

}
   else{
} 
    if (isset($_POST['emailName'])){

        $customer_email= $_POST['emailName'];
}
  else{


}    
     if (isset($_POST['propertyId'])){
    $property_id = $_POST['propertyId'];
    $query="select property_name from properties where property_id=".$property_id."";
     $result=mysqli_query($bd,$query);
     if (mysqli_num_rows($result)>0){
      $row=mysqli_fetch_assoc($result);
}
          
         
}
if (isset($_POST['message'])){
          $customer_message = $_POST['message'];
         
}

$sql ='insert into customers1(customer_name,customer_phone,customer_email,customer_message,property_interested) values ("'.$customer_name.'","'.$customer_phone.'","'.$customer_email.'","'.$customer_message.'","'.$row['property_name'].'")';
if (mysqli_query($bd,$sql)){

  header( "location:modal.php?pid=".$property_id."&mess=success");
  die();


}
else {
echo "Error: " . $sql . "<br>" . mysqli_error($bd);
 }



}
else {
echo "technical error encountered ";
}
?>