<?php
	include("main.php");
    if(isset($_POST["sign_up"])){
    	signUp();
    }
    if(isset($_POST["login"])){
    	log_in(); 
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.bootcss.com/typed.js/1.1.4/typed.min.js"></script>
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/script.js"></script>
</head>
<body id="main">
	<div class="container" style="margin-top: 100px;">
		<div class="row">
			<div class="col-md-8 left align-left">
				<h1><span id="element"></span></h1>
				<h1><span id="write"></span></h1>
			</div>
			<div class="col-md-4 right">
				<div id="login_box" class="hide mx-auto my-auto">
					<img src="image/avatar.jpg" class="avatar" alt="avatar">
					<h3 class="font-weight-bold mb-4">Sign In</h3>
					<form class="form-group" method="POST" name="myForm1" action="sign_up.php" onsubmit = "return(logIn());">
						<input type="text" placeholder="User Name" name="logname" class="field form-control mb-3"required>
						<input type="password" placeholder="Password" name="logpassword" class="field form-control mb-3"required>
						<button class="button btn" name="login">Sign in</button>
					</form>
					<div class="row">
						<div class="col">
							<button class="btn google font-weight-bold" type="">Google+</button>
						</div>
						<div class="col">
							<button class="btn facebook font-weight-bold" type="">Facebook</button>
						</div>
					</div>
					<br>
					<hr>
					<button class="txt_small switchButton" id="displaySignup">Sign Up</button>
				</div>
				<div id="signUp_box" class="mx-auto my-auto">
					<h3 class="font-weight-bold mb-4">Sign Up</h3>
					<form class="form-group" name="myForm" method="POST" action="sign_up.php" onsubmit = "return(signUp());">
						<input type="text" placeholder="Name" name="name" class="field form-control mb-3" required>
						<input type="text" placeholder="User Name" name="signup_user" class="field form-control mb-3" required>
						<input type="email" placeholder="Email" name="email" class="field form-control mb-3" required>
						<input type="password" placeholder="Password" name="password" class="field form-control mb-3" required>
						<input type="password" placeholder="Confirm Password" name="cpassword" class="field form-control mb-3" required>
						<button class="button btn" name="sign_up">Sign Up</button>
					</form>
					<br>
					<hr>
					<p>Already User ?</p><button class="txt_small switchButton"  id="displaySignin">Sign In</button>
				</div>
			</div>
		</div>
	</div>
	<script src="bootstrap/popper.min.js" ></script>
	<script src="bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript">
		function signUp() {
			var name = document.forms["myForm"]["name"].value;
			var userName = document.forms["myForm"]["signup_user"].value;
			var email = document.forms["myForm"]["email"].value;
			var pass = document.forms["myForm"]["password"].value;
			var cpass = document.forms["myForm"]["cpassword"].value;
			if (name == "") {
			    alert("Name must be filled out");
			    return false;
			  }
			  if (userName == "") {
			    alert("User name must be filled out");
			    return false;
			  }
			  if (email == "") {
			    alert("E-mail must be filled out");
			    return false;
			  }
			 if ((pass == "" && cpass == "") || (pass != cpass)) {
			    alert("Wrong Password");
			    return false;
			  }
			  return true;

		}
		function logIn() {
			var logname = document.forms["myForm1"]["logname"].value;
			var logpassword = document.forms["myForm1"]["logpassword"].value;
			if (logname == "") {
			    alert("User name must be filled out");
			    return false;
			  }
			  if (logpassword == "") {
			    alert("password must be filled out");
			    return false;
			  }
			  return true;
		}
	</script>
</body>
</html>