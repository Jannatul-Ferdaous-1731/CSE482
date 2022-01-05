<?php
include 'header.php';
if (isset($_POST['submit']))
{
  
  // store data from user info in a variable
  // skips the special characters used in sql
  $userName = mysqli_real_escape_string($connect, $_POST['username']);
  $email = mysqli_real_escape_string($connect, $_POST['email']);
  $phone = mysqli_real_escape_string($connect, $_POST['phone']);
  $address = mysqli_real_escape_string($connect,$_POST['address']);
  $password = mysqli_real_escape_string($connect, $_POST['password']);
  $cpassword= mysqli_real_escape_string($connect, $_POST['cpassword']);
  // Hashing algorithm
  $Pwd = password_hash($password,PASSWORD_BCRYPT);
  $hashedPwd = password_hash($cpassword,PASSWORD_BCRYPT);
  $emailsql = "SELECT * FROM registereduser WHERE email='$email' ";
  $query = mysqli_query($connect,$emailsql);
  $emailcount= mysqli_num_rows($query);

// Email is unique, Can't register a user with a existing email
  if($emailcount>0){
echo"email already exist";
  }

  else{
    if($password=== $cpassword){
      $insertsql="INSERT INTO registereduser (username, email, mobile, password, cpassword,address) VALUES ('$userName', '$email', '$phone', '$Pwd', '$hashedPwd','$address')";
      // executes the query
      $insertquery = mysqli_query($connect,$insertsql);
  }
    else{
      echo"password not match";
    }
 }
}

  