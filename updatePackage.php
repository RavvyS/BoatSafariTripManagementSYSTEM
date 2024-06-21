<?php
require 'connect.php';
?>

<?php
    $id = $_GET['packageId'];
    $sql = "SELECT * FROM package WHERE packageId = $id";

    $result = mysqli_query($con, $sql);
    $rows = mysqli_fetch_assoc($result);

    $packageName = $rows['packageName'];
    $duration = $rows['duration'];
    $description = $rows['description'];
    $price = $rows['price'];
    $availability = $rows['availability'];

    if (isset($_POST['submit'])) {

        $packageName = $_POST['packageName'];
        $duration = $_POST['duration'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $availability = $_POST['availability'];

        $sql = "UPDATE package 
            SET packageName = '$packageName', duration = '$duration', description = '$description', price = '$price' , 
            availability = '$availability' WHERE packageId = '$id'";

        $result = mysqli_query($con, $sql);
        if ($result) {
            header('location:adminDashboard.php?content=managePackage');
        } else {
            die(mysqli_error($conn));
        }
    }
    
    $con->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Package Details</title>
    <link rel="stylesheet" type="text/css" href="styles/packagestyles.css">
</head>

<body>

    <div class="packageForm">
        <h2>Update Package Details</h2>
        <form method="post">
            <label for="package-id">Package ID:</label>
            <input type="text" id="package-id" name="package-id" value="<?php echo $id ?>" readonly>

            <label for="packageName">Package Name:</label>
            <input type="text" id="packageName" name="packageName" value="<?php echo $packageName ?>" required>

            <label for="duration">Duration (days):</label>
            <input type="number" id="duration" name="duration" value="<?php echo $duration ?>" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="3" required><?php echo $description ?></textarea>

            <label for="price">Price :</label>
            <input type="number" id="price" name="price" value="<?php echo $price ?>" required>

            <label for="availability">Availability:</label>
            <select id="availability" name="availability" required>
                <option value="available" selected>Available</option>
                <option value="unavailable">Unavailable</option>
            </select>

            <div class="submit-btn">
                <?php
                echo "<button type='submit'  name='submit' onclick='editUser(" . $id . ")'>Update Package</button>";
                ?>
            </div>

        </form>
    </div>
    <script>
        function editUser(packageId) {
            alert(` User with ID : ${packageId} updated successfully`);
        }
    </script>
</body>

</html>