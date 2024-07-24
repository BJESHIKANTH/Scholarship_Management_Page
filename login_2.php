<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate of Payment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .certificate {
            border: 1px solid #ccc;
            padding: 20px;
            max-width: 600px;
            margin: 20px auto;
        }
    </style>
</head>
<body>
    <div class="certificate">
        <h2>Certificate of Payment</h2>
        <p>This is to certify that:</p>
        <p><strong>Email:</strong> {{EMAIL}}</p>
        <p>has paid all JVD amounts.</p>
        <p>Issued on: <?php echo date('Y-m-d'); ?></p>
    </div>

</body>
</html>
