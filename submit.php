<?php
session_start();
include 'config.php';
\Stripe\Stripe::setVerifySslCerts(false);
// token containing info when request is made
$token = $_POST['stripeToken'];
$data = \Stripe\Charge::create(array
(
	"amount"=>$_SESSION['total'],
	"currency"=>"BDT",
	"description"=>"A Shop That Sells Everything",
	"source"=>$token,
));
echo "<pre>";
if ($data)
{
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>Document</title>
  	<style type="text/css">
  		body
  		{
  			min-height: 100vh;
  			display: flex;
  			justify-content: center;
  			align-items: center;
  		}
  	</style>
  </head>
  <body>
  	<h2>Payment Successful</h2>
  	<a href="index.php">Go Back Home</a>
  </body>
  </html>
  <?php
}
  ?>