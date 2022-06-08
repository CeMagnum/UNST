<?php include("../includes/header.php"); include("../includes/navbar.php") ?>
<body>
    <div class="login_div">
      <div class="loggin_main">
        <div class="loggin_txt">
          <p>Log in</p>
        </div>
        <div class="loggin_form">
          <form class="loggin_log" action="../functions/login.php" method="post"> 
            <label for="name">Name:</label><br>
            <input type="text" id="name" autocomplete="off"><br>
            <label for="pass">Password:</label><br>
            <input type="password" id="pass" autocomplete="off"><br>
            <input type="submit" id="button" name="login" value="Login">
          </form>  
      </div>
    </div>
</div>
<!-- <script src="../assets/js/fieldvalidation.js"></script> -->
</body>
</html>