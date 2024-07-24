<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Home Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
      
            font-family:cursive;
            font-weight: bold;
            font-size: 25px;
        }

        header {
            background-color:rgb(64, 86, 182);
            padding: 5px;
            text-align: center;
            color: white;
        }

        nav {
            background-color: whitesmoke;
            border-radius: 10px;
            box-shadow: 0 0 0 0 gray;
            overflow: hidden;
            width:98%;
            margin-left: 1%;
        }

        nav a {
            float: right;
            display: block;
            color: navy;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
        }

        .container > div {
            width: 100%;
            min-height: 43vh;
            background-color: #3498db; /* Blue background for div blocks */
           
        }
        .container > div .img1{
            float: right;
            width:20%;
            height:250px;
            margin-top: 50px;
        }
        .container > div .img2{
            float: left;
            width:30%;
            height:250px;
            margin-top: 10px;
        }
        .container > div:nth-child(odd) {
            background-color: #fff;
            min-height: 40vh;
    /* White background for odd divs */
        }

        .container > div:nth-child(even) {
            background-color:rgb(64, 86, 182); /* White background for odd divs */
        }
       #h2{
        margin-left: 5%;
        margin-top: 9%;
       }
       .p{
        margin-left: 7%;
        margin-top: -4%;
        color:navy;
       }
       form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: rgb(64, 86, 182);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color:white ;
            color: black;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        footer {
            background-color:rgb(64, 86, 182);
            color: white;
            padding: 20px;
            text-align: center;
        }

        footer a {
            color:black;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
        .subnav {
      display: none;
      position: relative;
      background-color:whitesmoke;
      box-shadow: 0px 8px 16px 0px blue;
    }

    .subnav a {
      float: none;
      display: block;
      text-align: left;
    }
    #b{
        background-color:rgb(64, 86, 182);
        margin-left: 55%;
        padding: 20px;
    }
    #b:hover{
      background-color: white;
      border: 2px solid black;
      color:navy;
    }
    marquee{
        behavior: alternate;
    }
    @keyframes blink {
      0%, 100% {
        color: black;
      }
      33% {
        color: green;
      }
      66% {
        color: Navy;
      }
    }

    a.blinking-link {
      animation: blink 3s infinite; /* Adjust the duration as needed */
      text-decoration: none;
    }
    h2.blinking-link {
      animation: blink 3s infinite; /* Adjust the duration as needed */
      text-decoration: none;
    }
    a.nav-link.blinking-link {
      animation: blink 3s infinite; /* Adjust the duration as needed */
      text-decoration: none;
    }
    @media(max-width:991px){
            #b{
              margin-top: -3%;
              margin-left: 25%; 
              padding: 10px;
            }
        }    </style>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <header>
      <h1>Scholorship Portal</h1>
    </header>
    <nav>
    <a href="#" onclick="logout()" class="nav-link  blinking-link">Logout</a>
    <a href="#" onclick="toggleSubnav('services')" class="blinking-link">Services</a>
        <div id="servicesSubnav" class="subnav">
        <a href="SubmitReciept_7.php"  class="nav-link blinking-link" onclick="disableSubnav()">Submit Reciept</a>
          <a href="transaction_8.php"  class="nav-link blinking-link"  onclick="disableSubnav()">Transaction History</a>
          <a href="Report_10.php" class="nav-link  blinking-link"  onclick="disableSubnav()">Report</a>
        </div>
        <a href="profile_6.php" class="nav-link blinking-link">Profile</a>
        <a href="home_12.php" class="nav-link blinking-link" onclick="window.location.href='sai1.php'">Home</a>
    </nav>
<main>
    <div class="container">
        <div >
        <img src="rgukt.png"  class="img1">
        <h2 id="h2" class="blinking-link">Welcome To Scholorship Website</h2>
        <button id="b" type="button" onclick="window.location.href='chat.php'">Apply For Certificate</button>
          <p class="p">This Scholorship Website is used for students<br> during renewal purpose.<br>The students can submit  payment Reciept in Online </p>
        <marquee scrollamount="10" behavoir="alternate"><p style="color:navy">This is the link for jnanabhumi portal To check whether Amount is Created or Not <a href="https://jnanabhumi.ap.gov.in" class="blinking-link">https://jnanabhumi.ap.gov.in</a></p></marquee>
        </div>
          <div>
        <img src="sc.jpg"   class="img2">
            <h2>About Us</h2>
            <p style="color:white">The scholarship portal is an online and android application portal especially designed for the students where in this scholarship portal we can manage the fees payment status and total due etc.It will include all the features example payment status,payment receipt submit,total due,scholarship status,etc.It is really helpful and usefull for the students 
        <p><a href="https://www.rgukt.in/pdfdoc/ScholarshipsRGUKT.pdf" style="color:black;margin-left:5%">To Know More About Scholorship Click Here</a></p>
        </div> <div>
            <h2>Contact Us</h2>
            <form method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>
        <button type="submit">Submit</button>
    </form>
    <pre>
        
    </pre>
        </div>
        <?php
        include 'con.php';
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      // Handle form submission
      $name = $_POST["name"];
      $email = $_POST["email"];
      $message = $_POST["message"];

      // Validate the data (you can add more validation if needed)

      $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

      if ($con->query($sql) === TRUE) {
        echo "Form submitted successfully!";
      } else {
        echo "Error: " . $sql . "<br>" . $con->error;
      }

    }
  ?>
        <div>

            <footer>
        <p>&copy; 2023 Scholarship Website</p>
        <p>Explore our <a href="#">Scholarship Programs</a> | Contact: <a href="o190357@rguktong.ac.in">o190357@rguktong.ac.in</a></p>
        <p>Follow us on <a href="#" target="_blank">Facebook</a> | <a href="#" target="_blank">Twitter</a></p>
    </footer>
        </div>
    </div>
    </main>
    <script>
    function toggleSubnav(id) {
      var subnav = document.getElementById(id + 'Subnav');
      if (subnav.style.display === 'block') {
        subnav.style.display = 'none';
      } else {
        subnav.style.background='rgb(168, 206, 211)';
        subnav.style.display = 'block';
      }
    }
    function disableSubnav() {
      // This function can be expanded based on your specific requirements.
      // For now, it simply hides all subnav elements.
      var subnavs = document.querySelectorAll('.subnav');
      subnavs.forEach(function(subnav) {
        subnav.style.display = 'none';
      });
    }
  </script>
    <script>
        // JavaScript and jQuery for loading content dynamically
        $(document).ready(function () {
            $(".nav-link").click(function (e) {
                e.preventDefault(); // Prevent the default link behavior

                // Get the href attribute of the clicked link
               
            /*    // Use AJAX to load the content from the selected page
                $.ajax({
                    url: page,
                    success: function (data) {
                    
                        $("#content").html(data); // Replace content with loaded data

                      }
                });*/
                var page = $(this).attr("href");
                $.ajax({
            url: page,
            
            success: function (data) {
                // Update the content div with the response from content.php
                $('main').html(data);
                $('main h3').css('font-weight', 'bold');
          $('main h1').css('font-weight', '600');
            },
            error: function () {
                alert("An error occurred while loading content.");
            }
        });
    });
            });
            function logout() {
      // Perform logout actions here (e.g., redirect to login page)
     window.location.href="contact.php";
    }

    </script>
</body>
</html>
