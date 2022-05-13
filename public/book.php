<?php
include("../includes/connect.php");
include("../includes/header.php"); 
include("../includes/navbar.php");

$stm = $conn->prepare("SELECT * FROM journeys WHERE ID = :product_id");
$stm->bindParam(":product_id", $_GET['product_id'], PDO::PARAM_INT);
$stm->execute();
$result = $stm->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $i)
{echo "
    <div class='journey_base_div'>
    <div class='journey_div'>
    <div class='journey_img'>
    <img class='journey_img_img' src='../assets/img/planets/".$i['name'].".png'></div>
    <div class='journey_txt'>
    <h1>".$i['name']."</h1>
    <p>".$i['description']."</p></div>
    <div class='journey_buttons'>
    <a class='journey_buttons_link'><button class='journey_buttons_butn' href=\"book.php?product_id=".$i['ID']."\">Information</button></a>
    </div></div></div>
";}?>

