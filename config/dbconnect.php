<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$db_name = 'sri_color_db';

$con = mysqli_connect($hostname,$username,$password) or die("Enter Correct details....");
mysqli_select_db($con,$db_name) or die('Database Name does not exists....');
