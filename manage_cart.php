<?php
session_start();
$connect = mysqli_connect('localhost','root',"",'cocktail_project');


if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(isset($_POST['add_to_cart']))
	{
		if(isset($_SESSION['cart']))
		{
			$items=array_column($_SESSION['cart'], 'item_name');
			// search item name from items array
			if(in_array($_POST['item_name'],$items)){
				echo "<script>
				alert('Item Already Added');
				window.location.href='index.php';
				</script>";
			}

			else{
			$count=count($_SESSION['cart']);
            
			$_SESSION['cart'][$count]=array('item_name'=>$_POST['item_name'],'item_id'=>$_POST['item_id'], 'item_price'=>$_POST['item_price'], 'quantity'=>1 );

			if($_SESSION['username'])
		    {
			echo "Item Added";
			$customer_name = $_SESSION['username'];
			$item_name = $_POST["item_name"];
			$insertsql="INSERT INTO customerdrink (username, drink) VALUES ('$customer_name', '$item_name')";
		    $insertquery = mysqli_query($connect,$insertsql);
		   }  
			
			echo "<script>
				alert('Item Added');
				window.location.href='index.php';
				</script>";
			}
		}
		else{
			$_SESSION['cart'][0]=array('item_name'=>$_POST['item_name'],'item_id'=>$_POST['item_id'], 'item_price'=>$_POST['item_price'], 'quantity'=>1 );
				echo "<script>
				alert('Item Added');
				window.location.href='index.php';
				</script>";
		}
	}
	if(isset($_POST['remove_item']))
	{
		// session cart as associative array with key-value pairs
		foreach($_SESSION['cart'] as $key=>$value)
		{
			if($value['item_name']==$_POST['item_name']){
				unset($_SESSION['cart'][$key]);
				$_SESSION['cart']=array_values($_SESSION['cart']);
				echo "<script>
				alert('Item removed');
				window.location.href='mycart.php';
				</script>";
			}
			}
			if($_SESSION['username'])
		    {
			echo "Item Added";
			$customer_name = $_SESSION['username'];
			$item_name = $_POST["item_name"];
			$insertsql="DELETE FROM customerdrink where username='$customer_name' AND drink='$item_name'";
		    $insertquery = mysqli_query($connect,$insertsql);
		   }  


		}
	}


?>