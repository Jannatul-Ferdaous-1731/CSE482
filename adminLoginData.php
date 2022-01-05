<?php
session_start();
$connect = mysqli_connect('localhost','root',"",'cocktail_project');

$super_email = "mahirabsar181@gmail.com";
$super_password = "random123";


if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
    if (($email == $super_email) && ($password == $super_password))
    {
    	header('Location:admin.php');
    }
    else
    {
        echo "<script>
                alert('Not Logged in As Admin');
                window.location.href='login.php';
                </script>";
    }
	
}

