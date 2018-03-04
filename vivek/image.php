<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="image.php" method="post" enctype="multipart/form-data">
		<input type="file" name="image" ><br><br>
		<input type="submit" name="submit">

	</form>

</body>
</html>
<?php
function get($db){
 $db = mysqli_connect("localhost", "root","", "chatbook");
  $query = "SELECT * FROM image";
  $result = mysqli_query($db, $query);
  while ($row = mysqli_fetch_array($result)) {
  	echo "<img src='".$row['image']."' width='200px' height='250px' >";
  }
}

  ?>
<?php
if (isset($_POST['submit'])){
	
   $target = "C://xampp//htdocs//vivek/".basename($_FILES["image"]["name"]);
   $db = mysqli_connect("localhost", "root", "", "chatbook");
   $image = $_FILES["image"]["name"];
   $query = "INSERT INTO image (image) VALUES ('$image')";
    $result = mysqli_query($db, $query);

    get($db);
   
  	
  
   if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)){
   }
   else {
   	echo "image not uploaded";
   }
}

?>