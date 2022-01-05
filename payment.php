<?php
session_start();
include ('config.php');
$total = (float)$_GET['total'];
$total = $total *100;
if($total == 0)
{
	header("Location :index.php");
}
$_SESSION['total'] = $total;
?>
<style type="text/css">
	body
	{
		min-height: 100vh;
		display: flex;
		justify-content: center;
		align-items: center;
	}
</style>
<body >
	<form action="submit.php" method="POST">
<!-- call API -->
		<script
			src="https://checkout.stripe.com/checkout.js" class="stripe-button"
			data-key="<?php echo $publishedKey ?>"
			data-amount="<?php echo $total ?>"
			data-name="test"
			data-image=""
			data-currency="BDT"
       >
      
       </script>
   </form>
</body>
</html>

	

