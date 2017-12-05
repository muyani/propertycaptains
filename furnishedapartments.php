
<?php
require_once('connection.php');

include ('header.php');

?>
<h3>Furnished Apartments</h3>

<div class="row">
<?php
require_once('queries.php');
require_once ('datalink.php');
 databaseFieldf($dbToRentFurnished,$bd);


?>
</div>

  <br />
  <br />
  <div> All rights reserved. Property Captains Ltd  © 2017 </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </body>
 </html>