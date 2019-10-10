<?php 
$id = 0 ;
//if id is some digit
if(is_numeric($_GET['id'])){
	$id = $_GET['id'] ;
}
//if the given id from query string is not a digit, we end the script right here.
if(! $id ){
	die("Please give some valid numeric id to edit. Pass id from Query String.(..?id=5)") ;
}

require_once "../../mysqli/connection.php" ;

//for deleting the user
if(isset($_GET['delete'])){
	// if the value of delete is not empty
	if($_GET['delete'] == 1){
		mysqli_query($connection, "DELETE FROM students WHERE id = $id") ;
		header("Location: index.php?message=Deleted user with id: $id") ;
	}
}

// to show previous data of students in input fields, we populate the $previous array, and put the values inside this array in input fields' value attributes.
$previousDataResult = mysqli_query($connection, "SELECT * FROM students WHERE id = ". $id ) ;
$previous = mysqli_fetch_assoc($previousDataResult) ;

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
<p>
	<?php 
		if(isset($_GET['message'])){
			echo $_GET['message'] ;
		}
	?>
</p>
<div class="cont">
	<h2 class="headText">
		Edit info of student with id = <?= $id ?>
	</h2>
	<form action='../action/edit.php' method = "POST">
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