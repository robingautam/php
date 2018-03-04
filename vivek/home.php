<?php
session_start();
include("post.php");
include("image1.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1> <?php if (isset($_SESSION['email'])){ echo "welcome "; echo $_SESSION['name'];} else {

		echo "you need to login";
	} ?></h1>
	<?php if (!isset($_SESSION['email'])){
    
	} 
	else {
      echo"
      	<a href='logout.php'>logout</a>";
      }
      ?>

		

	
</body>
</body>
</html>