<?php
include('../includes/header.php');
include('../includes/connect.php');
// include('../includes/session.php');
?>
<title>Journey</title>
<link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">
<button onclick="topFunction()" id="myBtn" title="Go to top">Back to top</button>
<?php include("../includes/navbar.php")?>
<div class="navbar_space"></div>


<?php
// $stm = $conn->prepare("SELECT * FROM journeys");
$stm = $conn->query("SELECT * FROM journeys");
$stm->execute();
$result = $stm->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $i)
{echo "<div class='journey_base_div'>
    <div class='journey_div'>
    <div class='journey_img'>
    <img class='journey_img_img' src='../assets/img/planets/".$i['name'].".png'></div>
    <div class='journey_txt'>
    <h1>".$i['name']."</h1>
    <p>".$i['shortdescription']."</p></div>
    <div class='journey_buttons'>
    <a class='journey_buttons_link'><button class='journey_buttons_butn' href=\"book.php?product_id=".$i['ID']."\">Information</button></a>
    </div></div></div>";}
?>


<!-- <div class="journey_base_div">
    <div class="journey_div">
        <div class="journey_img">
            <img class="journey_img_img" src="../assets/img/planets/Planet Reach.png" alt="lol">
        </div>
        <div class="journey_txt">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis dicta illum eveniet voluptatibus incidunt at, aliquam neque quos mollitia, quas ab ipsam laboriosam tempore deleniti quo est, quod repellendus numquam!
            </p>
        </div>
        <div class="journey_buttons">
            <a class="journey_buttons_link"><button class="journey_buttons_butn">boek</button></a>
        </div>
    </div>
</div> -->

<script src="../assets/js/backtotop.js"></script>
<?php include('../includes/footer.php'); ?>