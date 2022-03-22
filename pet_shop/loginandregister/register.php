<?php
	session_start();
?>
<!DOCTYPE html>
<head>
	<title>Registration form</title>
	<link rel="stylesheet" href="registerstyle.css">
</head>
<body>
	<?php
	include('connect.php');

	if(isset($_POST['register']))
	{
		$firstname=mysqli_real_escape_string($con,$_POST['firstname']);
		$lastname=mysqli_real_escape_string($con,$_POST['lastname']);
		$phone=mysqli_real_escape_string($con,$_POST['phone']);
		$email=mysqli_real_escape_string($con,$_POST['email']);
		$address=mysqli_real_escape_string($con,$_POST['address']);
		$password=mysqli_real_escape_string($con,$_POST['password']);
		$cpassword=mysqli_real_escape_string($con,$_POST['cpassword']);
		
		$pass=password_hash($password,PASSWORD_BCRYPT);
		$cpass=password_hash($cpassword,PASSWORD_BCRYPT);
		$email=strtolower($email);
		$emailquery="select * from user where Mail='$email' ";
		$query=mysqli_query($con,$emailquery);
		$emailcount=mysqli_num_rows($query);
		
	if(filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		

		if($emailcount>0){
				?>
					<script>
						alert("Email already exists");
					</script>
					<?php	
    					 
				}
		else{
	
			if($password==$cpassword)
			{
				$insertquery="INSERT into user(Fname, Lname, Phone, Mail, Address, Password, Cpassword)
						values('$firstname','$lastname','$phone','$email','$address','$pass','$cpass')";
				$iquery=mysqli_query($con,$insertquery);
		

				if($iquery){
					?>
					<script>
						alert("Registration Successful");
					</script>
					<?php	
    					 }
				else{
		
					?>
					<script>
						alert("Registration NOT Done");
					</script>
					<?php	
				    }
			
			}
                     		 else{
				?>
					<script>
						alert("Password dosent match");
					</script>
					<?php
      		  	    }

		}
	
	}
	
else{
		?>
					<script>
						alert("Incorrect email...");
					</script>
			<?php
      }
	}


?>
	<div class="hero">
		<div class="formbox">
			<h1 style="text-align:center;">Register</h1>
			
			
			<form id="userregister" class="input-group" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
				<input type="email" class="input-field" name="email" placeholder="Email Id" required>
 				<input type="text" class="input-field" name="firstname" placeholder="First name" required>
				<input type="text" class="input-field" name="lastname" placeholder="Last name" required>
				<input type="text" class="input-field" name="phone" placeholder="phone number" required>
				<input type="text" class="input-field" name="address" placeholder="Address" required>
				<input type="password" class="input-field" name="password" placeholder="Enter Password" required>
				
				<input type="password" class="input-field" name="cpassword" placeholder="Confrim Password" required>
				
				<button type="submit" class="submit-btn" name="register">Register</button>
				<A HREF="useradminlogin.php" />Log In Here</A>
			</form>
			
			
		</div>
	</div>
	
	
		

		
</body>
</html>