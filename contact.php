<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholorship Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: rgb(64,86,182);
            padding: 10px;
            text-align: center;
            color: white;
        }

       
        section {
            padding: 20px;
            margin-top: 10%;
            text-align: center;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: rgb(64,86,182);
        }

        #loginBtn, #signupBtn {
            background-color: rgb(64,86,182);
            color: white;
            border: none;
        }
        #loginBtn:hover{
            background-color: white;
            border:2px solid black;
            color:navy;
        }
        #signupBtn:hover{
            background-color: white;
            border:2px solid black;
            color:navy;
        }
        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            transition: opacity 0.5s ease-in-out;
        }

        .modal-content {
            background-color: #fefefe;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            transform: translateY(-100%);
            transition: transform 0.5s ease-out;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .switch-form {
            color: #4CAF50;
            cursor: pointer;
        }
        .login:hover{
            background-color: white;
            border: 2px solid black;
            color:black;
        }
        #admin{
           background-color: white;
           border: 2px solid rgb(64,86,182);
            color:black;
            width:10%
        }
        #admin:hover{
            background-color: rgb(64,86,182);
            border:2px solid black;
            color:white;
        }
        @media(max-width:991px){
            #admin{
                width:20%;
            }
        }
    </style>
</head>
<body>

    <header>
        <h1>Scholorship Website</h1>
        <h3>Rajiv Gandhi  University Of Knowledge And Technologies<h3>
      </header>
      
    <section>
        <h2>Welcome to Scholorship Website</h2>
        <button id="loginBtn" onclick="openModal('loginModal')">Login</button>&nbsp;&nbsp;&nbsp;
        <button id="signupBtn" onclick="openModal('signupModal')">Sign Up</button><br><br>
        <button id="admin" onclick="openAdminModal()">Admin</button>
       
    </section>
    <div id="adminModal" class="modal">
    <div class="modal-content">
      <span class="close-button" onclick="closeAdminModal()">&times;</span>
      <h2>Admin Login Options</h2>
      <p><a href="#" onclick="openModal('Admin')">Scholorship Officer Login</a></p>
      <p><a href="#" onclick="openModal('FO')">Examinor Login</a></p>
      <p><a href="#" onclick="openModal('Examiner')">Finance Officer Login</a></p>
    </div>
  </div>
  <div id="Admin" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('Admin')">&times;</span>
            <h2>Login</h2>
            <form  method="post" action="admin1.php">
                <label for="username">Username:</label>
                <input type="text" id="email" name="email1" required><br><br><br>

                <label for="password">Password:</label>
                <input type="password" id="password1" name="password1" required><br><br><br>

                <button type="submit" onclick="window.location.href='admin1.php'" class="login">Login</button>
            </form>
               </div>
    </div>
    <div id="FO" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('FO')">&times;</span>
            <h2>Login</h2>
            <form  method="post" action="admin2.php">
                <label for="username">Username:</label>
                <input type="text"  name="email2" required><br><br><br>

                <label for="password">Password:</label>
                <input type="password"  name="password2" required><br><br><br>

                <button type="submit" onclick="window.location.href='admin2.php'" class="login">Login</button>
            </form>
               </div>
    </div>

    <!-- Login Modal -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('loginModal')">&times;</span>
            <h2>Login</h2>
            <form action="login.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="email" required><br><br><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br><br><br>

                <button type="submit" onclick="window.location.href='login.php'" class="login">Login</button>
            </form>
            <p class="switch-form" onclick="switchForm('signupModal')">Don't have an account? Sign up here!</p>
        </div>
    </div>

    <!-- Signup Modal -->
    <div id="signupModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('signupModal')">&times;</span>
            <h2>Sign Up</h2>
            <form action="signup.php" method="post">
                <label for="newUsername">Username:</label>
                <input type="text" id="newUsername" name="email" required><br><br><br>

                <label for="newPassword">Password:</label>
                <input type="password" id="newPassword" name="password" required><br><br><br>

                <button type="submit" onclick="window.location.href='signup.php'">Sign Up</button>
            </form>
            <p class="switch-form" onclick="switchForm('loginModal')">Already have an account? Log in here!</p>
        </div>
    </div>

    <script>
          function openAdminModal() {
      document.getElementById('adminModal').style.display = 'flex';
    }
        function openModal(modalId) {
            var modal = document.getElementById(modalId);
            modal.style.display = 'flex';
            setTimeout(function () {
                modal.style.opacity = '1';
                modal.querySelector('.modal-content').style.transform = 'translateY(0)';
            }, 5);
        }
        function closeAdminModal() {
      document.getElementById('adminModal').style.display = 'none';
    }

        function closeModal(modalId) {
            var modal = document.getElementById(modalId);
            modal.style.opacity = '0';
            modal.querySelector('.modal-content').style.transform = 'translateY(-100%)';
            setTimeout(function () {
                modal.style.display = 'none';
            }, 500);
        }

        function switchForm(targetModal) {
            closeModal('loginModal');
            closeModal('signupModal');
            setTimeout(function () {
                openModal(targetModal);
            }, 500);
        }

        window.onclick = function(event) {
            var loginModal = document.getElementById('loginModal');
            var signupModal = document.getElementById('signupModal');
            
            if (event.target == loginModal) {
                closeModal('loginModal');
            }

            if (event.target == signupModal) {
                closeModal('signupModal');
            }
        }
    </script>

</body>
</html>
