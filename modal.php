<?php
 include ('head.php');

require_once("connection.php");
require_once("myslides.php");?>
 
<?php

	$p_id = $_GET['pid'];

?>

<div class="container">
<div id="myModal" class="modal">
<div class="row">


<a href="index.php"><span class="close cursor">&times;</span></a>
<div class="col-sm-8">
  <div class="modal-content">


   <?php $query='select * from properties where property_id='.$p_id.'';
     databaseSlides($query,$bd);
	 
	 ?>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

<div class="row">
  <?php
     databaseThumbs($query,$bd);
	 
	 ?>
</div>
<br>
<div style="text-align:center" class="col-sm-12">
<div class="well" style="background:white ;text-align:left;color:black" >
  <?php databaseDesc($query,$bd);
?>
	
</div>
</div>
  </div>
	

</div>
   <div class="col-sm-4 ">
   <div class="contentDesc">
    <?php databaseDetails($query,$bd);
?>
 
</div>
<div name="customerArea" class="cutomerContact">
<div style="display:none"  class="alert alert-success success>" >Success!! We will contact you soon</div>
<form action="customer.php" method="post" >

<div class="form-group">
  <h4>Want To hangout ?</h4>
  <label for="phoneName">Name </label>
<input class="form-control" type="text" name="Name" placeholder="your Name" required/>
<label for="phoneName"> Phone Number</label>
  <input class="form-control" type="number" name="phoneName" placeholder="eg. 0706277341" required/>
<label for="emailName(valid)">Email Address </label>
  <input class="form-control" type="email" name="emailName" placeholder="someone@example.com"/>
<input type="hidden" name="propertyId" <?php echo 'value="'.$p_id.'"'?>   />
<label for="phoneName">Message(optional) </label>
 <input class="form-control" name="message" type="textbox" placeholder="any message?"></input>
  <input name="submit" type="submit"></input>

</div>
</form>

</div>
</div>
<?php
if(isset($_GET['mess'])) {
if ($_GET['mess']==='success'){
       
echo '<script> alert ("success"); </script>';

}

}

 ?>
<script>
$("form :input").attr("autocomplete", "off");
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");

  if (n > slides.length) {
slideIndex = 1	
};
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>


</div>
<div class="row">
   
 <h4> Similar Properties in this location</h4>

<?php 


$query2="select * from properties where location_id=(select location_id from properties where property_id=".$p_id.") AND property_type=(SELECT property_type from properties where property_id=".$p_id.") AND property_id !=".$p_id."";

databaseFieldf($query2,$bd);

?>

</div>

</div>
</html>