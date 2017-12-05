
<?php
require_once('connection.php');
require_once('queries.php');
include ('header.php');
include ('slider.php');
require_once ('datalink.php');

?>
<hr>



<h2 style="text-align:center">Featured Properties </h2>
<div class="row">
<?php databaseField($dbImages,$bd);?>
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