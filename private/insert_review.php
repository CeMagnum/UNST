<?php
include("../includes/connect.php");
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $text = $_POST['text'];
    $stars = $_POST['stars'];
    $sql = "INSERT INTO reviews (planet, shortdescription, longdescription, price) VALUES ('$planet', '$shortdescription', '$longdescrtiption', $price)";
    
    if (empty($planet || $shortdescription || $longdescription || $price)) {
        echo "All fields must be filled in!";
    } else if (isset($_POST['bttn'])) {
        echo 'Complete!';
        $conn->prepare($sql)->execute();
        header('Location: ../admin/admin.php');
	    exit();
    } else {
        echo 'idk what happened';
    }
} else {
    echo "<br>";
} ?>