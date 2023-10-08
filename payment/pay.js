// Form submission handler
document.getElementById("paymentForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form from submitting
  
    var paymentMethod = document.getElementById("paymentMethod").value;
  
    if (paymentMethod === "card") {
      var cardNumber = document.getElementById("cardNumber").value;
  
      if (cardNumber.trim() === "") {
        alert("Please enter card details");
      } else {
        // Perform card payment processing here
        alert("Card payment successful!");
        document.getElementById("paymentForm").reset(); // Reset form fields
      }
    } else if (paymentMethod === "cod") {
      // Perform Cash on Delivery processing here
      alert("Cash on Delivery payment successful!");
      document.getElementById("paymentForm").reset(); // Reset form fields
    } else {
      var upiId = document.getElementById("upiId").value;
  
      if (upiId.trim() === "") {
        alert("Please enter UPI ID");
      } else {
        // Perform UPI payment processing here
        alert("UPI payment successful!");
        document.getElementById("paymentForm").reset(); // Reset form fields
      }
    }
  });
  
  // Toggle visibility of card details or UPI details based on selected payment method
  document.getElementById("paymentMethod").addEventListener("change", function() {
    var cardDetails = document.getElementById("cardDetails");
    var upiDetails = document.getElementById("upiDetails");
  
    if (this.value === "card") {
      cardDetails.style.display = "block";
      upiDetails.style.display = "none";
    } else if (this.value === "cod") {
      cardDetails.style.display = "none";
      upiDetails.style.display = "none";
    } else {
      cardDetails.style.display = "none";
      upiDetails.style.display = "block";
    }
  });
  