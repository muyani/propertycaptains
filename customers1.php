<!doctype html>
<?php
require_once("auth.php");
?>

<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<title>Customers Panel</title>

		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.3/moment-2.18.1/dt-1.10.16/b-1.4.2/sl-1.2.3/datatables.min.css">
		<link rel="stylesheet" type="text/css" href="css/generator-base.css">
		<link rel="stylesheet" type="text/css" href="css/editor.dataTables.min.css">

		<script type="text/javascript" charset="utf-8" src="https://cdn.datatables.net/v/dt/jqc-1.12.3/moment-2.18.1/dt-1.10.16/b-1.4.2/sl-1.2.3/datatables.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="js/dataTables.editor.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="js/table.customers1.js"></script>
	</head>
	<body class="dataTables">
		<div class="container">

			<p style="float:right;"><a href="admin.php">back</a></p>

			<h1>
				Customers table. <span></span>
			</h1>
			
			
			
			<table cellpadding="0" cellspacing="0" border="0" class="display" id="customers1" width="100%">
				<thead>
					<tr>
						<th>customer name</th>
						<th>customer Phone</th>
						<th>customer Email</th>
						<th>customer Status</th>
						<th>customer Message</th>
						<th>time Stamp</th>
						<th>property interested</th>
						<th>followup Message</th>
					</tr>
				</thead>
			</table>

		</div>
	</body>
</html>
