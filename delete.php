<?php
	if(ISSET($_GET['id'])){
		require_once 'dbconfig.php';
		$id = $_GET['id'];
		$sql = $conn->prepare("DELETE from `student` WHERE `stud_id`='$id'");
		$sql->execute();
		header('location:index.php');
	}
?>