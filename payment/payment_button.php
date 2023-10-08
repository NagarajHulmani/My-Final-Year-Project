<!DOCTYPE html>
<html>
<head>
  <title>Payment Button Example</title>
  <style>
    #paymentButton {
      padding: 8px 16px;
      background-color: #4CAF50;
      color: #fff;
      font-size: 16px;
      border: none;
      cursor: pointer;
      border-radius: 6px;
    }

    #paymentButton:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <button id="paymentButton">Pay Now</button>

  <script>
    document.getElementById('paymentButton').addEventListener('click', function() {
      // Perform payment processing logic here
      // For demonstration purposes, we'll display an alert
      alert('Payment processed successfully!');
    });
  </script>
</body>
</html>
