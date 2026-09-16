
 <!DOCTYPE html>
 <html>
 <style>
.form-group {
    display: flex;
    gap: 20px;
}

.info, .payment {
    border: 1px solid #ddd;
    padding: 20px;
    flex: 1;
}
 .payment img {
     max-height: 30px;
     width: auto;
     margin-right: 10px;
}

</style>

 <body>
    <h1>Billing Information</h1>
 <form class="billing-form" action="process_payment.php" method="post">
    <h2>Billing address</h2>
     <div class="form-group">
        <div class="info">
        <div>First name</div>
        <input type="text" name="first_name" class="form-control">
        <div>Last name</div>
        <input type="text" name="last_name" class="form-control">
        <div>Username</div>
        <input type="text" name="username" placeholder="@Username" class="form-control">
        <div>Email (Optional)</div>
        <input type="email" name="email" placeholder="you@example.com" class="form-control">
        <div>Address</div>
        <input type="text" name="adress" placeholder="123 Streetname" class="form-control">
        <div>Address 2(Optional)</div>
        <input type="text" name="adress2" placeholder="Apartment or Suite" class="form-control">
        <label for="country">Country</label>
            <select id="country" name="country">
                <option value="">Choose...</option>
                <option value="AU">Australia</option>
                <option value="US">United States</option>
                <option value="NZ">New Zealand</option>
            </select>

        <label for="state">State</label>
            <select id="state" name="state">
                <option value="">Choose...</option>
                <option value="VIC">Victoria</option>
                <option value="NSW">New South Wales</option>
                <option value="QLD">Queensland</option>
            </select>
        <div>Zip</div>
        <input type="text" name="zip" class="form-control">
        </div>

        <div class="payment">
        <h2>Select A Payment Option</h2>
            <label>
            <input type="radio" name="payment_method" value="visa">
            <img src="assets/img/visa.png" alt="Visa">
            </label>

            <label>
                <input type="radio" name="payment_method" value="mastercard">
                <img src="assets/img/mastercard.png" alt="MasterCard">
            </label>

            <label>
                <input type="radio" name="payment_method" value="paypal">
                <img src="assets/img/paypal.png" alt="PayPal">
            </label>

            <label>
                <input type="radio" name="payment_method" value="americanexpress">
                <img src="assets/img/americanexpress.png" alt="AmericanExpress">
            </label>

            <label>
                <input type="radio" name="payment_method" value="alipay">
                <img src="assets/img/alipay.png" alt="Alipay">
            </label>
 
            <label>
                <input type="radio" name="payment_method" value="googlepay">
                <img src="assets/img/googlepay.png" alt="Google Pay">
            </label>

            <label>
                <input type="radio" name="payment_method" value="applepay">
                <img src="assets/img/applepay.png" alt="Apple Pay">
            </label>
            </div>
                    </div>
                    &nbsp; 
                    <button type="submit" class="btn btn-primary">Continue to checkout </button>
                </form>
                </body>
                </html>
            
