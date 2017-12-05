<?php

/*
 * Editor server script for DB table properties
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
$db->sql( "CREATE TABLE IF NOT EXISTS `properties` (
	`property_id` int(10) NOT NULL auto_increment,
	`property_name` varchar(255),
	`property_type` varchar(255),
	`property_price` numeric(9,2),
	`featured` varchar(255),
	`available` varchar(255),
	`time_stamp` datetime,
	`location_id` varchar(255),
	`short_desc` varchar(255),
	`full_desc` text,
	`outdoor_feature` varchar(255),
	`parking_slots` numeric(9,2),
	`floor_location` numeric(9,2),
	`living_area_size` varchar(255),
	`ground_size` varchar(255),
	`bedrooms` numeric(9,2),
	`bathrooms` numeric(9,2),
	`transaction_type_` varchar(255),
	PRIMARY KEY( `property_id` )
);" );

// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'properties', 'property_id' )
	->fields(
		Field::inst( 'property_name' )
			->validator( 'Validate::notEmpty' ),
		Field::inst( 'property_type' )
			->validator( 'Validate::notEmpty' ),
		Field::inst( 'property_price' ),
		Field::inst( 'featured' ),
		Field::inst( 'available' ),
		Field::inst( 'time_stamp' )
			->set( false )
			->validator( 'Validate::dateFormat', array( 'format'=>'Y-m-d H:i:s' ) )
			->getFormatter( 'Format::datetime', array( 'from'=>'Y-m-d H:i:s', 'to'  =>'Y-m-d H:i:s' ) )
			->setFormatter( 'Format::datetime', array( 'to'  =>'Y-m-d H:i:s', 'from'=>'Y-m-d H:i:s' ) ),
		Field::inst( 'location_id' )
			->validator( 'Validate::notEmpty' ),
		Field::inst( 'short_desc' )
			->validator( 'Validate::notEmpty' ),
		Field::inst( 'full_desc' ),
		Field::inst( 'outdoor_feature' ),
		Field::inst( 'parking_slots' ),
		Field::inst( 'floor_location' ),
		Field::inst( 'living_area_size' ),
		Field::inst( 'ground_size' ),
		Field::inst( 'bedrooms' ),
		Field::inst( 'bathrooms' ),
		Field::inst( 'transaction_type_' )
	)
	->process( $_POST )
	->json();
