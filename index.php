<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
            <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    </head>
    <style>
        body{
            background-color: #D3D3D3;
        }
        .table-content {
            padding-top: 10px;
        }
        button{
            width: 50px;
            border-radius: 4px;
        }
        a {
            text-decoration: none;
        }
        .add-btn{
            padding-right: 10px;
            float: right;
        }
        h3{
            padding: 2px;
        }
    </style>
<body>
    <nav class="navbar navbar-dark bg-primary navbar-expand-lg bg-dark px-5">
            <div class="container-fluid">
                <a class="navbar-brand">IM FINAL PROJECT</a>
            </div>
        </div>

        </nav>
        
        <div class="container index">
            <h3>List of Students</h3>
            <div class="table-content">
                <table class="table table-bordered table-dark table-striped" >
                <thead>
                    <tr>
                        <th>Fullname</th>
                        <th>Course</th>
                        <th>Address</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody style=" color:rgb(255, 255, 255)">
                        <?php
                            require 'dbconfig.php';
                            $sql = $conn->prepare("SELECT * FROM `student` ORDER BY `stud_id` DESC");
                            $sql->execute();
                            while($row = $sql->fetch()){
                        ?>
                        <tr>
                            <td><?php echo $row['fullname']?></td>
                            <td><?php echo $row['course']?></td>
                            <td><?php echo $row['address']?></td>
                            <td><a href="edit.php?id=<?php echo $row['stud_id']?>">Edit</a> | <a href="delete.php?id=<?php echo $row['stud_id']?>">Delete</a></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                
                </table>
                <div class="add-btn">
                    <button onclick="window.location.href='add.php'">Add</button>
                </div>
            

            </div>
            
        </div>
	</div>
 
</body>
 
</html>