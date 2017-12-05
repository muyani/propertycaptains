
/*
 * Editor client script for DB table customers1
 * Created by http://editor.datatables.net/generator
 */

(function($){

$(document).ready(function() {
	var editor = new $.fn.dataTable.Editor( {
		ajax: 'php/table.customers1.php',
		table: '#customers1',
		fields: [
			{
				"label": "customer name:",
				"name": "customer_name",
				"type": "readonly"
			},
			{
				"label": "customer Phone:",
				"name": "customer_phone",
				"type": "readonly"
			},
			{
				"label": "customer Email:",
				"name": "customer_email",
				"type": "readonly"
			},
			{
				"label": "customer Status:",
				"name": "customer_status",
				"type": "radio",
				"options": [
					"pending",
					"settled",
					"followup"
				]
			},
			{
				"label": "customer Message:",
				"name": "customer_message",
				"type": "readonly"
			},
			{
				"label": "time Stamp:",
				"name": "time_stamp",
				"type": "hidden"
			},
			{
				"label": "property interested:",
				"name": "property_interested",
				"type": "readonly"
			},
			{
				"label": "followup Message:",
				"name": "followup_message",
				"type": "textarea"
			}
		]
	} );

	var table = $('#customers1').DataTable( {
		dom: 'Bfrtip',
		ajax: 'php/table.customers1.php',
		columns: [
			{
				"data": "customer_name"
			},
			{
				"data": "customer_phone"
			},
			{
				"data": "customer_email"
			},
			{
				"data": "customer_status"
			},
			{
				"data": "customer_message"
			},
			{
				"data": "time_stamp"
			},
			{
				"data": "property_interested"
			},
			{
				"data": "followup_message"
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

