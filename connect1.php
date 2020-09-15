<?php 
$conn=new mysqli('localhost','pavi','','test');
if($conn->connect_error){
      die('connection Failed: '  .$conn>connect_error);
}
echo "Connected successfully";
mysqli_select_db($conn,"test");
echo "\ndb is selected as test successfully";
$sql = "INSERT INTO  signup  (username,email,password,Confirm_password,Phone_number) VALUES ('$_POST[username]','$_POST[email]','$_POST[password]','$_POST[Confirm_password]','$_POST[Phone_number]')";
if ($conn->query($sql) === TRUE) {
           header("Location: login.php");
}
mysqli_close($conn);
?>                  
