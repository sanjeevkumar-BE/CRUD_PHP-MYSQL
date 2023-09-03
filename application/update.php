<?php
$id=$_POST['id'];
$user_name=$_POST['name'];
$user_mobile=$_POST['mobile'];
$user_age=$_POST['age'];

//database connection.....
$conn=mysqli_connect('localhost','root','') or die(mysqli_error());
//select database.....
$select_db=mysqli_select_db($conn,'crud') or die(mysqli_error());

$sql="UPDATE crud_1 SET user_name='$user_name',user_mobile='$user_mobile',user_age='$user_age' WHERE id='$id'";

$result=mysqli_query($conn,$sql) or die(mysqli_error());

if($result==true){
    header('location:index.php');
}
?>