// Redirect to the selected payment page based on the dropdown choice
function redirectToPaymentPage() {
    var paymentMethod = document.getElementById("paymentMethod").value;
  
    if (paymentMethod === "card") {
      window.location.href = "user_payment.html";
    } else if (paymentMethod === "cod") {
      window.location.href = "cod_payment.php";
    } else if (paymentMethod === "phonepe") {
      window.location.href = "phonepay_payment.php";
    } else if (paymentMethod === "googlepay") {
      window.location.href = "googlepay_payment.php";
    } else if (paymentMethod === "amazonpay") {
      window.location.href = "amazon_payment.php";
    } else if (paymentMethod === "bhimupi") {
      window.location.href = "bhim_payment.php";
    }
  }
  