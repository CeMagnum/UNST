<?php
include("../includes/connect.php");
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $user = $_POST['userid'];
    $planet = $_POST['planet_id'];
    $text = $_POST['text'];
    $stars = $_POST['stars'];
    $sql = "INSERT INTO reviews (stars , username, planet, curated) VALUES ('$stars', '$user', '$planet', $text , 2)";
    $sql1 = "SELECT username FROM users WHERE userid = $user";
    $sql2 = "SELECT planet FROM journeys WHERE planet_id = $planet";
}

// if name = nosend{
//       header('location: ../public/login.php');
// exit();
// }
// 
// 
// 
// 
// 
?>