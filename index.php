<!--  Navbar Starts -->
<?php
      include "header.php";
    
?>
<!-- Navbar Ends -->
 <!-- Search Sdection Starts -->
<section class="search-section py-4">
  <div class="container">
    <div class="header-section">
      <h1 class="text-center display-2">Search Your Drink</h1>
      <div class="underline"></div>
    </div>

    <div class="search-form-container">
        <form action="search.php" method="POST">
          <input type="text" class="text-input" placeholder="Search Here...." name="searchedItem" >
        </form> 
    </div>

  </div>
</section>
 <!-- Search Section Ends -->
 <!-- Product Section Starts -->
<div class="header-section">
    <h1 class="text-center display-2">Our Drinks</h1>
    <div class="underline"></div>
</div>
<section class="products container">
 <?php
 //order by asc, 9 items shown
    $query = "select * from cocktails order by id asc limit 9";
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
 <div class="container text-center mt-3">
        <a href="allProducts.php" class="btn btn-primary">Show All</a>
      </div>
 <!-- Product Section Ends -->

 <!-- Offer Section Starts -->
 <section class='offer-section mt-3'>
  <div class="header-section">
    <h1 class="text-center display-2">Available Offers</h1>
    <div class="underline"></div>
  </div>
  <div class="container">   
    <div class="row">
      <div class="col-md-6 col-12">
        <div class="img-container">
            <img src="./images/offer.png" alt="Offer">
        </div>
      </div>
      <div class="col-md-6 col-12 d-flex justify-content-center align-items-center">
        <div class="offer-info text-center ">
          <h1 class="display-1">Virgin Mojito</h1>
          <h3 class="display-2">Buy 2 get 1 free</h3>
          <h5>Only at 150Tk</h5>
        </div>
      </div>
        
    </div>  
  </div>
</section>
 <!-- Offer Section Ends -->
 <!-- About Section Starts -->
 <section class="py-3 about-section mt-3">
    <h1 class="display-1 text-center">Happy With Our Service?</h1> 
    <a href="#">
      <a href="about.php" class="btn btn-secondary mt-2">Meet The Developers....</a>
    </a> 
 </section>
 <!-- About Section  Ends -->
 <!-- Footer Section Starts -->
 <?php
 include 'footer.php';
 ?>
 <!-- Footer Section Ends -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript" src="./scripts/main.js"></script>
</body>
</html>
