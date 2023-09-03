<?php
    //database connection.....
    $conn=mysqli_connect('localhost','root','') or die(mysqli_error());
    //select database.....
    $select_db=mysqli_select_db($conn,'crud') or die(mysqli_error());
    //fetch data from form
    $username=$_POST['name'];
    $mobile=$_POST['mobile'];
    $age=$_POST['age'];

    //sql query to insert data
    $sql="INSERT INTO crud_1 SET user_name='$username',user_mobile='$mobile',user_age='$age'";
    //execute query
    $result=mysqli_query($conn,$sql) or die(mysqli_error());

    if($result==true){
       header("location:index.php");
    }
    else{
        echo "Error occurred";
    }
?>