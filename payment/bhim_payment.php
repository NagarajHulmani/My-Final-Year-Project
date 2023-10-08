<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BHIM UPI Payment</title>
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

  var bhimupiId = document.getElementById("bhimupiId").value;

  if (bhimupiId.trim() === "") {
    alert("Please enter BHIM UPI ID");
  } else {
    // Perform BHIM UPI payment processing here
    alert("BHIM UPI payment successful!");
    document.getElementById("paymentForm").reset(); // Reset form fields
  }
});

</script>
</head>

<body>
  <div class="container">
    <h1>BHIM UPI Payment</h1></br>
	<img src="QR.jpg" height="246px" width="270px" style="margin-left: 43px; margin-bottom: 33px; "></img></br>
	<p style="color:#FF0000; margin-left:160px; font-size:30px; font-family:Georgia, "Times New Roman", Times, serif">OR</p></br>
    <form id="paymentForm" class="payment-form" action="payment_fail.php">
      <div id="upiDetails" class="input-group">
        <label for="bhimupiId">BHIM UPI ID</label>
        <input type="text" id="bhimupiId" placeholder="BHIM UPI ID">
      </div>
      <button type="submit" id="payButton">Pay Now</button>
    </form>
  </div>

  <script src="script.js"></script>
</body>

</html>
