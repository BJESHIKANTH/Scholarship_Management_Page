<?php
//error_reporting(E_ALL);
//ini_set('display_errors',1);
  // {
    include 'con.php';
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['formsubmit2'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="select * from `reg1` where username='$email'";
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            header('location:SALogin_1.php');
          }
        else{
            $sql1="INSERT INTO `reg1`  VALUES ('$email', '$password','','','','','','','','','','','','')";
    $result1=mysqli_query($con,$sql1);}
    if($result1){
        header('location:SALogin_1.php');
    }
    else{
        echo "not";
    }
        }  }
?>
<?php
        $login=0;
        session_start();
        include 'con.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["form1_submit"])) {
        $email = $_POST['email'];
        $_SESSION['userEmail'] = $email;
    $password=$_POST['password'];
    $select=mysqli_query($con,"select * from `reg1`  where username='$email' and password='$password'") or die('query failed');
    if(mysqli_num_rows($select)>0){
        $row=mysqli_fetch_assoc($select);
        $_SESSION['email']=$row['username'];
        $_SESSION['name']=$row['name'];
        header('Location: sai1.php'); }
    else{?>
    <script>alert("INVALID Email or Password");</script>  <?php }}?><?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["formsubmit1"])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from `admin1` where username='$username' and password='$password' ";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        header('location:admin_11.php'); }  
    else{?>
     <script>  alert('Invalid Password');</script>
<?php    }}?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <style>
    #openModalBtn {
    padding: 10px;
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;}
    #openModalBtn1{
      background-color: #007BFF;  
    }
    #openModalBtn2{
      background-color: #007BFF;
    }
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: white;}
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold}
.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;}
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;}
body.modal-open {
    overflow: hidden;}
form{
  padding: 30px;
  align-items: center;
  text-align: center;}
form input{
  width: 100%;
  height: 20%;}
form label{
  font-size: 20px;
  font-weight: bold;}
form button{
  background-color:#007BFF;
  width:100%;}
    .header {
      background-color: blue;
      color: #fff;
      text-align: center;
      padding: 20px;}
    .container {
      max-width: 1200px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);}
    h2 {margin-bottom: 20px; }
    p {
      font-size: 16px;
      line-height: 1.5;
      margin-bottom: 30px;}
    .interactive-content {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      margin-top: 30px;}
    .interactive-box {
      border: 1px solid #ddd;
      border-radius: 8px;
      overflow: hidden;
      margin: 15px;
      width: calc(30% - 30px);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out;}
    .interactive-box:hover {
      transform: scale(1.05);}
    .boxcontent {
      padding: 20px;
      text-align: left;
    }
    button {
      font-size: 16px;
      padding: 10px;
      margin: 10px;
      cursor: pointer;
      background-color: blue;
      color: #fff;
      border: none;
      border-radius: 4px;
    }
    .box-image {
      width: 100%;
      height: 150px;
      object-fit: cover;
    }
    p{
      color:black;
    }
    .login-container {
    display: flex;
    margin-top: 40%;
}

.login-button,
.admin-login-button,
.student-login-button {
    padding:10px;
    font-size: 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}

.login-button:hover {
    background-color: #007BFF;
    color: #fff;
}

.admin-login-button:hover {
    background-color: #FF6347;
    color: #fff;
}

.student-login-button:hover {
    background-color: #32CD32;
    color: #fff;
}

.overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1;
}

.login-form {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    z-index: 2;
    width:90%;
}

.login-form h2 {
    margin-bottom: 20px;
}

.login-form label {
    display: block;
    margin-bottom: 8px;
}

