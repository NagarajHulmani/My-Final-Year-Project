<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Card Payment</title>
  <style>
    /* Reset default styles */
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: Arial, sans-serif;
  background-color: #f5f5f5;
}

.container {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  margin-bottom: 20px;
  color: #333;
}

.payment-form .input-group {
  margin-bottom: 20px;
}

.payment-form label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

.payment-form input[type="text"] {
  width: 100%;
  padding: 8px;
  border: 1px solid #ddd;
  border-radius: 3px;
}

.payment-form button[type="submit"] {
  display: block;
  width: 100%;
  padding: 10px;
  margin-top: 20px;
  background-color: #4caf50;
  color: #fff;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

.payment-form button[type="submit"]:hover {
  background-color: #45a049;
}

</style>
<script>
    // Form submission handler
document.getElementById("paymentForm").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent form from submitting

  var cardNumber = document.getElementById("cardNumber").value;

  if (cardNumber.trim() === "") {
    alert("Please enter card details");
  } else {
    // Perform card payment processing here
    alert("Card payment successful!");
    document.getElementById("paymentForm").reset(); // Reset form fields
  }
});

</script>
</head>

<body>
  <div class="container">
    <h1>Card Payment</h1>
    <form id="paymentForm" class="payment-form" action="payment_fail.php">
      <div id="cardDetails" class="input-group">
        <label for="cardNumber">Card Number</label>
        <input type="text" id="cardNumber" placeholder="Card Number" maxlength="16">
      </div>
      <button type="submit" id="payButton">Pay Now</button>
    </form>
  </div>

  <script src="script.js"></script>
</body>

</html>
