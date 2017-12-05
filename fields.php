<?php
function pics($link,$query,$location){
$result=mysqli_query($link,$query);
	if (mysqli_num_fields($result)>0){
		while($fieldinfo=mysqli_fetch_field($result)){
		
			 $fields[]=$fieldinfo->name;
			
			
			
		
		}
		
		
		$fielength=count($fields);

		return $fields[$location];		
		
}
}

			?>