<?php
	session_start();
  ini_set('maxdb_execution_time', 300);
  function connectionCall(){
    $connection = new mysqli('localhost','root','','phisproof');
    return $connection;
  }
  function signUp(){
  	$conn = connectionCall();
  	$error = 0;
  	if(!isset($_POST['name']) or strlen($_POST['name'])==0){
   		$error = 1;
  	}
  	if(!isset($_POST['signup_user']) or strlen($_POST['signup_user'])==0){
   		$error = 1;
  	}
  	if(!isset($_POST['email']) or strlen($_POST['email'])==0){
   		$error = 1;
  	}
  	if(!isset($_POST['password']) or strlen($_POST['password'])==0){
   		$error = 1;
  	}
    if(($_POST['password']) != ($_POST['cpassword'])){
      $error = 1;
    }
  	if($error){
      echo "<script>alert('Fill Form');</script>";
  		return;
  	}
  	$name = mysqli_real_escape_string($conn,$_POST['name']);
  	$username = mysqli_real_escape_string($conn,$_POST['signup_user']);
  	$email = mysqli_real_escape_string($conn,$_POST['email']);
  	$password = md5(mysqli_real_escape_string($conn,$_POST['password']));

	  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      echo "<script>alert('Entered E-mail is wrong');</script>";
	  }
	  else{
      $result = mysqli_query($conn,"select * from user where user_name='$username' or email='$email';");
      if(mysqli_num_rows($result)){
        echo "<script>alert('Already User');</script>";
      }
      else{
	     mysqli_query($conn,"INSERT INTO user(name,user_name,email,password) values('$name','$username','$email','$password')");
        echo "<script>alert('Register Successfully');</script>";
	   }
   }
	}

  function feedback(){
    $conn = connectionCall();
    $title = mysqli_real_escape_string($conn,$_POST['feedback_title']);
    $description= mysqli_real_escape_string($conn,$_POST['feedback_description']);
    $username = $_SESSION["user_name"];
    $result = mysqli_query($conn,"select * from user WHERE user_name = '$username';");
    while ($row = mysqli_fetch_assoc($result)) {
        $user_id = $row['id'];
    }
    mysqli_query($conn,"INSERT INTO user_feedback(user_id,title,description) values('$user_id','$title','$description')");
  }

	function log_in(){
		if((!isset($_POST['logname']) or strlen($_POST['logname'])==0)or(!isset($_POST['logpassword']) or strlen($_POST['logpassword'])==0)){
         $error = 1;
         return ;
     	}

  		$conn = connectionCall();
  		$username = mysqli_real_escape_string($conn,$_POST['logname']);
  		$password = md5(mysqli_real_escape_string($conn,$_POST['logpassword']));
      $_SESSION["user_name"] = $username;
      $result = mysqli_query($conn,"select * from user where user_name='$username' and password='$password';");
         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
             $_SESSION["name"] = $row["name"];
             $_SESSION["email"] = $row["email"];
            }
         }
      if(mysqli_num_rows($result)){
	      header("location:index.php");
	    }
      else{
	      echo "<script>alert('Entered E-mail or Password is invalid');</script>";
      }       
	}
   function check()
  {
    $li=($_POST['checkUrl_text']);
    if(!check_malicious($_POST['checkUrl_text']))
    {
      echo "<script>alert('Safe ( machine learning)')</script>";
    }
    else
    {
      echo "<script>alert('Not Safe (machine learning)')</script>";
    }
  }
  function check_malicious($id){
    $tmp = exec("python ch.py \"$id\"");
    if($tmp=='1')
    {
      return 1;
    }
    else
    { 
      return 0;
    }
  }
?>