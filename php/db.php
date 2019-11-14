<?php

$connection = mysqli_connect("localhost", "root", '', 'student_mgmt') ;
if(!$connection){
	die("Unable to connect to db.") ;
}
// Reading
// $sql = "select * from students" ;
// $result = mysqli_query($connection, $sql) ;
// $rows = mysqli_fetch_all($result) ;
// print_r($rows) ;

//Inserting / Creating
// $sql = "insert into students values(null, 'arjun', 'hemja', 'xaina', 45) ";
// mysqli_query($connection, $sql) ;
// if($errors = mysqli_error_list($connection)){
// 	print_r($errors) ;
// }else{
// 	echo "inserted successfully.";
// }

//Updating
// $sql = "update students set name = 'kali' where roll = 45" ;
// mysqli_query($connection, $sql) ;
// if(mysqli_affected_rows($connection)){
// 	echo "row updated.";
// }else{
// 	echo 'row not updated, Possible Error:   ' ;
// 	print_r(mysqli_error_list($connection)) ;
// }

// Deleting
// $sql = "delete from students where id = 4" ;
// mysqli_query($connection, $sql) ;
// if(mysqli_affected_rows($connection)){
// 	echo "deleted" ;
// }else{
// 	echo "not deleted. Error:" ;
// 	print_r(mysqli_error_list($connection)) ;
// }


