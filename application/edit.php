<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create database</title>
    <style>
        .container{
            width: 80%;
            margin: 0 auto;
            background-color: aquamarine;
        }
        .form-data{
            height: 60vh;
        }
        .form-data h1{
            text-align: center;
            font-family: arial;
        }
        .form{
            width: 80%;
            margin: 0 auto;
            
        }
        input{
            width: 35vw;
            height: 5vh;
            font-size: larger;
        }
        th{
            border: 1px solid black;
            padding:5%;
            width:20vw;
            background-color:black;
            color:white;
        }
        .table-data input{
            width:10vw;
        }
        td{
            border: 1px solid black;
            padding:5%;
            width:20vw;
        }
        .primary{
            background-color:#767FF1;
        }
        .danger{
            background-color:#E07486;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-data">
            <br>
            <br>
            <h1>Update</h1>
            <br>
            <br>
            <?php
            $id=$_GET['id'];
            $conn=mysqli_connect('localhost','root','') or die(mysqli_error());
            //select database.....
            $select_db=mysqli_select_db($conn,'crud') or die(mysqli_error());

            $sql="SELECT * FROM crud_1 WHERE id=".$id;

            $result=mysqli_query($conn,$sql);
            if($result==true){
                $row=mysqli_fetch_assoc($result);
                $user_name=$row['user_name'];
                $user_mobile=$row['user_mobile'];
                $user_age=$row['user_age'];
            }

            ?>
            <div class="form">
                <form action="update.php" method="post">
                    <center>
                    <input type="text" name="name" value="<?php echo $user_name;?>" required>
                    <br>
                    <br>
                    <input type="text" name="mobile" value="<?php echo $user_mobile;?>" required>
                    <br>
                    <br>
                    <input type="text" name="age" value="<?php echo $user_age;?>" required>
                    <br>
                    <br>
                    <input type="hidden" name="id" value="<?php echo $id?>">
                    <input type="submit" name="submit" value="Update">
                    </center>
                </form>
            </div>
        </div>
    </div>
    </body>
    </html>