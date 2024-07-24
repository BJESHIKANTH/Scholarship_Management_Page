<html>
    <head>
        <title>Saibaba</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-
1BmE4KWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqy12QvZ6jIW3”
crossorigin="anonymous">
<!-- Include Bootstrap CSS (CDN) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Include FontAwesome CSS (CDN) -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>   
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script><style> 


.card-container {
            display: flex; 
            /* Use flexbox to arrange cards side by side */
         
        }
body{
    background: linear-gradient(45deg,white,white);
    font-family: cursive;
    font-size: 25px;
    color:black;
}
        .card {
            margin-top: 30px;
            border: 1px solid #ccc; /* Add borders for visual separation */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Add a shadow for depth */
            border-radius: 8px; /* Rounded corners for a card-like appearance */
            background-color:rgb(64,86,182); /* Card background color */
            align-items: center;
  justify-content: center;
   box-shadow: 5px 5px 5px gray;
   color:white;
   border:2px solid white;
  text-align: center;
  margin-left: 5%;

        }
        header{
            padding:30px;
        }
        nav a {
            float: right;
            display: block;
            color: navy;
            padding: 24px 16px;
            text-decoration: none;
        }
        nav {
            background-color: white;
            overflow: hidden;
        }
</style>
    </head>
    <body>
    <div class="row">
        <?php
        include  "con.php";
      /*  $i=0;
        session_start();
        $id=$_POST['id'];
        $_SESSION['id']=$id;*/
        $sql="select * from `Report`";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_assoc($result)){
            $sid=$row['sid'];
            $email=$row['email'];
            $desc=$row['description'];?>
            <div class="col-lg-4 col-md-12">        
             <div class="card" style="width: 8cm;height:10cm">
<div>
          <p> ScholorshipID:<?php echo $sid ?></p><br>
          <p> Problem:<?php echo $desc ?></p><br>
       </div></div></div>
                   
               <?php } ?></div>
       
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
integrity "sha384-
7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31e0z1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
integrity="sha384-
QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
crossorigin="anonymous"></script>
        </body>
</html>