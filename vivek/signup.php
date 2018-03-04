<?php
    session_start();
    $db = mysqli_connect("localhost", "root", "", "chatbook");
   if (isset($_POST['signup'])) {
   $name = htmlentities($_POST['username']);
   $email = htmlentities($_POST['email']);
   $password = htmlentities($_POST['password']);
   $password2 = htmlentities($_POST['repassword']);

  if ($password == $password2) {
  	$password = md5($password);

  	$query = "INSERT INTO user1 (name, email, password) VALUES ('$name', '$email','$password')";
  	$result = mysqli_query($db, $query);
  	if ($result){
      $_SESSION['email'] =$email;
      $_SESSION['name'] = $name;
     
    header("location: home.php");
    
    
         
  	}
  }
  else {
     	 $message = "please enter correct password";
    $_SESSION['message'] = $message;
  }
}
?>