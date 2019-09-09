<?php 

//getting connection variable from mysqli/connection.php
require_once "../../mysqli/connection.php" ;
// var_dump($connection) ;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	// echo "Hi";
	$name = $_POST['s_name'] ;
	$roll = $_POST['s_roll'] ;
	$address = $_POST['s_address'] ;
	$phone = $_POST['s_phone'] ;

	$sql = "insert into students(name, address, phone, roll) values( '$name', '$address', '$phone', $roll )" ;
	// echo $sql ;
	mysqli_query($connection, $sql) ;
	
	//to make sure at least one row is affected
	if(mysqli_affected_rows($connection) > 0){
		echo "data added successfully" ;
		header("Location: ../views/create.php?message=Student with roll number: $roll added successfully.") ;
	}else{
		echo "error" ;
		var_dump(mysqli_error_list($connection)) ;
	}
}

?>