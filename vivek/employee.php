<?php
session_start();
include("image1.php");
?>
<?php
function employee($db)
  {
   $db = mysqli_connect("localhost", "root","", "chatbook");
  $query = "SELECT * FROM employee WHERE id = '".$employee['id']."'";
  $result = mysqli_query($db, $query);
  echo "<h1>welcome</h1>";
  $employeed = mysqli_fetch_array($result);
  	$_SESSION['name'] = $employeed['name'];
  	$id = $employeed['id'];
  	$_SESSION['age'] = $employeed['age'];
  	$_SESSION['gender'] = $employeed['gender'];
    echo "<h1>".$employeed['name']."</h1>";
   
         }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php employee($db);  ?>


</body>
</html>