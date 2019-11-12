<!DOCTYPE html>
<html>
<head>
	<title>PHP sikda ko</title>
</head>
<body style='font-family: Tahoma;'>
	<?Php 

$names = ['arjun', 'adhikari','aiyana'] ;
for($i = 0 ; $i < 3; $i++){
	echo $names[$i]. "<br>" ;
}

	?>
<form action = 'handleData.php' method = "GET">
	Name: 
	<input type="text" name="person_name">
	<br><br><br>
	Roll: 
	<input type="number" name="roll">
	<br><br><br>
	Age: 
	<input type="number" name="age">
	<br><br><br>
	Address: 
	<input type="text" name="address">
	<br><br><br>
	<input type="submit" name="submit" value = 'Send This Person'>
</form>
</body>
</html>