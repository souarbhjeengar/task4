<?php
$con=mysqli_connect("localhost","root","","sakila");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_query($con, "SELECT * FROM actor");
// echo "hello";
