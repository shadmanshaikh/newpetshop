<?php
	session_start();
?>
<!DOCTYPE html>
<head>
	<title>Login and registration form</title>
	<link rel="stylesheet" href="login.css">
</head>
<body>
	<?php
		include "connect.php";
		if(isset($_POST['submit']))
		{
			$email=$_POST['email'];
			$password=$_POST['password'];
			
			$email_search="select * from user where Mail='$email' ";
			$query=mysqli_query($con,$email_search);
			
			$email_cnt=mysqli_num_rows($query);
			if($email_cnt)
			{
				$email_pass=mysqli_fetch_assoc($query)	;
				$pass=$email_pass['Password'];
				$pass_decode=password_verify($password,$pass);
				if($pass_decode)
				{
					?>
					<script>
						alert("Login Successful");
						location.href="../pages/shp_crt/index.php";
					</script>
					<?php	
    					 }
				else{
		
					?>
					<script>
						alert("Incorrect Password");
					</script>
					<?php	
				}				
			}
			else{
		
					?>
					<script>
						alert("Invalid Email");
					</script>
					<?php	
				}			
}
?>	
<?php
		include('connect.php');
		if(isset($_POST['asubmit']))
		{
			$aemail=$_POST['aemail'];
			$apassword=$_POST['apassword'];
			
			$aemail_search="select * from Admin where Amail='$aemail' ";
			$aquery=mysqli_query($con,$aemail_search);
			
			$aemail_cnt=mysqli_num_rows($aquery);
			if($aemail_cnt)
			{
				if($apassword=="root123")
				{
					?>
					<script>
						alert("Login Successful");
						location.href="../pages/dashboard.php";
					</script>
					<?php	
    					 }
				else{
		
					?>
					<script>
						alert("Incorrect Password");
					</script>
					<?php	
				}				
			}
			else{
		
					?>
					<script>
						alert("Invalid Email");
					</script>
					<?php	
				}			
}
?>

	<div class="hero">
		<div class="formbox">
			<h1 style="text-align:center;">Login</h1>
			<div class="buttonbox">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="userlogin()">User</button>
				<button type="button" class="toggle-btn" onclick="adminlogin()">Admin</button>
			</div>
			<form id="userlogin" class="input-group"  action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
				<input type="text" class="input-field" name="email" placeholder="User Id/ Mail" required>
				<input type="password" class="input-field" name="password" placeholder="Enter Password" required>
				
				<a href="../pages/shp_crt/index.php"><button type="submit" class="submit-btn" name="submit">Log in</button></a>
				<A HREF="register.php" />Register Here</A>
			</form>
			<form id="adminlogin" class="input-group" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
				<input type="text" class="input-field" name="aemail" placeholder="User Id/ Mail" required>
				<input type="password" class="input-field" name="apassword" placeholder="Enter Password" required>
				
				<button type="submit" class="submit-btn" name="asubmit">Log in</button>
			</form>
			
		</div>
	</div>
	
	<script>
		var x=document.getElementById("userlogin");
		var y=document.getElementById("adminlogin");
		var z=document.getElementById("btn");

		function adminlogin(){
			x.style.left="-400px";
			y.style.left="50px";
			z.style.left="110px";
			}
		function userlogin(){
			x.style.left="50px";
			y.style.left="450px";
			z.style.left="0";
			}
		
</script>
</body>
</html>