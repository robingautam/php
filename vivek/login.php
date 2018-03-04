<?php
session_start();
 $db = mysqli_connect("localhost", "root", "", "chatbook");

 if (isset($_POST['login'])) {
 $email = htmlentities($_POST['email']);
 $password = htmlentities($_POST['password']);
 $password2 = md5($password);

 $query = "SELECT * FROM user1 WHERE email = '$email' AND password = '$password2'";
 $result = mysqli_query($db, $query);
 if (mysqli_num_rows($result) >= 1){
  $rob = mysqli_fetch_assoc($result);
  $_SESSION['email'] = $rob['email'];
  $_SESSION['name'] = $rob['name'];
//  $_SESSION['image'] = $rob['image'];

  header("location: home.php");
  

 }
 else {
  $message = "invalid username and password";
  $_SESSION['message'] = $message;
 }
}

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <h1>please enter the corrct password</h1>

</body>
</html>