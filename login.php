<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<html>
<head>
<link rel="stylesheet" href="css/style.css"/>
</head>
<body style="padding:100" id="websitebody" >
<div >
<h2>Please Login to the admin page</h2>

<form name="loginform "action="login_exec.php" method="post">
<p>Username:<input name="username" type="text" placeholder="username"></input></p>


<p>Password:<input name="password" type="password" placeholder="password"></input></p>
<input type="submit"/>
 <?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<ul class="err">';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<li>',$msg,'</li>'; 
				}
			echo '</ul>';
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>

</form>
</div>
</body>
</html>
