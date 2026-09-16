<?php
include_once "config.php";

$payment_method = $_POST['payment_method'];
$item_name = "Electric Bike Model 1, Electric Bike Model 2";
$amount = "2798.00";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Complete Your Payment</title>
</head>
<body>

<?php if ($payment_method === "paypal") {?>
    <form action="<?php echo PAYPAL_URL; ?>" method="post" style="padding: 0; margin: 0;">

                    <!-- Specify a Buy Now button. -->
						<input type="hidden" name="cmd" value="_xclick" />

                    <!-- Identify your business so that you can collect the payments. -->
						<input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>" />

                    <!-- Specify details about the item that buyers will purchase. part of this field will be used in ipn.php-->
						<input type="hidden" name="item_name" value="<?php echo $item_name; ?>" />
						<input type="hidden" name="amount" value="<?php echo $amount; ?>" />
						<input type="hidden" name="currency_code" value="<?php echo PAYPAL_CURRENCY; ?>" />

                    <!-- Specify URLs -->
						<input type="hidden" name="return" value="<?php echo PAYPAL_RETURN_URL; ?>">
						<input type="hidden" name="notify_url" value="<?php echo PAYPAL_NOTIFY_URL; ?>">
						<input type="image" border="0" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"/>
</form>
                        
 <?php } elseif ($payment_method === "googlepay") {?>

 <?php } elseif ($payment_method === "mastercard") {?>
<form action="process_card.php" method="post">
<input type="hidden" name="payment_method" value="<?php echo $payment_method; ?>">
<div> Name on the Card</div>
<input type="text" name="card_name">
<div> Card Number</div>
<input type="text" name="card_numb">
<div> Expiry Date</div>
<input type="text" name="card_expiry" placeholder="MM/YY">
<div> CVC </div>
<input type="text" name="card_cvc" placeholder="123">
<button type="submit">Pay Now</button>
</form>
      <?php } elseif ($payment_method === "visa") {?>

     <?php }?>
     </body>
     </html>