.login-form input {
    width: 100%;
    padding: 5px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.login-form button {
    padding: 10px;
    background-color: blue;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.login-form button:hover {
    background-color: #0056b3;
}

.close {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 24px;
    cursor: pointer;
    color: #888;
}

    @media (max-width:858px){
        .interactive-box{
            width:100%;
        }
    }
    
  </style>
</head>
<body>

  <div class="header">
    <h1>Scholarship Hub</h1>
  </div>

  <div class="container">
    <h2>Welcome to the Scholorship Website</h2>

    <p>Explore scholarship opportunities to support your education and future endeavors. We believe in empowering individuals through education. Click the buttons below to either sign up for a new account and apply for scholarships or log in to your existing account.</p>

    <div class="interactive-content"  id="content">
      <div class="interactive-box">
        <div class="box-image">
          <img src="signup.jpeg" alt="Signup Image" class="box-image">
        </div>
        <div class="boxcontent">
          <h3>Signup for Scholarships</h3>
          <p>Create a new account to access a variety of scholarship opportunities. Start your educational journey with us!</p>
          <button id="openModalBtn2">SignUp</button>
    <div id="loginModal2" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModal2">&times;</span>
            <div class="card">
        <div class="login-box">     
        <form method="post"  onsubmit=" return validateEmail()" >
                <h2 align="center">SignUp Form</h2><br><br>
              <label class="label"> <i class="fas fa-envelope"></i>Email<br>
             </label><input type="email"  class="form-control" name="email" id='email' value=" " ><br><br>        
              <label class="label"> <i class="fas fa-lock"></i>Password<br></label><input type="password" class="form-control" name="password"><br>       
        <button type="submit" class="btn btn-primary mt-1 name="formsubmit2" >SignUp</button>
        </form>        
</div></div></div></div></div></div>
      <div class="interactive-box">
        <div class="box-image">
          <img src="login.jpeg" alt="Login Image" class="box-image">
        </div>
        <div class="boxcontent">
          <h3>Login to Your Account</h3>
          <p>Already have an account? Log in to explore and apply for available scholarships tailored to your needs.</p>
          <button id="openModalBtn">Student Login</button>
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModal">&times;</span>
            <div class="card">
        <div class="login-box">     
        <form method="post" onsubmit=" return validateForm()">
                <h2 align="center">Login Form</h2><br><br>             
              <label class="label"> <i class="fas fa-envelope"></i>Email<br>
             </label><input type="email" id="email1"  value="" class="form-control"  name="email" ><br><br> 
              <label class="label"> <i class="fas fa-lock"></i>Password<br></label><input type="password" class="form-control" name="password"><br>    
        <button type="submit" class="btn btn-primary mt-1" name="form1_submit">Login</button>
        </form></div></div> </div></div>
    <button id="openModalBtn1">Admin Login</button>
    <div id="loginModal1" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModal1">&times;</span>
            <div class="card">
            <div class="login-container">
        <button class="login-button" onclick="openLoginForm('user')">SO Login</button>
        <button class="admin-login-button" onclick="openLoginForm('admin')">FO Login</button>
        <button class="student-login-button"  onclick="window.location.href='examinor.php'">EXAMINER Login</button> </div>
    <div class="overlay" id="overlay"></div>
    <div class="login-form" id="loginForm">
        <span class="close" onclick="closeLoginForm()">&times;</span>
        <h2>Login</h2>
        <form  method="post">
           <input type="text" name="username" placeholder="Enter your username"  required><br><br>
    <input type="text" name="password" placeholder="enter your password"  required><br><br>
            <button type="submit" name="formsubmit1">Login</button></form> </div></div></div></div>
  </div>
          
   <script>
      function openLoginForm(userType) {
    document.getElementById("overlay").style.display = "block";
    document.getElementById("loginForm").style.display = "block";
}

function closeLoginForm() {
    document.getElementById("overlay").style.display = "none";
    document.getElementById("loginForm").style.display = "none";
}

    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
    // Get the modal
    var modal = document.getElementById("loginModal");

    // Get the button that opens the modal
    var btn = document.getElementById("openModalBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementById("closeModal");

    // When the user clicks on the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
        boxcontent.style.color = "white";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }
   
});
</script>
<script>
      document.addEventListener("DOMContentLoaded", function () {
    // Get the modal
    var modal = document.getElementById("loginModal2");

    // Get the button that opens the modal
    var btn = document.getElementById("openModalBtn2");

    // Get the <span> element that closes the modal
    var span = document.getElementById("closeModal2");

    // When the user clicks on the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
        boxcontent.style.color = "white";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }
    $('#loginModal2').appendTo('#content');
});
</script>
<script>
      document.addEventListener("DOMContentLoaded", function () {
    // Get the modal
    var modal = document.getElementById("loginModal1");

    // Get the button that opens the modal
    var btn = document.getElementById("openModalBtn1");

    // Get the <span> element that closes the modal
    var span = document.getElementById("closeModal1");

    // When the user clicks on the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
        boxcontent.style.color = "white";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }
});
</script>
<script>
  function validateForm() {
      // Get the email input value
      var email = document.getElementById('email1').value;
      if(email.length==0){
        alert("Email and Password is Required");
        return false;
      }
      else{
        return true;
      }
  }
  function validateEmail() {
      // Get the email input value
      var email = document.getElementById('email').value;

      // Regular expression for specific email format
      var emailRegex = /^O\d{6,7}@rguktong\.ac\.in$/;

      // Test the email against the regex
      if(email==""){
        alert('Email is Required');
        return false;
      }
      else if (!emailRegex.test(email)) {
        alert('Email is not valid');
        return false;
      }
      else{
        return true;
      }
    }
</script>
</body>
</html>