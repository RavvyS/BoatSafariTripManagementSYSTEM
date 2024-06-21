<!DOCTYPE html>
<html>

<head>
    <title>Customer Reservation List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-bottom: 20px;
            align-items: center;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #dddddd;
        }

        button {
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            text-decoration: none;
            display: inline-block; /* Added to prevent underlining */
        }

        button:hover {
            background-color: #0056b3;
        }

        a {
            color: inherit; /* Inherit color from parent element */
            text-decoration: none; /* Remove underline */
        }

        h1 {
            text-align: center;
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            /* Optional: Set the height to fill the viewport */
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Reservation List</h1>
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        require 'connect.php';

        $sql = "SELECT res_ID,firstName, nic, email, phoneNo, checkIn, checkOut, noOfAdults, noOfChildren, remark FROM finalResservation";

        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            echo "<table border='1'>";

            echo "<tr>";
            echo "<th>ReservationID</th>";
            echo "<th>Name</th>";
            echo "<th>Package</th>";
            echo "<th>Email</th>";
            echo "<th>Phone No</th>";
            echo "<th>Check In</th>";
            echo "<th>Check Out</th>";
            echo "<th>No Of Adults</th>";
            echo "<th>No of Children</th>";
            echo "<th>Remark</th>";
            echo "<th>Update</th>";
            echo "<th>Delete</th>";
            echo "</tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";

                echo "<td>" . $row["res_ID"] . "</td>" .
                    "<td>" . $row["firstName"] . "</td> " .
                    "<td>" . $row["nic"] . "</td>" .
                    "<td>" . $row["email"] . "</td>" .
                    "<td>" . $row["phoneNo"] . "</td>" .
                    "<td>" . $row["checkIn"] . "</td>" .
                    "<td>" . $row["checkOut"] . "</td>" .
                    "<td>" . $row["noOfAdults"] . "</td>" .
                    "<td>" . $row["noOfChildren"] . "</td>" .
                    "<td>" . $row["remark"] . "</td>" .
                    "<td><button><a href='readSpecific_reservation.php?res_ID=" . $row["res_ID"] . "'>Update</a></button></td>" . // Removed the underline by wrapping it in <a> tag
                    "<td><form method='post' action='delete_reservation.php'>" .
                    "<input type='hidden' name='res_ID' value='" . $row["res_ID"] . "'>" .
                    "<button type='submit' name='delete'>Delete</button></a>" .
                    "</form></td>";

                ;
            }
            echo "</tr>";

            echo "</table>";
        } else {
            echo "No result";
        }

        $con->close();
        ?>
    </div>
</body>

</html>
