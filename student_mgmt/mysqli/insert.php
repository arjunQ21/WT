<?php

$con = mysqli_connect("localhost", "root", "", "first_year") ;

$sql = "Insert into students values(null, 'shyam', 'lakeside', '9856098560', 91)" ;

$result = mysqli_query($con, $sql ) ;

echo "<pre>" ;

// print_r(mysqli_fetch_all($result)) ;
echo mysqli_affected_rows($con) ;
// var_dump(mysqli_error_list($con));
// echo mysqli_connect_errno() ;