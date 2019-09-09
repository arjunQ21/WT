<?php 
$id = 0 ;
//if id is some digit
if(is_numeric($_GET['id'])){
	$id = $_GET['id'] ;
}
//if the given id from query string is not a digit, we end the script right here.
if(! $id ){
	die("Please give some valid numeric id to show details for. Pass id from Query String.(..?id=5)") ;
}

require_once "../../mysqli/connection.php" ;

// to show previous data of students in input fields, we populate the $previous array, and put the values inside this array in input fiels' value attributes.
$detailsInDB = mysqli_query($connection, "SELECT * FROM students WHERE id = ". $id ) ;
$details = mysqli_fetch_assoc($detailsInDB) ;

?>
<!DOCTYPE html>
<html>
<head>
	<title> Details </title>
	<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
</head>
<body>
<div class="home">
	<a href="./">All Students</a>
	<a href="./create.php">Create New</a>
	<a href='./edit.php?id=<?= $id ?>'>Edit this student </a>
</div>
<div class="cont">
	<h2 class="headText">Details of Student with id <?php echo $id; ?></h2>
	<table class="twoCols sec_details">
		<tr>
			<td>ID</td>
			<td><?= $details['id'] ?></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><?= $details['name'] ?></td>
		</tr>
		<tr>
			<td>Roll</td>
			<td><?= $details['roll'] ?></td>
		</tr>
		<tr>
			<td> Address </td>
			<td> <?= $details['address'] ?> </td>
		</tr>
		<tr>
			<td>Phone</td>
			<td><?= $details['phone'] ?></td>
		</tr>

	</table>
</div>
<script type="text/javascript" src = "../../assets/js/script.js"></script>
</body>
</html>