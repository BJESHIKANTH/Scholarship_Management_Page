<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'con.php';
    $username=$_POST['email2'];
    $password=$_POST['password2'];
    $sql="select * from `examinor` where Email='$username' and password='$password' ";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        header('location:scholor_4.php'); }  
    else{?>
     <script>  alert('Invalid Password');</script>
<?php    }}?>