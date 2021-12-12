<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
            <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    </head>
    <style>
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
		<h3 style="text-primary">PHP - PDO CRUD</h3>
		<div class="col-md-6">
			<?php
				if(ISSET($_GET['id'])){
					require_once 'dbconfig.php';
					$id = $_GET['id'];
					$sql = $conn->prepare("SELECT * FROM `student` WHERE `stud_id`='$id'");
					$sql->execute();
					$row = $sql->fetch();
				}
			?>
			<form method="POST" action="update.php?id=<?php echo $id?>">
				<div class="form-group">
					<label>Fullname</label>
					<input class="form-control" type="text"  name="fullname"/>
				</div>
				<div class="form-group">
					<label>Course</label>
					<input class="form-control" type="text"  name="course"/>
				</div>
				<div class="form-group">
					<label>Address</label> 
					<input class="form-control" type="text"  name="address"/>
				</div>
				<div class="form-group">
					<button class="btn btn-warning form-control" type="submit" name="update">Update</button>
				</div>
			</form>
			<?php
				$conn = null;
			?>
		</div>
	</div>
</div>

	
 
</body>
 
</html>