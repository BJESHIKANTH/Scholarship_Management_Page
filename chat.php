<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color:rgb(64, 86, 182);
            color: white;
            text-align: center;
            padding: 10px;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .certificate-block {
            width: 45%;
            height: 200px;
            margin: 20px 0;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }

        .certificate-block h2 {
            color: #333;
        }

        .certificate-block p {
            color: #666;
        }

        .interactive {
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }

        .interactive:hover {
            transform: scale(1.05);
        }
        footer {
    background-color: rgb(64, 86, 182);
    color: #fff;
    text-align: center;
    padding: 5px;
    position: fixed;
    bottom: 0;
    width: 100%;
}

/* Add additional styling for links or other elements within the footer if needed */
footer a {
    color: #fff;
    text-decoration: none;
}
    </style>
</head>
<body>

    <header>
        <h1>Rajiv Gandhi UNiversity Of Knowledge And Technologies</h1>
    </header>

    <div class="container">

        <div class="certificate-block interactive" onclick="showDetails('originalDegree')">
            <h2>Original Degree</h2>
            <p>Information about the original degree goes here.</p>
        </div>

        <div class="certificate-block interactive" onclick="showDetails('provinceCertificate')">
            <h2>Province Certificate</h2>
            <p>Information about the province certificate goes here.</p>
        </div>

        <div class="certificate-block interactive" onclick="showDetails('backlogs')">
            <h2>Backlogs</h2>
            <p>Information about backlogs goes here.</p>
        </div>

        <div class="certificate-block interactive" onclick="showDetails('marksMemo')">
            <h2>Marks Memo Certificate</h2>
            <p>Information about the marks memo certificate goes here.</p>
        </div>
        <footer>
        <p>&copy; 2023 scholorship Website. All rights reserved.</p>
        <!-- Add any additional footer content or links here -->
    </footer>
    </div>
    

    <script>
        function showDetails(certificateType) {
            // You can implement interactivity here based on the selected certificate type
            if(certificateType=="originalDegree"){
                window.location.href="original.php";
            }
            else if(certificateType=="provinceCertificate"){
                window.location.href="original.php";
            }
            else if(certificateType=="backlogs"){
                window.location.href="original.php";
            }
            else if(certificateType=="marksMemo"){
                window.location.href="original.php";
            }
        }
    </script>

</body>
</html>
