<?php
session_start();
?>
<?php
$connect = mysqli_connect('localhost','root',"",'cocktail_project');
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <!-- Bootstrap CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- My CSS -->
  <link rel="stylesheet" type="text/css" href="./styles/main.css">
 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <title>Cocktail BD</title>
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
          <div class="container">
              <a class="navbar-brand" href="index.php">
              <img src="./images/logo.png" class="main-logo">
              Drink Factory
              </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto text-center fs-4">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <?php
          if(isset($_SESSION['username']))
          {
            ?>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
            <?php

          }
          else
          {
            ?>
            <li class="nav-item">
              <a class="nav-link" href="register.php">Registration</a>
           </li>
           <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
           </li>
           <?php
          }
           ?>
            <li class="nav-item">
            <?php
            $count=0;
            if(isset($_SESSION['cart']))
            {
              $count=count($_SESSION['cart']);
            }
            ?>
              <a class="nav-link" href="mycart.php"><i class="fas fa-glass-martini-alt"></i>(<?php echo $count;?>)</a>
           </li>
           <li class="nav-item">
              <a class="nav-link" href="adminLogin.php">Admin</a>
           </li>      
      </ul>
    </div>
  </div>
</nav>

