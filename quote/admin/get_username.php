<?php
include 'includes/db_connect.php';

$state = $_REQUEST['get_option'];

$find = mysqli_query($db, "SELECT `id` FROM `users` WHERE `username`='$state'");
echo $no = mysqli_num_rows($find);
?>