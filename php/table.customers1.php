<?php

/*
 * Editor server script for DB table customers1
 * Created by http://editor.datatables.net/generator
 */

// DataTables PHP library and database connection
include( "lib/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Mjoin,
	DataTables\Editor\Options,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate;

// The following statement can be removed after the first run (i.e. the database
// table has been created). It is a good idea to do this to help improve
// performance.
$db->sql( "CREATE TABLE IF NOT EXISTS `customers1` (
	`customer_id` int(10) NOT NULL auto_increment,
	`customer_name` varchar(255),
	`customer_phone` varchar(255),
	`customer_email` varchar(255),
	`customer_status` varchar(255),
	`customer_message` varchar(255),
	`time_stamp` varchar(255),
	`property_interested` varchar(255),
	`followup_message` text,
	PRIMARY KEY( `customer_id` )
);" );

// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'customers1', 'customer_id' )
	->fields(
		Field::inst( 'customer_name' ),
		Field::inst( 'customer_phone' ),
		Field::inst( 'customer_email' )
			->validator( 'Validate::email' ),
		Field::inst( 'customer_status' ),
		Field::inst( 'customer_message' ),
		Field::inst( 'time_stamp' ),
		Field::inst( 'property_interested' ),
		Field::inst( 'followup_message' )
	)
	->process( $_POST )
	->json();
