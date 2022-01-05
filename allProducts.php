<?php
	include 'header.php';

?>

<section class="products container">
 <?php
    $query = "select * from cocktails order by id";
    $result = mysqli_query($connect,$query);

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
               echo $row['price'];
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
        <?php
       
      }
    
    }
     
      ?>
      

 </section>