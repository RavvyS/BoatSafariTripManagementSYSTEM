<?php
require 'connect.php';
?>

<?php
$sql = "SELECT * FROM registration ORDER BY userID ASC";
$result = $con->query($sql);
$con->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Accounts Details</title>
    <link rel="stylesheet" type="text/css" href="styles/dashboardstyle.css">
</head>

<body>
    <div class="managedetails">
        <h2>Manage User Accounts</h2>
        <div>
            <a id="add" href="addUser.php">Add User</a>
        </div>

    </div>
    <hr>
    <div class="centered">
        <table>
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Password</th>
                    <th>Confirm Password</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <?php
                while ($rows = $result->fetch_assoc()) {

                    echo "<tr>
                    <td>{$rows['userID']}</td>
                    <td>{$rows['userN']}</td>
                    <td>{$rows['userE']}</td>
                    <td>{$rows['userTP']}</td>
                    <td>{$rows['userPWD']}</td>
                    <td>{$rows['userPWDR']}</td>
                    <td>
                        <a href='updateUser.php?userId={$rows['userID']}'><button id='editButton'>Edit</button></a>
                        <a href='deleteUser.php?userId={$rows['userID']}' 
               onclick=\"return confirm('Are you sure you want to delete this user?');\"><button id='deleteButton'>Delete</button></a>
                    </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>