<?php
require 'connect.php';
?>

<?php
$sql = "SELECT * FROM feedback ORDER BY fID ASC";
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
        <h2>Manage Feedbacks</h2>
        

    </div>
    <hr>
    <div class="centered">
        <table>
            <thead>
                <tr>
                    <th>Feedback ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Feedback</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                while ($rows = $result->fetch_assoc()) {

                    echo "<tr>
                    <td>{$rows['fID']}</td>
                    <td>{$rows['userN']}</td>
                    <td>{$rows['userE']}</td>
                    <td>{$rows['userTP']}</td>
                    <td>{$rows['userFeedback']}</td>
                    <td>{$rows['statuss']}</td>
                    <td>
                        <a href='updatefeedback.php?fID={$rows['fID']}'><button id='editButton'>Edit</button></a>
                        <a href='deletefeedback.php?fID={$rows['fID']}' 
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