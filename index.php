<?php
	include("main.php");
	if (!isset($_SESSION['name'])){ 
      header("location: sign_up.php");
  	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome To PhisProof</title>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
	<script type="text/javascript" src="https://cdn.bootcss.com/typed.js/1.1.4/typed.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/script.js"></script>
</head>
<body id="landingPage">
	<nav class="navbar fixed-top navbar-expand-sm cusBg navbar-dark">
		<div class="container">
			<a class="navbar-brand" href="index.php">PhisProof</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="mynav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item ">
						<a class="nav-link active" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="check.php">Check URL's</a>
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
					<li class="nav-item">
						<a type="" class="btn btn-danger nav-link" onclick="<?php session_destroy();
						?>" href="donate.php" >Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<video autoplay muted loop>
		<source src="https://mdbootstrap.com/img/video/Lines-min.mp4" type="video/mp4">
	</video>
	<div id="content-overlay">
		<div class="container ">
			<div id="landingText">
				<h1 id="textland" class="display-2">Welcome to PhisProof <p name="massage"><?=$_SESSION["name"]?></p></h1>
				<h1><span id="frontText"></span></h1>
				<br><br>
				<button id="landbutton"><a id="landingref" href="#content">What is Phishing?</a></button>
			</div>
		</div>
	</div>
	<section id="content">
		<div class="container">
		<h1 class="display-4">What is Phishing?</h1><hr>
		<div class="row">
			<div class="col-sm-8">
				<p class="lead">Phishing is a cybercrime in which a target or targets are contacted by email, telephone or text message by someone posing as a legitimate institution to lure individuals into providing sensitive data such as personally identifiable information, banking and credit card details, and passwords.The information is then used to access important accounts and can result in identity theft and financial loss.</p>
			</div>
			<div class="col-md-4">
				<img src="./image/macboat.jpeg" class="img-fluid" alt="">
			</div>
		</div>
		<h1 class="display-4">Phishing Techniques</h1><hr>
		<div class="row ">
			<div class="col-sm-4 ">
				<img src="./image/tech.jpg" class="img-fluid" alt="">
			</div>
			<div class="col-md-8">
				<p class="lead">There are a number of different techniques used to obtain personal information from users. As technology becomes more advanced, the cybercriminals' techniques being used are also more advanced.

				To prevent Internet phishing, users should have knowledge of how the bad guys do this and they should also be aware of anti-phishing techniques to protect themselves from becoming victims.</p>
			</div>
		</div>

		<div class="row mb-3 mt-4">
			<div class="col">
				<h4>Spear Phishing</h4><hr>
				<p class="text-justify p-3">While traditional phishing uses a 'spray and pray' approach, meaning mass emails are sent to as many people as possible, spear phishing is a much more targeted attack in which the hacker knows which specific individual or organization they are after. They do research on the target in order to make the attack more personalized and increase the likelihood of the target falling into their trap.</p>
			</div>
			<div class="col">
				<h4>Session Hijacking</h4><hr>
				<p class="text-justify p-3">In session hijacking, the phisher exploits the web session control mechanism to steal information from the user. In a simple session hacking procedure known as session sniffing, the phisher can use a sniffer to intercept relevant information so that he or she can access the Web server illegally.</p>
			</div>
		</div>
		<div class="row mb-3 mt-4">
			<div class="col">
				<h4>Email/Spam</h4><hr>
				<p class="text-justify p-3">Using the most common phishing technique, the same email is sent to millions of users with a request to fill in personal details. These details will be used by the phishers for their illegal activities. Most of the messages have an urgent note which requires the user to enter credentials to update account information, change details, or verify accounts. Sometimes, they may be asked to fill out a form to access a new service through a link which is provided in the email.</p>
			</div>
			<div class="col">
				<h4>Content Injection</h4><hr>
				<p class="text-justify p-3">Content injection is the technique where the phisher changes a part of the content on the page of a reliable website. This is done to mislead the user to go to a page outside the legitimate website where the user is then asked to enter personal information.</p>
			</div>
		</div>
		<div class="row mb-3 mt-4">
			<div class="col">
				<h4>Web Based Delivery</h4><hr>
				<p class="text-justify p-3">Web based delivery is one of the most sophisticated phishing techniques. Also known as “man-in-the-middle,” the hacker is located in between the original website and the phishing system. The phisher traces details during a transaction between the legitimate website and the user. As the user continues to pass information, it is gathered by the phishers, without the user knowing about it.</p>
			</div>
			<div class="col">
				<h4>Phishing through Search Engines</h4><hr>
				<p class="text-justify p-3">Some phishing scams involve search engines where the user is directed to products sites which may offer low cost products or services. When the user tries to buy the product by entering the credit card details, it’s collected by the phishing site. There are many fake bank websites offering credit cards or loans to users at a low rate but they are actually phishing sites.</p>
			</div>
		</div>
		<div class="row mb-3 mt-4">
			<div class="col">
				<h4>Link Manipulation</h4><hr>
				<p class="text-justify p-3">Link manipulation is the technique in which the phisher sends a link to a malicious website. When the user clicks on the deceptive link, it opens up the phisher’s website instead of the website mentioned in the link. Hovering the mouse over the link to view the actual address stops users from falling for link manipulation.</p>
			</div>
			<div class="col">
				<h4>Vishing (Voice Phishing)</h4><hr>
				<p class="text-justify p-3">In phone phishing, the phisher makes phone calls to the user and asks the user to dial a number. The purpose is to get personal information of the bank account through the phone. Phone phishing is mostly done with a fake caller ID.</p>
			</div>
		</div>
		<div class="row mb-3 mt-4">
			<div class="col">
				<h4>Keyloggers</h4><hr>
				<p class="text-justify p-3">Keyloggers refer to the malware used to identify inputs from the keyboard. The information is sent to the hackers who will decipher passwords and other types of information. To prevent key loggers from accessing personal information, secure websites provide options to use mouse clicks to make entries through the virtual keyboard.</p>
			</div>
			<div class="col">
				<h4>Smishing (SMS Phishing)</h4><hr>
				<p class="text-justify p-3">Phishing conducted via Short Message Service (SMS), a telephone-based text messaging service. A smishing text, for example, attempts to entice a victim into revealing personal information via a link that leads to a phishing website.</p>
			</div>
		</div>
		<div class="row mb-3 mt-4">
			<div class="col">
				<h4>Trojan</h4><hr>
				<p class="text-justify p-3">A Trojan horse is a type of malware designed to mislead the user with an action that looks legitimate, but actually allows unauthorized access to the user account to collect credentials through the local machine. The acquired information is then transmitted to cybercriminals.</p>
			</div>
			<div class="col">
				<h4>Malware</h4><hr>
				<p class="text-justify p-3">Phishing scams involving malware require it to be run on the user’s computer. The malware is usually attached to the email sent to the user by the phishers. Once you click on the link, the malware will start functioning. Sometimes, the malware may also be attached to downloadable files.</p>
			</div>
		</div>
		<div class="row mb-3 mt-4">
			<div class="col">
				<h4>Malvertising</h4><hr>
				<p class="text-justify p-3">Malvertising is malicious advertising that contains active scripts designed to download malware or force unwanted content onto your computer. Exploits in Adobe PDF and Flash are the most common methods used in malvertisements.</p>
			</div>
			<div class="col">
				<h4>Ransomware</h4><hr>
				<p class="text-justify p-3">Ransomware denies access to a device or files until a ransom has been paid. Ransomware for PC's is malware that gets installed on a user's workstation using a social engineering attack where the user gets tricked in clicking on a link, opening an attachment, or clicking on malvertising.</p>
			</div>
		</div>
		<br><br>
	</div>
	</section>
	<br>
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