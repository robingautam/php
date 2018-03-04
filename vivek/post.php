<?php
$db = mysqli_connect("localhost", "root", "", "chatbook");
?>
<?php

function submitpost($db){
 $textarea = $_POST['text'];
 $email = $_SESSION['email'];
 $name = $_SESSION['name'];
 if (!empty($textarea)){

 $query = "INSERT INTO post (name, email, textarea) VALUES ('$name', '$email','$textarea')";
 $result = mysqli_query($db, $query);
 header("location: home.php");
 exit();

}
}
function getpost($db)
{
	$query = "SELECT * FROM post";
	$result = mysqli_query($db, $query);
	
		while($row = mysqli_fetch_assoc($result)){
            echo $row['name']."<br>";
            echo $row['textarea']."<br>";
		}
	}
?>