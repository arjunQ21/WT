<?php 
//php code copied from edit.php
$hasId = 0 ;
$id = 0 ;
// if id is supplied from query string
if(isset($_GET['id'])){
	// if id is not null, i.e, has some values
	if($_GET['id']){
		//if id is some digit
		if(is_numeric($_GET['id'])){
			$hasId = 1 ;
			$id = $_GET['id'] ;
		}
	}
}
if(! $hasId){
	die("Please give some valid numeric id to show details. Pass id from Query String.(..?id=5)") ;
}

//Making dummy data for showing data
$details = 	[	
		'id' => 5,
		'name' => "Arjun",
		'roll' => 11,
		'address' => "Pokhara",
		'phone' => '989898',
	] ;

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