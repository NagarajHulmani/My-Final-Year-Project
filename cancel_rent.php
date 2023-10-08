<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Cancellation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #007bff;
        }
        p {
            margin-bottom: 20px;
        }
        button {
            display: inline-block;
            background-color: #ff0000;
            color: #fff;
            font-size: 16px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #cc0000;
        }
    </style>
</head>
<body>
    <form action="cancel_success.php">
        <div class="container">
            <h1>Car Rental Cancellation</h1>
            <p>Are you sure you want to cancel your car rental?</p>
            <button id="cancelButton">Cancel Car Rental</button>
        </div>
    </form>

    <script>
        document.getElementById("cancelButton").addEventListener("click", function() {
            // Assuming you have an API endpoint for handling the cancellation on the server-side.
            // You can use AJAX or fetch to send the cancellation request to the server.
            // Replace 'your_cancellation_endpoint' with the actual URL of your cancellation API.
            fetch('your_cancellation_endpoint', {
                method: 'POST', // Use 'DELETE' if appropriate for your API
                // Add any necessary headers and payload if required.
            })
            .then(response => {
                if (response.ok) {
                    alert('Car rental cancellation successful!');
                    // Optionally, you can redirect the user to a confirmation page.
                    // window.location.href = 'confirmation_page.html';
                } else {
                    alert('Failed to cancel the car rental. Please try again later.');
                }
            })
            .catch(error => {
                console.error('Error occurred:', error);
                alert('An error occurred while processing the cancellation request. Please try again later.');
            });
        });
    </script>
</body>
</html>
