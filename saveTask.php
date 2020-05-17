<?php 

require_once('db.php');

if (isset($_POST['save-task'])) {
	$title = $_POST['title'];
	$description = $_POST['description'];

	$query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";

	$result = mysqli_query($conn,$query);

	if (!$result) {
		die("Query failed");
	}


	$_SESSION['message'] = 'Task Saved succesfully';
	$_SESSION['message_type'] = 'success';

	header("Location: index.php");

}	









 ?>