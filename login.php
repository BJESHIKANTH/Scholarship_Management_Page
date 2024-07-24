<?php
        $login=0;
        session_start();
        include 'con.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $_SESSION['userEmail'] = $email;
    $password=$_POST['password'];
    if($email==""){?>
 <script>alert("Email Is Required");</script>
    <?php
    }
    $select=mysqli_query($con,"select * from `reg1`  where username='$email' and password='$password'") or die('query failed');
    if(mysqli_num_rows($select)>0){
        $row=mysqli_fetch_assoc($select);
        $_SESSION['email']=$row['username'];
        $_SESSION['name']=$row['name'];
        header('Location: sai1.php'); }
    else{?>
    <script>alert("INVALID Email or Password");</script>  <?php }}?>
    