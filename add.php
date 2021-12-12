<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<style>
    
    body{
            background-color: #D3D3D3;
        }
        .container-main {
            margin: auto;
            width: 100%;
            padding-top: 20px;
            padding-left: 44px;
        }
        .form-group{
            padding-top: 7px;
        }
    </style>
<body>
<nav class="navbar navbar-dark bg-primary navbar-expand-lg bg-dark px-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php" >IM FINAL PROJECT</a>
            
        </div>
        
    </nav>
<div class="container-main">
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - PDO CRUD</h3>
		<div class="col-md-6">
			<form method="POST" action="add.php">
				<div class="form-group">
					<label>Fullname</label>
					<input class="form-control" type="text" name="fullname"/>
				</div>
				<div class="form-group">
					<label>Course</label>
					<input class="form-control" type="text" name="course"/>
				</div>
				<div class="form-group">
					<label>Address</label> 
					<input class="form-control" type="text" name="address"/>
				</div>
				<div class="form-group">
					<button class="btn btn-primary form-control" type="submit" name="save">Add</button>
				</div>
			</form>
		</div>

        <?php
	require_once 'dbconfig.php';
    
        if(ISSET($_POST['save'])){
            try{
                $fullname = $_POST['fullname'];
                $course = $_POST['course'];
                $address = $_POST['address'];
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "INSERT INTO `student` (`fullname`, `course`, `address`) VALUES ('$fullname', '$course', '$address')";
                $conn->exec($sql);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
    
            $conn = null;
            header('location:index.php');
        }
    ?>

</div>


       

</body>
</html>


