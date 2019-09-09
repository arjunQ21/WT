


<!DOCTYPE html>
<html>
<head>
	<title>Add New Student</title>
	<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
</head>
<body>
<div class="home">
	<a href="./">All Students</a>
	<a href="./create.php">Create New</a>
</div>
<div class="cont">
	<h2 class="headText">
		Add New Student
	</h2>
	<p>
		<?php 

			if(isset($_GET['message'])){
				echo $_GET['message'] ;
			}
		?>
	</p>
	<form action = "../action/create.php" method = "POST">
		<table class='twoCols'>
			<tr>
				<td>Name:</td>
				<td colspan="2">
					<input type="text" name="s_name">
				</td>
			</tr>
			<tr>
				<td>Roll No.:</td>
				<td colspan="2">
					<input type="number" name="s_roll">
				</td>
			</tr>
			<tr>
				<td>Address:</td>
				<td colspan="2">
					<input type="text" name="s_address">
				</td>
			</tr>
			<tr>
				<td>Phone:</td>
				<td colspan="2">
					<input type="text" name="s_phone">
				</td>
			</tr>
			<tr class='buttons'>
				<td></td>
				<td><input type="submit" name="s_submit" value = "Save"></td>
				<td><a href="./">Cancel</a></td>
			</tr>
		</table>
	</form>
</div>
<script type="text/javascript" src = "../../assets/js/script.js"></script>
</body>
</html>