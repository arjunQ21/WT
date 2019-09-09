<!-- <pre> -->
<?php 

$hostName = "localhost" ;
$db_user = "root" ;
$db_pass = "" ;
$db_name = "student_mgmt" ;

$connection = mysqli_connect($hostName,$db_user, $db_pass, $db_name ) ;

// var_dump($connection) ;

if(!$connection){
	//unable to connect due to some error
	die("Unable to connect to db.") ;
}


?>