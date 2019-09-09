<?php 
$id = 0 ;
//only run this script if the request method is POST
if($_SERVER['REQUEST_METHOD'] == "POST"){
	//since we cannot find a student by id if his id is not a digit, we should end the script
	if( ! is_numeric($_POST['id'])){
		die("id must be a digit.") ;
	}else{
		$id = $_POST['id'] ;
	}
	//getting data from the form
	$newName = $_POST['s_name'] ;
	$newPhone = $_POST['s_phone'] ;
	$newAddress = $_POST['s_address'] ;
	$newRoll = (int)$_POST['s_roll'] ; // parsing rollnumber to integer

	//Naya line ma lekhda alli readable hunxa vanera
	$query = "UPDATE students SET 
					name = '$newName', 
					phone = '$newPhone', 
					address = '$newAddress', 
					roll = $newRoll 
				WHERE id = $id ";
	// echo $query ;
	// die($query);

	//getting connection variable
	require_once "../../mysqli/connection.php" ;

	//running the query now
	mysqli_query($connection, $query) ;

	// cheking if there occurred some errors, and ending the script showing error if there were any
	if(mysqli_error_list($connection)){
		die("Error: " . mysqli_error_list($connection)[0]['error']) ;
	}


	//if our query ran successfully, and the row was updated, 1 row will be affected
	// as we see in => Rows Affected: 1
	//so if rows affected == 1, our update was done
	//else some error occurred
	if(mysqli_affected_rows($connection) == 1){
		//for successfully updated case
		//lets show the updated details of the user
		//by redirecting them to ../views/show.php?id=$id
		header("Location: ../views/show.php?id=$id") ;
	}else{
		//if the row was not updated
		header("Location: ../views/edit.php?id=$id&message=Some error occurred while updating.") ;
	}

}

?>