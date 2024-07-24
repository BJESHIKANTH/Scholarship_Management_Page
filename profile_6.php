<?php 
include 'con.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email=$_POST['email'];
    $about=$_POST['aboutMe'];
    $phone=$_POST['phone'];
    $sql="update `profile` set about='$about',email='$email' phone='$phone'";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "success";
    }
    else{
        echo "error";
    }
}
?>
<?php
include 'con.php'; 
session_start();
$email=$_SESSION['email'];
if(!isset($email)){
   // header('location:login.php');
   echo "not";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Your Profile</title>
    <style> 
/* Existing styles remain unchanged */

.update-profile {
    max-width: 1000px;
    margin: 40px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
@media (max-width:858px){
    .al{
        margin-left: 0;
    }
    .profile-info{
        margin-right: 50%;
        margin-top: 60%;
    }
}
.update-profile h2 {
    color: #007BFF;
    margin-bottom: 20px;
}

.update-profile form {
    display: flex;
    flex-direction: column;
}

.update-profile label {
    margin-bottom: 8px;
    font-weight: bold;
}

.update-profile textarea,
.update-profile input {
    margin-bottom: 16px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.update-profile button {
    padding: 10px;
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.update-profile button:hover {
    background-color: #0056b3;
}
body {
    font-family:cursive;
    margin: 0;
    padding: 0;
    background: linear-gradient(45deg,white,white);
    font-size: 25px;
}



.profile {
    display: flex;
    justify-content: space-around;
  
    padding: 20px;
    margin-top: 5%;
    margin-left: 10%;
}

.profile-image img {
    width: 250px;
    height: 250px;
    border-radius: 50%;
    object-fit: cover;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.profile-info {
    margin-left:-15%;
    max-width: 100%;
    margin-top: -8%;
}

.profile-info h2 {
    color: #007BFF;
    margin-left: -15%;
}
header{
    background-color: rgb(64, 86, 182);
}
.profile-info p {
    line-height: 1.5;
}

.profile-info ul {
    list-style: none;
    text-decoration: none;
    padding: 0;
}

.profile-info li {
    margin-bottom: 10px;
 
}
.profile-info a {
    text-decoration: none;
    color: #007BFF;
    font-weight: bold;
}
.social-links a {
    display: inline-block;
    text-decoration: none;
    color: #007BFF;
    border: 1px solid #007BFF;
    margin-top: 10px;
    border-radius: 4px;
    transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
}

.social-links a:hover {
    background-color: #007BFF;
    color: white;
}
.al{
    margin-left:-150%;
}
#btn{
    width:100%;
    background-color: rgb(64, 86, 182) ;
    padding: 20px;
}
#btn a{
    text-decoration: none;
}
#btn:hover{
    background-color:black;
    box-shadow: 10px 10px 10px 10px gray;
    color:white;
}
.la{
    margin-top: -90%;
}
</style>
</head>
<body>

    <section class="profile">
        <div class="profile-image">
        <?php 
        include 'con.php';
      $select=mysqli_query($con,"select * from `reg1`  where username='$email'") or die('query failed');
      if(mysqli_num_rows($select)>0){
          $row=mysqli_fetch_assoc($select);
      }?>
            <!-- You can use an actual image here -->
            <img src="<?php echo $row['profile'];?>" alt="image not displayed" width="100" height="100" style="align:center;">
               
        </div>
        <div class="profile-info">
         
        <h2>About Me</h2>
        <h5>Name:<?php echo $row['Name'];?></h5>
     <h5>Year&Course:<?php echo $row['year'];?></h5>
     <h5>Class:<?php echo $row['class'];?></h5>
     <h5>Branch:<?php echo $row['Branch'];?></h5>
     <h5>Religion:<?php echo $row['Religion'];?></h5>
     <div class="al">
                <h2 style="margin-right: 20px">Contact Information</h2>
                <h5>Email:<?php echo $row['username'];?></h5>
                <h5>Password:<?php echo $row['password'];?></h5>
                <h5>Mobile:<?php echo $row['StudentMobile'];?></h5>
               
    </div>
<div class="la">
    <h2>ParentDetails</h2>
     <h5>Mother Name:<?php echo $row['MotherName'];?></h5>
     <h5>Father Name:<?php echo $row['FatherName'];?></h5>
     <h5>Parent Mobile:<?php echo $row['ParentMobile'];?></h5>
</div>
    
    </div>    </div>
    </section>
   
    <button type="button" id="btn"  ><a href="update_6.php" class="nav-link">Update Profile</a></button>
  
   

    <script>
        // JavaScript and jQuery for loading content dynamically
        $(document).ready(function () {
            $(".nav-link").click(function (e) {
                e.preventDefault(); // Prevent the default link behavior

                // Get the href attribute of the clicked link
                var page = $(this).attr("href");
                // Use AJAX to load the content from the selected page
                $.ajax({
                    url: page,
                    success: function (data) {
                        $('main').html(data); // Replace content with loaded data
                    }
                });
            });
        });
    </script>
</body>
</html>
