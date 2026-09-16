<?php

// If transaction data is available in the URL 
if(!empty($_GET['tx']) 
&& !empty($_GET['amt']) && !empty($_GET['cc']) 
&& !empty($_GET['st'])){ 
		// Get transaction information from URL  
		$txn_id = $_GET['tx']; 
		$payment_gross = $_GET['amt']; 
		$currency_code = $_GET['cc']; 
		$payment_status = $_GET['st']; 

		$product_name = "Electric Bike Model 1, Electric Bike Model 2";
        $product_price = "2798.00";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment Gateway</title>
</head>
<body>
	<h1>Payment Info</h1>
	<div class="container">
	    <div class="status">
	        <?php
	        if(!empty($txn_id)){ 
	        ?>
	            <h1 class="success">Your Payment has been Successful</h1>
				
	            <h4>Payment Information</h4>
	            <p><b>Transaction ID:</b> <?php echo $txn_id; ?></p>
	            <p><b>Paid Amount:</b> <?php echo $payment_gross; ?></p>
	            <p><b>Payment Status:</b> <?php echo $payment_status; ?></p>
				
	            <h4>Product Information</h4>
	            <p><b>Name:</b> <?php echo $product_name; ?></p>
	            <p><b>Price:</b> <?php echo $product_price; ?></p>
	        <?php 
	        }else{ 
	        ?>
	            <h1 class="error">Your Payment has Failed</h1>
	        <?php 
	        } 
	        ?>
	    </div>
	    <a href="index.html" class="btn-link">Back to Products</a>
	</div>
</body>
</html>