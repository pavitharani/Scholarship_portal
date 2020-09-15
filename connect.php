<?php 
$conn=new mysqli('localhost','pavi','','test');
if($conn->connect_error){
      die('connection Failed: '  .$conn>connect_error);
}
echo "Connected successfully";
mysqli_select_db($conn,"test");
echo "\ndb is selected as test successfully";
$sql = "INSERT INTO  login  (username,password) VALUES ('$_POST[username]','$_POST[password]')";
if ($conn->query($sql) === TRUE) {
           echo '<script>alert("Successfully Login")</script>';
		   header("Location: about.php");
}
mysqli_close($conn);
?>                  


