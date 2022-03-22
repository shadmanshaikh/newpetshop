<!DOCTYPE html>
<head>
	<title>Login and registration form</title>
	<link rel="stylesheet" href="login.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <a class="navbar-brand mt-2 mt-lg-0" href="../pages/shp_crt/index.php">
        <img
          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpdK_TIhgNkl5BziZ_jFr4qRN74exsNEiZPA&usqp=CAU"
          height="30"
          alt=" Logo"
          loading="lazy"
        />
      </a>
    </div>
     
</nav>
	<div class="hero">
		<div class="formbox">
			<h1 style="text-align:center;">Login</h1>
			<div class="buttonbox">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="userlogin()">User</button>
				<button type="button" class="toggle-btn" onclick="adminlogin()">Admin</button>
			</div>
			<form id="userlogin" class="input-group">
				<input type="text" class="input-field" placeholder="User Id/ Mail" required>
				<input type="text" class="input-field" placeholder="Enter Password" required>
				<input type="checkbox" class="check-box"><span>Remember Password</span>
				<button type="submit" class="submit-btn">Log in</button>
			</form>
			<form id="adminlogin" class="input-group">
				<input type="text" class="input-field" placeholder="User Id/ Mail" required>
				<input type="text" class="input-field" placeholder="Enter Password" required>
				<input type="checkbox" class="check-box"><span>Remember Password</span>
				<button type="submit" class="submit-btn">Log in</button>
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