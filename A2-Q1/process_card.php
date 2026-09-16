<?php 
$card_name = $_POST['card_name'];
$card_numb = $_POST['card_numb'];
$card_expiry = $_POST['card_expiry'];
$card_cvc = $_POST['card_cvc'];
$txn_id = "CARD-" . rand(100000, 999999);
$amount = "2798.00";

if(!empty($card_name)&& !empty($card_numb) && !empty($card_expiry) && !empty($card_cvc)){
    header("Location: success.php?tx=" . $txn_id . "&amt=" . $amount . "&cc=AUD&st=Completed");
    exit;
} else{
    echo "Invalid card details.";
}
?>