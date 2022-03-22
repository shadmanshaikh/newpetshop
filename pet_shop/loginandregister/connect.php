<?php
	
	$server="localhost:3309";
	$user="root";
	$password="";
	$db="pet_shop";
	
	$con=mysqli_connect($server,$user,$password,$db);

	if(!$con){
	?>
		<script>
			alert("Connection Not Successful");
		</script>
	<?php	
   	  }
?>