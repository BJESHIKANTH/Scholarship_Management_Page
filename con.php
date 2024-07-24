<?php
$hostname='localhost';
$username='root';
$password='';
$dbname='mydb';
$con=mysqli_connect($hostname,$username,$password,$dbname);
if(!$con){
        echo "error";
    }
?>