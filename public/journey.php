<?php
include('../includes/header.php');
include('../sql/connect.php');
include('../includes/session.php');
?>
<title>Journey</title>
<link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">
<button onclick="topFunction()" id="myBtn" title="Go to top">Back to top</button>


<div class="navbar_main_div">
    <div class="navbar_middle_div">
        <a class="navbar_link" href="../index.php"><button class="navbar_butn">Home</button></a>
        <a class="navbar_link" href=""><button class="navbar_butn">log in</button></a>
    </div>
</div>
<div class="navbar_space"></div>


<?php
$stm = $conn->prepare("SELECT * FROM locations");
$stm->execute();
$result = $stm->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $i)
{echo "<div class='journey_base_div'>
    <div class='journey_div'>
    <div class='journey_img'>
    <div class='journey_img_img' src='".$i['name']."'.png> alt='".$i['name']."'</div>
    <div class='journey_txt'>
    <p>".$i['text']."</p></div>
    <div class='yourney_buttons'>
    <a class='journey_buttons_link'><button class='journey_buttons_butn' href=\"product.php?product_id=".$i['ID']."\">boek</button></a>
    </div></div></div>";}
?>


<div class="journey_base_div">
    <div class="journey_div">
        <div class="journey_img">
            <img class="journey_img_img" src="../assets/img/default.png" alt="lol">
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
</div>

<script src="../assets/js/backtotop.js"></script>
<?php include('../includes/footer.php'); ?>