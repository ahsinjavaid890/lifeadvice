<?php
error_reporting(0);
$db = mysqli_connect("localhost","root","root","lifeadvice");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>