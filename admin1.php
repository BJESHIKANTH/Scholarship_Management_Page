<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'con.php';
    $username=$_POST['email1'];
    $password=$_POST['password1'];
    $sql="select * from `admin1` where username='$username' and password='$password' ";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        header('location:trail.php'); }  
    else{?>
     <script>  alert('Invalid Password');</script>
<?php    }}?>