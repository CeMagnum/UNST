<?php include('../includes/header.php');
include('../includes/connect.php');
session_start();
if(!isset($_SESSION['user_id'])){
  header('location: ../public/login.php');
  exit();;
  var_dump($_SESSION);
}
?>
<div class="navbar_main_div">
  <div class="navbar_logo">
    <a href="../index.php"
      ><img src="../assets/img/logo2_small_WIP.png" alt="logo"
    /></a>
  </div>
  <div class="navbar_middle_div">
    <a class="navbar_link" href="../index.php">
      <button class="navbar_butn">Home</button>
    </a>
    <a class="navbar_link" href="../public/journey.php">
      <button class="navbar_butn">great journey</button>
    </a>
    <a class="navbar_link" href="../public/contact.php">
      <button class="navbar_butn">Contact</button>
    </a>
    <?php
      // session_start();
      if(isset($_SESSION['user_id'])){
          $user_id = (int) $_SESSION['user_id'];
          $blem = $conn->prepare("SELECT username FROM users WHERE user_id = :userid");
          $blem->bindParam(":userid", $user_id, PDO::PARAM_INT);
          $blem->execute();
          $result = $blem->fetchAll(PDO::FETCH_ASSOC);
          echo "<a class='navbar_link' href='../private/account.php'>
          <button class='navbar_butn'>Logged in as ".$result[0]['username']."</button></a>";
      } else {
          echo "<a class='navbar_link' href='../public/login.php'>
          <button class='navbar_butn'>Login</button></a>";
      }
      ?>
  </div>
</div>
<div class="navbar_space"></div>

<div class="acc_main_div">
  <div class="acc_left_div">
    <div class="acc_info">
      <h1>Hello <?php 
      session_start();
      if(isset($_SESSION['user_id'])){
          $user_id = (int) $_SESSION['user_id'];
          $blem = $conn->prepare("SELECT * FROM users WHERE user_id = :userid");
          $blem->bindParam(":userid", $user_id, PDO::PARAM_INT);
          $blem->execute();
          $result = $blem->fetchAll(PDO::FETCH_ASSOC);
          echo "".$result[0]['username']."</h1>
          <p>username:</p>
          <p>".$result[0]['username']."</p>
          <p>email:</p>
          <p>.$result[0]['email'].</p>
          ";
      }?>
      
      <a href="..IDK LINK NAAR FORGOT PASSWORD">

        <button>DELETE ACCOUTN</button>
      </a>
      <a href="../functions/logout.php">
        <button>Logout</button>
      </a>
    </div>
  </div>
  <div class="acc_middle_div">
    <div class="acc_booked">
      <h1>Planned bookings</h1>
      <!-- PHP start here -->
      <div class="book_card">
        <div class="card_content">
          <p>..username..</p>
          <p>..planet..</p>
          <p>..datestart..</p>
          <p>..dateend..</p>
        </div>
      </div>
      <!-- PHP end here -->
    </div>
  </div>
  <div class="acc_right_div">
    <div class="acc_rev">
      <h1>Written Reviews</h1>
      <!-- php start here -->
      <div class="rev_card">
        <div class="rev_content">
          <p>..planet..</p>
          <textarea readonly name="txt">..TXT..</textarea>
          <p>..stars..</p>
        </div>
      </div>
      <!-- php end here -->
      <div class="rev_card">
        <div class="rev_content">
          <p>..planet..</p>
          <textarea readonly name="txt">..TXT..</textarea>
          <p>..stars..</p>
        </div>
      </div>
      <div class="rev_card">
        <div class="rev_content">
          <p>..planet..</p>
          <textarea readonly name="txt">..TXT..</textarea>
          <p>..stars..</p>
        </div>
      </div>
      <div class="rev_card">
        <div class="rev_content">
          <p>..planet..</p>
          <textarea readonly name="txt">..TXT..</textarea>
          <p>..stars..</p>
        </div>
      </div>
      <div class="rev_card">
        <div class="rev_content">
          <p>..planet..</p>
          <textarea name="txt">..TXT..</textarea>
          <p>..stars..</p>
        </div>
      </div>
      <div class="rev_card">
        <div class="rev_content">
          <p>..planet..</p>
          <textarea name="txt">..TXT..</textarea>
          <p>..stars..</p>
        </div>
      </div>
      <div class="rev_card">
        <div class="rev_content">
          <p>..planet..</p>
          <textarea name="txt">..TXT..</textarea>
          <p>..stars..</p>
        </div>
      </div>
    </div>
  </div>
</div>
