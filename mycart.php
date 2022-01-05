<!--  Navbar Starts -->
<?php
include 'header.php';
?>
<!-- Navbar Ends -->
	<body>

		<div class="container">
			<div class="text-center border rounded bg-light my-5">
					<h1>My Cart</h1>
			</div>
			<div class="row">
				
				<div class="col-lg-9">
					<table class="table">
							  <thead class="text-center">
							    <tr>
							      <th scope="col">Serial No.</th>
							      <th scope="col">Item name</th>
							      <th scope="col">Item Price</th>
							      <th scope="col">Quantity</th>
							      <th scope="col">Total</th>
							      <th scope="col"></th>
							    </tr>
							  </thead>
							  <tbody class="text-center">
							  	<?php

							  
							  	if(isset($_SESSION['cart'])){


							  	foreach ($_SESSION['cart'] as $key=>$value)
							  	{	
							  		$sr=$key+1;
							  		
							  		echo"
										<tr>
										<td>$sr</td>
										<td>$value[item_name]</td>
										
										<td>$value[item_price]<input type='hidden' class='iprice' value='$value[item_price]'</td>
										
										<td><input class='text_center iquantity' onchange ='subTotal()' type='number' value ='$value[quantity]' min='1' max='10'</td>
										<td class='itotal'></td>
										<td>
										<form action='manage_cart.php' method='POST'>
										<button name='remove_item' class='btn btn-sm btn-outline-danger'>REMOVE</button></td>
										<input type='hidden' name='item_name' value='$value[item_name]'>
										</form>
										</td>
										</tr>
							  		";
							  	}
							  }
							  	?>
							    
							    
							  </tbody>
					</table>



				</div>
				<div class="col-lg-3">
					<div class="border bg-light rounded p-4">
					<h4>Grand Total:</h4>
					
					<h5 class="text-right" id="gtotal"></h5>
					<br>
							<script>
			
			var gt=0;
			var iprice=document.getElementsByClassName('iprice');
			var iquantity=document.getElementsByClassName('iquantity');
			var itotal=document.getElementsByClassName('itotal');
			var gtotal=document.getElementById('gtotal');

			function subTotal()
			{
				gt=0;
				for(i=0;i<iprice.length;i++)
				{
					itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
					gt=gt+(iprice[i].value)*(iquantity[i].value);
				}
				gtotal.innerText=gt.toFixed(2);
				localStorage.clear();
				localStorage.setItem("total", gt);
				
			
				
			}

			subTotal();



		</script>
					<form>
						
					</form>
						
						<br>
						<?php
						if (isset($_SESSION['username']))
						{
							?>
							<button type="submit" class="btn btn-primary" onclick="location.href='\payment.php?total='+ localStorage.getItem('total')">Make Payment</button>
						<?php
					    }
					else
					{

						?>
						<a href="login.php" class="btn btn-primary">Please Login To Make Purchase</a>
						<?php
					}
						?>
						
				    </div>
				</div>
			</div>
		</div>

	</body>
	</html>