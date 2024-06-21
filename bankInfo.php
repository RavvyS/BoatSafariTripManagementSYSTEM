<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to an external CSS file for styling -->
    <link rel="stylesheet" href="styles/bankInfo.css">
    <title>Document</title>
</head>

<body>
    <!-- Form for entering bank information -->
    <form action="insert_bankInfo.php" id="bankform" method="post" enctype="multipart/form-data">
        <h1>Bank Information</h1>
<input type="hidden" name="bankID">

        <label for="bank">Bank:</label>
        <input type="text" name="bank" id="bank" required /><br>

        <label for="branch">Branch:</label>
        <input type="text" name="branch" id="branch" required /><br>

        <label for="uS">Upload-Slip:</label>
        <input type="file" name="choosefile" id="uS" required />
        <br>

        <label for="rmk">Remark:</label>
        <input type="text" name="remark" id="rmk" required /><br>

        <input type="submit" ></input>

        <!-- Contact section for additional inquiries -->
        <section id="contact">
            <p>For more inquiries <a href="#">Contact Us</a></p>
        </section>
    </form>

</body>

</html>