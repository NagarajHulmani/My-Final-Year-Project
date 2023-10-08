<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cash on Delivery</title>
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

.payment-form p {
  margin-bottom: 5px;
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

  // Perform Cash on Delivery processing here
  alert("Cash on Delivery payment successful!");
  document.getElementById("paymentForm").reset(); // Reset form fields
});

</script>
</head>

<body>
  <div class="container">
    <h1>Cash on Delivery</h1>
    <form id="paymentForm" class="payment-form">
      <div id="codDetails" class="input-group">
        <p>Cash on Delivery selected.</p>
      </div>
      <button type="submit" id="payButton">Pay Now</button>
    </form>
  </div>

  <script src="script.js"></script>
</body>

</html>
