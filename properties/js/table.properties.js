
/*
 * Editor client script for DB table properties
 * Created by http://editor.datatables.net/generator
 */

(function($){

$(document).ready(function() {
	var editor = new $.fn.dataTable.Editor( {
		ajax: 'php/table.properties.php',
		table: '#properties',
		fields: [
			{
				"label": "property name:",
				"name": "property_name"
			},
			{
				"label": "property type:",
				"name": "property_type"
			},
			{
				"label": "property price:",
				"name": "property_price"
			},
			{
				"label": "featured:",
				"name": "featured",
				"type": "radio",
				"def": "no",
				"options": [
					"yes",
					"no"
				]
			},
			{
				"label": "available:",
				"name": "available",
				"type": "radio",
				"def": "yes",
				"options": [
					"yes",
					"no"
				]
			},
			{
				"label": "location id:",
				"name": "location_id",
				"type": "select",
				"options": [
					"loc1",
					"loc2",
					"loc3",
					"loc4",
					"loc5",
					"loc6",
					"loc7",
					"loc8",
					"loc9",
					"loc10"
				]
			},
			{
				"label": "short desc:",
				"name": "short_desc"
			},
			{
				"label": "full desc:",
				"name": "full_desc",
				"type": "textarea"
			},
			{
				"label": "outdoor feature:",
				"name": "outdoor_feature",
				"def": "n\/a"
			},
			{
				"label": "parking slots:",
				"name": "parking_slots"
			},
			{
				"label": "floor location:",
				"name": "floor_location"
			},
			{
				"label": "living area size:",
				"name": "living_area_size"
			},
			{
				"label": "ground size:",
				"name": "ground_size"
			},
			{
				"label": "bedrooms:",
				"name": "bedrooms"
			},
			{
				"label": "bathrooms:",
				"name": "bathrooms"
			},
			{
				"label": "transaction type :",
				"name": "transaction_type_",
				"type": "select",
				"options": [
					"for sale",
					"to rent"
				]
			}
		]
	} );

	var table = $('#properties').DataTable( {
		dom: 'Bfrtip',
		ajax: 'php/table.properties.php',
		columns: [
			{
				"data": "property_name"
			},
			{
				"data": "property_type"
			},
			{
				"data": "property_price"
			},
			{
				"data": "featured"
			},
			{
				"data": "available"
			},
			{
				"data": "time_stamp"
			},
			{
				"data": "location_id"
			},
			{
				"data": "short_desc"
			},
			{
				"data": "full_desc"
			},
			{
				"data": "outdoor_feature"
			},
			{
				"data": "parking_slots"
			},
			{
				"data": "floor_location"
			},
			{
				"data": "living_area_size"
			},
			{
				"data": "ground_size"
			},
			{
				"data": "bedrooms"
			},
			{
				"data": "bathrooms"
			},
			{
				"data": "transaction_type_"
			}
		],
		select: true,
		lengthChange: false,
		buttons: [
			{ extend: 'create', editor: editor },
			{ extend: 'edit',   editor: editor },
			{ extend: 'remove', editor: editor }
		]
	} );
} );

}(jQuery));

