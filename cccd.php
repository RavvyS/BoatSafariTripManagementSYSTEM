<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/cccd.css">
    <title>Document</title>
</head>

<body>
    <form action="insert_cccd.php" id="cccd" method="post">
        <h1>CC/DC Information</h1>
        <input type="hidden" name="cc_ID">

        <label for="cardNo">Card Number:</label>
        <input type="text" name="cardNo" id="cardNo" required /><br>

        <label for="NameOnCard">Name on Card:</label>
        <input type="text" name="nameOnCard" id="NameOnCard" required /><br>

        <label for="CVVNo">CVV Number</label>
        <input type="text" name="CVV" id="CVVNo" required /><br>

        <label for="expireDate">Expire Date</label>
        <input type="date" name="expire_date" id="expireDate" required /><br>

        <button type="submit">Pay Now</button>
        <section id="contact">
            <p>For more inquiries <a href="#">Contact Us</a></p>
        </section>
    </form>
    <script>
        document.getElementById("cccd").addEventListener("submit", function () {
            // Show alert when the "Pay Now" button is clicked
            alert("Payment information submitted successfully!");

            // Get the form element
            var form = document.getElementById("cccd");

            // Create a FormData object from the form
            var formData = new FormData(form);

            // Create a new XMLHttpRequest object
            var xhr = new XMLHttpRequest();

            // Set up the request
            xhr.open("POST", "insert_cccd.php", true);

            // Define what happens on successful data submission
            xhr.onload = function () {
                if (xhr.status === 200) {
                    // If submission is successful, show the alert
                    alert("Payment has been reserved successfully!");
                } else {
                    // If there's an error, handle it accordingly
                    alert("Error: " + xhr.responseText);
                }
            };

            // Send the FormData object
            xhr.send(formData);
        });
    </script>
</body>

</html>