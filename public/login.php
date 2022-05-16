<?php include("../includes/header.php"); include("../includes/navbar.php") ?>
<body>
    <div class="login_div">
      <div class="loggin_main">
        <div class="loggin_txt">
          <p>Log in</p>
        </div>
        <div class="loggin_form">
          <form class="loggin_log" action="../includes/login.php" method="post"> 
            <label for="name">Naam:</label><br>
            <input type="text" id="name" name="fname"><br>
            <label for="pass">Wachtwoord:</label><br>
            <input type="password" id="pass" name="Lname"><br>
            <input type="submit" name="login" value="Login">
          </form>  
      </div>
    </div>
</div>
    <?php
        if (isset($_POST["sub"])){
        echo $_POST["fname"], $_POST["Lname"], $_POST["age"]; 
        }
    ?> 
  </body>
</html>