<!DOCTYPE html>
<html>

<head>
	<title>Payment</title>
	<meta http-equiv="Refresh" content="2; url='shp_crt/orders.php'" />
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$servername = "localhost:3309";
		$user = "root";
		$password = "";
		$db = "pet_shop" ;
		$conn = mysqli_connect($servername, $user, $password, $db);
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect and WILL NOTTT. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$first_name = $_REQUEST['firstname'];
		$email = $_REQUEST['email'];
		$address = $_REQUEST['address'];
		$city = $_REQUEST['city'];
		$state = $_REQUEST['state'];
		$zip = $_REQUEST['zip'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO payment_details VALUES ('$first_name',
			'$email','$address','$city','$state','$zip' , 'id_nmuber')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully.";
				
			echo nl2br("\n$first_name\n $state\n$city\n$zip
				. \n $address\n $email");

			// echo "<a href="shp_crt/orders.php">go to orders page</a>";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
