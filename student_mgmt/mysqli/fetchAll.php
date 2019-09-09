<?php 

$con = mysqli_connect("localhost", "root", "", "first_year") ;

// $con=mysqli_connect("localhost","my_user","my_password","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT name,address FROM students where id > 2";
$result=mysqli_query($con,$sql);

// Fetch all
	// second params:
	// MYSQLI_ASSOC
	// MYSQLI_NUM
	// MYSQLI_BOTH
$arr = mysqli_fetch_all($result,MYSQLI_ASSOC);
print_r($arr) ;
// Free result set
mysqli_free_result($result);

mysqli_close($con);
?>


?>