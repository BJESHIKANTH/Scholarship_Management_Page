<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
body{
    background-color: rgb(64,86,182);
    font-family: cursive;
    font-size: 20px;
}
.container{
    background-color: white;
    width:40%;
    height:340px;
    margin-left: 30%;
    margin-top: 16%;
    align-items: center;
    text-align: center;
    justify-content: center;
    border-radius: 10px;
}
button{
    width:20%;
    height:40px;
    background-color: rgb(64,86,182);
    border-radius: 10px;
}
button:hover{
    background-color: white;
    border:2px solid black;
    color:black;
}
</style>
</head>
<body>
    <div class="container">
    <form class="" action="certification.php" method="post">
        <br><br>
        Email:<input type="email" name="email" id="email"><br><br>
        Subject:<input type="text" name="subject"  value="" id="sub"><br><br>
        <label for="description">Message</label>
        <textarea id="name" name="message" rows="4" required></textarea><br><br>
        <button type="submit" name="send">Send Email</button>
    </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Add this line to include SweetAlert library -->
       
</body>
</html>