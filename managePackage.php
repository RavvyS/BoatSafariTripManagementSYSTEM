<?php
require 'connect.php';
?>

<?php
    $sql = "SELECT * FROM package ORDER BY packageId ASC";
    $result = $con->query($sql);
    $con->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Package Details</title>
    <link rel="stylesheet" type="text/css" href="styles/dashboardstyle.css">
</head>

<body>
    <div class="managedetails">
        <h2>Manage Package Details</h2>
        <div>
            <a id="add" href="addPackage.php">Add Package</a>
        </div>

    </div>
    <hr>
    <div class="centered">
        <table>
            <thead>
                <tr>
                    <th>Package ID</th>
                    <th>Package Name</th>
                    <th>Duration</th>
                    <th>Description</th>
                    <th>Price </th>
                    <th>Availability</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($rows = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$rows['packageId']}</td>
                        <td>{$rows['packageName']}</td>
                        <td>{$rows['duration']}</td>
                        <td>{$rows['description']}</td>
                        <td>{$rows['price']}</td>
                        <td>{$rows['availability']}</td>

                        <td>
                        <a href='updatePackage.php?packageId={$rows['packageId']}'><button id='editButton'>Edit</button></a>
                        <a href='deletePackage.php?packageId={$rows['packageId']}' 
               onclick=\"return confirm('Are you sure you want to delete this package?');\"><button id='deleteButton'>Delete</button></a>
                    
                            
                        </td>
                </tr>";
                }
                ?>

            </tbody>
        </table>
    </div>

</body>

</html>