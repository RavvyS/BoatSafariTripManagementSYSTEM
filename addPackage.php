<?php
require 'connect.php';
?>

<!--store package details-->
<?php

if (isset($_POST["submit"])) {
    $packageName = $_POST['packageName'];
    $duration = (int)$_POST['duration'];
    $description = $_POST['description']; 
    $price = (float)$_POST['price'];
    $availability = $_POST['availability'];

    $query = "INSERT INTO package (packageName, duration, description, price, availability) VALUES ('{$packageName}', '{$duration}', '{$description}', '{$price}', '{$availability}')";

    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<script> alert('package data inserted successfully');</script>";
        echo "<script>setTimeout(() => { window.location.href = 'adminDashboard.php?content=managePackage'; }, 1000);</script>";
    } else {
        echo "<script>alert('something went wrong');</script>";
    }
}
$con->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Package Details</title>
    <link rel="stylesheet" type="text/css" href="styles/packagestyles.css">
</head>

<body>

    <div class="packageForm">
        <h2>Add Package Details</h2>
        <form method="post" autocomplete="off">
            <!-- <label for="package-id">Package ID</label>
            <input type="text" id="package-id" name="package-id" placeholder="Enter Package ID" required> -->

            <label for="packageName">Name</label>
            <input type="text" id="packageName" name="packageName" placeholder="Enter Package Name" required>

            <label for="duration">Duration</label>
            <input type="number" id="duration" name="duration" placeholder="Enter Duration" required>

            <label for="description">Description</label>
            <textarea id="description" name="description" rows="3" placeholder="Enter Description" required></textarea>

            <label for="price">Price </label>
            <input type="number" id="price" name="price" placeholder="Enter Price" required>

            <label for="availability">Availability</label>
            <select id="availability" name="availability" required>
                <option value="available">Available</option>
                <option value="unavailable">Unavailable</option>
            </select>

            <div class="submit-btn">
                <button type="submit" name="submit">Add Package</button>
            </div>

        </form>
    </div>

</body>

</html>