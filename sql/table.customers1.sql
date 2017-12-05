-- 
-- Editor SQL for DB table customers1
-- Created by http://editor.datatables.net/generator
-- 

CREATE TABLE IF NOT EXISTS `customers1` (
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
);