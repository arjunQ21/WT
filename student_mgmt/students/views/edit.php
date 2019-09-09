<?php 
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
	die("Please give some valid numeric id to edit. Pass id from Query String.(..?id=5)") ;
}

//Making dummy data for showing previous data in input fields
$previous = 	[	
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
	<title>Edit</title>
	<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
</head>
<body>
<div class="home">
	<a href="./">All Students</a>
	<a href="./create.php">Create New</a>
</div>
<div class="cont">
	<h2 class="headText">
		Edit info of student with id = <?= $id ?>
	</h2>
	<form action='edit.php'>
		<table class='twoCols'>
			<tr>
				<td>Name:</td>
				<td colspan="2">
					<input type="text" name="s_name" value = "<?= $previous['name'] ?>" >
				</td>
			</tr>
			<tr>
				<td>Roll No.:</td>
				<td colspan="2">
					<input type="number" name="s_roll" value = "<?= $previous['roll'] ?>" >
				</td>
			</tr>
			<tr>
				<td>Address:</td>
				<td colspan="2">
					<input type="text" name="s_address" value = "<?= $previous['address'] ?>" >
				</td>
			</tr>
			<tr>
				<td>Phone:</td>
				<td colspan="2">
					<input type="text" name="s_phone" value = "<?= $previous['phone'] ?>" >
				</td>
			</tr>
			<!-- sending id of the student to server,  -->
			<input type="hidden" name="id" value = "<?= $id ?>">
			<tr class='buttons'>
				<td></td>
				<td><input type="submit" name="s_submit" value = "Edit"></td>
				<td><a href="./">Cancel</a></td>
			</tr>
			<tr>
				<td></td>
				<td><a href='edit.php?id=<?= $id ?>&delete=1' style='background: rgba(255, 0,0,0.5); color: #333; font-weight: bold ;'>Delete This Student</a></td>
				<td></td>
			</tr>
		</table>
	</form>
</div>
<script type="text/javascript" src = "../../assets/js/script.js"></script>
</body>
</html>