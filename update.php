
<?php
	require_once 'dbconfig.php';
 
	if(ISSET($_POST['update'])){
		try{
			$id = $_GET['id'];
			$fullname = $_POST['fullname'];
			$course = $_POST['course'];
			$address = $_POST['address'];
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE `student`SET `fullname` = '$fullname', `course` = '$course', `address` = '$address' WHERE `stud_id` = '$id'";
			$conn->exec($sql);
		}catch(PDOException $e){
			echo $e->getMessage();
		}
 
		$conn = null;
		header('location:index.php');
	}
?>