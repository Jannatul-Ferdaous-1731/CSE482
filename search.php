<?php
  include 'header.php';
?>
 	


 <?php
	if (isset($_POST['searchedItem']))
	{
		if (empty($_POST['searchedItem']))
		{
			echo "<h1>No Results Found</h1>";
		}
		else
		{
			$searchedItem = $_POST['searchedItem'];
            $query = "select * from cocktails where name LIKE '%$searchedItem%'";
       
            $result = mysqli_query($connect,$query);
            $count =  mysqli_num_rows($result);
  ?>
               <div class="container py-2">
               	 <h3>Number of Items Found: <?php echo $count; ?> </h3>
               </div>
         <section class="container products result-section">
         	



         
               <?php
			  if (mysqli_num_rows($result)>0)
			  {

			    while ($row = mysqli_fetch_array($result))
			     {
			        
				?>
          
    
          <form action="manage_cart.php" method="POST">
  
        <!-- Single Product Starts -->  
          <div class="single-product">
             <div class="img-container">
               <img src="<?php echo $row['image']; ?>" class="drink-img" alt="Something">
               <div class="img-overlay">
                  <p class="drink-name lead text-center fw-bold">
              <?php 
               echo $row['name'];
               echo '<br>';
              echo $row['price']." BDT";


              ?>
             </p>
               </div>
               

             </div>
             
             <div class="price"><?php 
             
              ?>
             
             <div class="d-grid gap-2">
                <button type="submit" name ="add_to_cart" class="btn btn-primary mt-2" >Order!!</button>
              </div>  
                
                <!-- input hidden -->

                <input type="hidden" name="item_id" value="<?php echo $row["id"];?>"> 
                <input type="hidden" name="item_name" value="<?php echo $row["name"];?>">
                <input type="hidden" name="item_price" value="<?php echo $row["price"];?>">  
            </div>
         </div>
        <!-- Single Product Ends -->
        </form>
        <!-- Single Product Ends -->

        
 <?php
       
     }
    
  }
 
 ?>
  </section>

		<?php	
		}
	}

	   include "footer.php";
	    ?>
	<script type="text/javascript" src="./scripts/main.js"></script>
</body>
</html>