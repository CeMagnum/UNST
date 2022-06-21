<?php
include('../private/user_session.php');
if(isset($_POST['insert_booking'])){
    $user_id = $_SESSION['user_id'];
    $planet_id = "SELECT `planet_id` FROM `journeys`WHERE `planet_id` = `:planet_id`";
    $price = "SELECT `price` FROM `journeys`WHERE `price` = `:price`";
    $travellers =   $_POST['travellers'];
    $start_date =   $_POST['start'];
    $end_date   =   $_POST['end'];
    // $sql = "INSERT INTO `bookings`(`user_id`, `planet_id`, `price`, `travellers`, `start`, `end`) VALUES ('$user_id','$planet_id','$price','$travellers','$start_date','$end_date');";
    // $conn->prepare($sql)->execute();
    // header("Location: ../private/account.php");
    // exit();
    var_dump($_POST);
    echo "<br>";
    var_dump($_SESSION);
    echo "<br>";
    var_dump($planet_id);
    echo "<br>";
    var_dump($price);
}
?>