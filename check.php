<?php
	include('main.php');
	if(isset($_POST["checkUrl_Button"])){
        check();
    }
    if (!isset($_SESSION['name'])){ 
      header("location: sign_up.php");
  	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Check Url's</title>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
	<script type="text/javascript" src="https://cdn.bootcss.com/typed.js/1.1.4/typed.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/script.js"></script>
</head>
<body>
	<nav class="navbar fixed-top navbar-expand-sm cusBg navbar-dark">
		<div class="container">
			<a class="navbar-brand" href="index.php">PhisProof</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="mynav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item ">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="check.php">Check URL's</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="donate.php">Donate Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.php">Contact Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="feedback.php">Feedback</a>
					</li>
					<a type="" class="btn btn-danger nav-link" onclick="<?php session_destroy();
						?>" href="donate.php" >Logout</a>
				</ul>
			</div>
		</div>
	</nav>
	<section id="check">
		<div class="container">
			<h2>Check URL's</h2>
			<div class="row">
				<div class="col">
					<img src="image/check.png" class="img-fluid" alt="">
				</div>
			</div>
			<div class="row">
				<div class="col">
					<form class="form-group" method="POST">
						<input type="text" placeholder="Enter Url" name="checkUrl_text" class="form-control m-3">
						<button id="check" name="checkUrl_Button" type="submit" class="btn m-3">Check</button>
					</form>
				</div>
			</div>
		</div>
	</section>

		

	<footer class="footer">
		<div class="row">
			<div class="col">
				<img src="./image/foot.png" alt="">
			</div>
			<div class="col fcol" >
				<ul class="list-group">
					<li class="list-group-item"><a class="text-light" href="index.php">Home</a></li>
					<li class="list-group-item"><a class="text-light" href="check.php">Check URL's</a></li>
					<li class="list-group-item"><a class="text-light" href="donate.php">Donate Us</a></li>
					<li class="list-group-item"><a class="text-light" href="contact.php">Contact Us</a></li>
					<li class="list-group-item"><a class="text-light" href="feedback.php">Feedback</a></li>
				</ul>
			</div>
			<div class="col fcol my-auto float-left">
				<h5>Connect With Us</h5>
				<i class="fab fa-facebook"></i>
				<i class="fab fa-twitter-square"></i>
				<i class="fab fa-instagram"></i>
				<i class="fab fa-linkedin"></i>
			</div>
			<div id="add" class="col fcol my-auto">
				<h5>Address:</h5>
				<p>PhisProof Private Limited,<br>
				   Proident id qui., Non est do.<br> Id ullamco.
				   Lorem ipsum <br> labore nulla cupidatat <br>excepteur.Koramangala,<br>
				   xyz - 000000 <br>
				   India
				</p>
			</div>
		</div>
		<hr id="foothr">
		<p>&copy; <span id="year"></span></p>
	</footer>
	<script src="bootstrap/popper.min.js" ></script>
	<script src="bootstrap/bootstrap.min.js"></script>
</body>
</html>