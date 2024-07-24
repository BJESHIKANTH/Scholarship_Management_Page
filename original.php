
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Original Degree Request Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: rgb(64, 86, 182);
            color: white;
            text-align: center;
            padding: 10px;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        button {
            background-color: rgb(64, 86, 182);
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: white;
            border:2px solid black;
            color:navy;
        }
    </style>
</head>
<body>

    <header>
        <h1>Rajiv Gandhi University Of Knowledge and Technologies</h1>
    </header>

    <form  method="post">
        <label for="full-name">Full Name:</label>
        <input type="text" id="full-name" name="full-name" required>

        <label for="student-id">Student ID:</label>
        <input type="text" id="student-id" name="student-id" required>

        <label for="department">Department:</label>
        <input type="text" id="department" name="department" required>

        <label for="year-of-graduation">Year of Graduation:</label>
        <input type="text" id="year-of-graduation" name="year-of-graduation" required>
        <label for="year-of-graduation">Select Type Of Certificate</label>
        <select class="section" name="select" style="height:30px">
              <option value="Original Degree">Original Degree</option>
              <option value="Province Certificate">Province Certificate</option>
              <option value="Backlogs Certificate">Backlogs Certificate</option>
              <option value="Marks Certificate">MarksMemo Certificate</option>
        </select><br><br>
        <label for="reason">Reason for Request:</label>
        <textarea id="reason" name="reason" rows="4" required></textarea>

        <button type="submit">Submit Request</button>
    </form>
    <?php
include 'con.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $fullName = $_POST["full-name"];
    $select=$_POST['select'];
    $studentID = $_POST["student-id"];
    $_SESSION['id']=$studentID;
    $department = $_POST["department"];
    $yearOfGraduation = $_POST["year-of-graduation"];
    $reason = $_POST["reason"];

    // Insert data into the database
    $sql = "INSERT INTO `od` VALUES ('$fullName', '$studentID', '$department', '$yearOfGraduation', '$reason','','$select','')";
    if ($con->query($sql) === TRUE) {
       header('location:second.php');
   
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}
$con->close();
?>

</body>
</html>
