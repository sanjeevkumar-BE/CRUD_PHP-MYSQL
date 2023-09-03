<?php 
    $id=$_GET['id'];
    //database connection.....
    $conn=mysqli_connect('localhost','root','') or die(mysqli_error());
    //select database.....
    $select_db=mysqli_select_db($conn,'crud') or die(mysqli_error());
    //fetch data from form

    $sql="DELETE FROM crud_1 WHERE id=".$id;
    $result=mysqli_query($conn,$sql) or die(mysqli_error());
    if($result==true){
        header('location:index.php');
    }
?>