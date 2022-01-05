<?php
include 'header.php';
?>

<section class="form-section">
	<div class="form-container">
		<form action="registerData.php" method ="POST">
			<div class="input-group flex-nowrap">
  			   <span class="input-group-text" id="addon-wrapping">
  			   	<i class="fas fa-user"></i>
  			   </span>
               <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" required>
      </div>
      <div class="input-group flex-nowrap">
           <span class="input-group-text" id="addon-wrapping">
            <i class="far fa-address-book"></i>
           </span>
               <input type="text" name="address" class="form-control" placeholder="Enter Your Address" aria-label="Username" aria-describedby="addon-wrapping" required>
      </div>
            <div class="input-group flex-nowrap">
  			   <span class="input-group-text" id="addon-wrapping">
  			   	<i class="fas fa-envelope-open"></i>
  			   </span>
               
               <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="addon-wrapping" required >
            </div>
            <div class="input-group flex-nowrap">
  			   <span class="input-group-text" id="addon-wrapping">
  			   	<i class="fas fa-phone"></i>
  			   </span>
               <input type="text" name="phone" class="form-control" placeholder="Phone Number" aria-label="Username" aria-describedby="addon-wrapping" required pattern="^01[0-9]{9}$">
            </div>
            <div class="input-group flex-nowrap">
  			   <span class="input-group-text" id="addon-wrapping">
  			   	<i class="fas fa-lock"></i>
  			   </span>
               <input type="password" name="password" class="form-control" placeholder="Create Password" aria-label="Username" aria-describedby="addon-wrapping"  minlength="7" required>
            </div>
             <div class="input-group flex-nowrap">
  			   <span class="input-group-text" id="addon-wrapping">
  			   	<i class="fas fa-key"></i>
  			   </span>
               <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password" aria-label="Username" aria-describedby="addon-wrapping" minlength="8" required>
            </div>
            <button type="submit" name="submit" class="d-block mx-auto mt-2 btn btn-primary btn-sm">Create Account</button>
		</form>
    <p class="lead">Already Have An Account? <a href="login.php">Login</a> </p>
	</div>

</section>

<?php
include 'footer.php';

?>