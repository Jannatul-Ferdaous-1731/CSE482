<?php
include 'header.php';
?>

<section class="form-section">
	<div class="form-container">
		<form action="adminLoginData.php" method ="POST">
            <div class="input-group flex-nowrap">
  			   <span class="input-group-text" id="addon-wrapping">
  			   	<i class="fas fa-envelope-open"></i>
  			   </span>
               
               <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="addon-wrapping" required >
            </div>
            <div class="input-group flex-nowrap">
  			   <span class="input-group-text" id="addon-wrapping">
  			   	<i class="fas fa-lock"></i>
  			   </span>
               <input type="password" name="password" class="form-control" placeholder="Create Password" aria-label="Username" aria-describedby="addon-wrapping" required>
            </div>
            <button type="submit" name="submit" class="d-block mx-auto mt-2 btn btn-primary btn-sm">Login</button>
		</form>
	</div>

</section>
<?php
include 'footer.php';
?>