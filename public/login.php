<?php include("../includes/header.php");
include('../includes/connect.php');
include("../includes/navbar.php") ?>
<body>
    <div class="login_div">
      
      <div class="loggin_main">
        <div class="loggin_txt">
          <p>Log in</p>
        </div>
        <div class="loggin_form">
          <form class="loggin_log" action="../functions/login.php" method="post"> 
            <label for="name">Username:</label><br>
            <input type="text" id="name" name="username" autocomplete="off" placeholder="username here" ><br>
            <label for="pass">Password:</label><br>
            <input type="password" id="pass" name="password" autocomplete="off"><br>
            <input type="submit" id="button" name="login" value="Login">
          </form>
      </div>
    </div>
    <div class="loggin_main">
      <div class="loggin_txt">
        <p>Register</p>
      </div>
      <?php 
      var_dump($_SESSION['user_id']);
      ?>
      <form class="loggin_log" action="../functions/register.php" method="post"> 
            <label>Username:</label><br>
            <input type="text" id="name" name="username" autocomplete="off"><br>
            <label for="name">Email:</label><br>
            <input type="text" id="email" name="email" autocomplete="off"><br>
            <label for="pass">Password:</label><br>
            <input type="password" id="pass" name="password" autocomplete="off"><br>
            <input type="submit" id="button" name="Register" value="Register">
      </form> 
    </div>
 
</div>
<!-- <script src="../assets/js/fieldvalidation.js"></script> -->
</body>
</html>