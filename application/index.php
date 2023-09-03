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
            <h1>CRUD APPLICATION</h1>
            <br>
            <br>
            <div class="form">
                <form action="ok.php" method="post">
                    <center>
                    <input type="text" name="name" placeholder="Enter Your Name Here....." required>
                    <br>
                    <br>
                    <input type="text" name="mobile" placeholder="Enter Your Mobile Num Here......" required>
                    <br>
                    <br>
                    <input type="text" name="age" placeholder="Enter Your Age Here........" required>
                    <br>
                    <br>
                    <input type="submit" name="submit" value="Submit">
                    </center>
                </form>
            </div>
        </div>
        <div class="table-data">
            <table>
                <tr>
                    <th>S.no</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Age</th>
                    <th>Actions</th>
                </tr>
                <?php
                //database connection.....
                $conn=mysqli_connect('localhost','root','') or die(mysqli_error());
                //select database.....
                $select_db=mysqli_select_db($conn,'crud') or die(mysqli_error());

                $sql="SELECT * from crud_1";
                $result=mysqli_query($conn,$sql)or die(mysqli_error());
                $count=1;
                if($result==true){
                    while($row=mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $user_name=$row['user_name'];
                        $mobile=$row['user_mobile'];
                        $age=$row['user_age'];
                        ?>
                        <tr>
                        <td><?php echo $count++?></td>
                        <td><?php echo $user_name?></td>
                        <td><?php echo $mobile?></td>
                        <td><?php echo $age?></td>
                        <td><a href="edit.php?id=<?php echo $id ?>"><input type="button" value="Update" class="primary"></a>
                        <a href="delete.php?id=<?php echo $id ?>"><input type="button" value="Delete" class="danger"></a></td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>