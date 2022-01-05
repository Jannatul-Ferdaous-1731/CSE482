<?php
session_start();
$connect = mysqli_connect('localhost','root',"",'cocktail_project');


if (isset($_POST['submit']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	$emailSearch = "select * from registereduser where email = '$email'";
	$query = mysqli_query($connect,$emailSearch); 
	// fetches results as an indexed array
	$emaiCount = mysqli_num_rows($query);

	if ($emaiCount)
	{
		// fetches results as associative array
		$email_pass = mysqli_fetch_assoc($query);
		$fetchedPassword = $email_pass["password"];
		// Verifies the password
		$verify = password_verify($password,$fetchedPassword);

		if ($verify)
		{
			$_SESSION['username'] = $email_pass['username'];
			header("location:index.php");
		}
		else
		{
			echo "<script>
                alert('Incorrect Password');
                window.location.href='login.php';
                </script>";
		}

	}
	else
	{
		echo "<script>
                alert('Invalid Email');
                window.location.href='login.php';
                </script>";
	}

}

