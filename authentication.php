<?php 
	
  $username=$_POST['username'];
  $password=$_POST['password'];
  
  if(($username=="rajat" && $password=="abcdef") || ($username=="vybbhav" && $password=="abcdef") 
		|| ($username=="shivani" && $password=="abcdef") || ($username=="kevin" && $password=="abcdef")){
	echo 'Login successful....redirecting';
	header('Location: dyanamic.php');
	session_start();
    $_SESSION['username'] = $username;
  }
  else{
	echo '<script type="text/javascript">alert("Incorrect login info! Please re-enter"); window.location.replace("index.html")</script>';
  }
?>
