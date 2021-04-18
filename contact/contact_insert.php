<?php 
include 'dbcon.php';

$a = $_POST['user'];
$b = $_POST['email'];
$c = $_POST['subject'];
$d = $_POST['message'];


$data = "insert into contact(name,email,subject,message) values ('$a','$b','$c','$d')";
mysqli_query($con,$data);

header('location:index.php');


?>