<?php 
$roll = $_GET['roll'] ;
$person_name = $_GET['person_name'];
$age = $_GET['age'];
$address = $_GET['address'];

$sql = "insert into information values($roll, '$person_name', '$address', null, $age)" ;
echo $sql ;
$conn = mysqli_connect("localhost", 'root','', 'peoples') ;
if(!$conn){
	echo "unable to connect to db." ;
}

mysqli_query($conn, $sql) ;

print_r(mysqli_error_list($conn)) ;





?>