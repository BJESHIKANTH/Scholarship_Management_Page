<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
    </style>
</head>
<body>
    <!-- Your admin panel content here -->

    <!-- PHP code to fetch and display data -->
<?php
// Fetch data from the database
include 'con.php';
$sql = "SELECT * FROM `od`";
$result = $con->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    // Output data in a table or other format
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>department</th><th>year</th><th>reason</th><th>Certificate</th><th>File</th></tr>";

    while ($row = $result->fetch_assoc()) {
        session_start();
        $_SESSION['email1']=$row["Email"] ;
        echo "<tr>";
        echo "<td>" . $row["student_id"] . "</td>";
        echo "<td>" . $row["full_name"] . "</td>";
        echo "<td>" . $row["Email"] . "</td>";
        echo "<td>" . $row["department"] . "</td>";
        echo "<td>" . $row["year_of_graduation"] . "</td>";
        echo "<td>" . $row["reason"] . "</td>";
        echo "<td>" . $row["certificate"] . "</td>";
        echo "<td><img src=" . $row["file"] . " width='100' height='100'></td>";?>
        <td><button type="button" onclick="window.location.href='certificate2.php'">Message</button></td>
      <?php  echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No records found";
}

// Close the database connection
$con->close();
?>
</body>
</html>
