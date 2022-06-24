<?php
include("../includes/connect.php");
session_start();
if(!isset($_SESSION['user_id'])){
  header('location: ../public/login.php');
  exit();;
}

if (isset($_POST['insert_review'])){
    $user_id = (int) $_SESSION['user_id'];
    var_dump($user_id);
    $planet_id = $_POST['planet_id'];
    $text = $_POST['text'];
    $stars = $_POST['stars'];
    $sql = "INSERT INTO reviews (`stars` , `user_id`, `planet_id`, `text`) VALUES ('$stars', '$user_id', '$planet_id', $text)";
    
}
?>