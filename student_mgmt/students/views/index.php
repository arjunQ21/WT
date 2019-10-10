<?php 
// echo "<pre>";

require_once "../../mysqli/connection.php" ;
// var_dump($connection) ;

$sql = 'select * from students ' ;

//$result stores result from query
$result = mysqli_query($connection, $sql) ;
// var_dump($result) ;
//mysqli_fetch_all gives us an associative array of sql output
// and we store it in $assocArray array variable
$assocArray = mysqli_fetch_all( $result, MYSQLI_ASSOC) ;
// print_r($assocArray) ;
// die() ;


?>
<!DOCTYPE html>
<html>
<head>
	<title> List of Students</title>
	<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
</head>
<body>
<div class="home">
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
	<h2 class='headText'>Students' List</h2>
	<br>
	<table class ='details'>
		<tr>
			<th> id </th>
			<th> name </th>
			<th> roll </th>
			<th> address </th>
			<th> phone </th>
			<th> action </th>
		</tr>
		<!-- Showing Data of each student in a single table row -->
		<?php foreach($assocArray as $data){ ?>
			<!-- foreach loop starts -->
			<tr>
				<?php 
				//  < ?= $a ? > is shorthand for < ? php echo $a ; ? >
				?>
				<td><?= $data['id']?></td>
				<td><?= $data['name']?></td>
				<td><?= $data['roll']?></td>
				<td><?= $data['address']?></td>
				<td><?= $data['phone']?></td>
				<td>
					<a href="edit.php?id=<?= $data['id']?>">Edit</a>
					<a href="edit.php?id=<?= $data['id']?>&delete=1" style='background: rgba(255, 0,0,0.2)'>Delete</a>
					<a href="show.php?id=<?= $data['id']?>">Details</a>
				</td>
			</tr>
			<!-- ending foreach  with '}' -->
		<?php } ?>
	</table>
</div>
<script type="text/javascript" src = "../../assets/js/script.js"></script>
</body>
</html>