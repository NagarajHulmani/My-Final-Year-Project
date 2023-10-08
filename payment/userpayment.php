<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Page</title>
  <link rel="stylesheet" href="style.css">
  <link rel="text/javascript" href="pay.js"></link>
</head>

<body>
  <div class="container">
    <h1>Payment</h1>
    <form id="paymentForm" class="payment-form">
      <div class="input-group">
        <label for="paymentMethod">Payment Method</label>
        <select id="paymentMethod" onchange="redirectToPaymentPage()">
          <option value="select">Select the mode</option>
          <option value="card">Credit/Debit Card</option>
          <option value="cod">Cash on Delivery</option>
          <option value="phonepe">PhonePe UPI</option>
          <option value="googlepay">Google Pay UPI</option>
          <option value="amazonpay">Amazon Pay UPI</option>
          <option value="bhimupi">BHIM UPI</option>
        </select>
      </div>
      <div id="cardDetails" class="input-group">
        <label for="cardNumber">Card Number</label>
        <input type="text" id="cardNumber" placeholder="Card Number" maxlength="16">
      </div>
      <div id="upiDetails" class="input-group">
        <label for="upiId">UPI ID</label>
        <input type="text" id="upiId" placeholder="UPI ID">
      </div>
      <!-- <button type="submit" id="payButton" onsubmit="redirectToPaymentPage()">Pay Now</button> -->
    </form>
  </div>

  <script src="script.js"></script>
</body>

</html>

