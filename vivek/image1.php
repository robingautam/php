

<?php
$db = mysqli_connect("localhost", "root","", "chatbook");
function setImage($db){
$email = $_POST['email'];

	
   $target = "C://xampp//htdocs//vivek//images/".basename($_FILES["image"]["name"]);
   $db = mysqli_connect("localhost", "root", "", "chatbook");
   $image = $_FILES["image"]["name"];
   //$query = "INSERT INTO image (image) VALUES ('$image')";
   $query = "INSERT INTO  image (email, image) VALUES ('".$_SESSION['email']."', '$image')";
   ( mysqli_query($db, $query));

  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)){
   	   $message = "profile uploaded succesfully";
   	   echo $message;
   	   header("location: home.php");
   }
   else {
   	echo "profile not uploaded";
   }
}
?>
<?php
function getImage($db){
$db = mysqli_connect("localhost", "root","", "chatbook");
  $query = "SELECT * FROM image WHERE email = '".$_SESSION['email']."'";
  $result = mysqli_query($db, $query);
   $row = mysqli_fetch_array($result);
   $_SESSION['image'] = $row['image'];
      echo "<img src='".$_SESSION['image']."' width='200px' height='250px' >";
   }
   function getEmployee($db){
   	    $db = mysqli_connect("localhost", "root","", "chatbook");
  $query = "SELECT * FROM employee";
  $result = mysqli_query($db, $query);
  echo "<h1>list of employee</h1>";
  while( $employee = mysqli_fetch_array($result)){
      $id = $employee['id'];
  	$name = $employee['name'];
  	$id = $employee['id'];
  	$age = $employee['age'];
  	$gender = $employee['gender'];

   
      echo "<a href='employee.php'>".$employee['name']."</a><br>";
   }
   }


?>
