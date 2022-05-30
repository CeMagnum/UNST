<?php
include("../includes/connect.php");
include("../includes/header.php"); 
include("../includes/navbar.php");

$stm = $conn->prepare("SELECT * FROM journeys WHERE planet = :journey");
$stm->bindParam(":journey", $_GET['journey'], PDO::PARAM_STR);
$stm->execute();
$result = $stm->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $i)
{echo "
    <div class='journey_base_div'>
    <div class='booking_div'>
    <div class='booking_img'>
    <img class='booking_img_img' src='../assets/img/planets/".$i['planet'].".png'></div>
    <div class='booking_txt'>
    <h1>".$i['planet']."</h1>
    <p>".$i['longdescription']."</p></div>
    <div class='booking_buttons'>
    <div class='booking_section'>
    <h1>
        Price    
    </h1>
    <br>
    <p>".$i['price']."</p>
    </div>
    <div class='booking_section'>
    <h1>
        How many travellers?    
    </h1>
    <br>
    <div class='booking_slider_person'>
        <input type='range' name='rangeInput' onchange='updateTextInput(this.value);'min='1' max='10' step='1'value='1' id='slider_booking'>
    <input type='text' value='1' readonly id='textInput'>..</p>
    </div>
    </div>
    <div class='booking_section'>
    <h1>
        Date?    
    </h1>
    <br>
    <div class='booking_date'>
        <p>From</p>    
        <input type='date' value='2022-05-25' min='2022-05-25' max='3000-12-31' id='booking_date'>
    </div>
    <div class='booking_date'>
        <p>to</p>    
        <input type='date' value='2022-05-25' min='2022-05-25' max='3000-12-31' id='booking_date'>
    </div>
    </div>
    <div class='booking_section'>
    <h1>
        Go on a great journey!    
    </h1>
    <br>
    <a class='booking_buttons_link' href=\"book.php?journey=".$i['planet']."\"><button class='booking_buttons_butn'>order!</button></a>
    </div>

</div></div></div>
";}?>


<div class='recenties_txt_div'>
        <h1>Recenties van onze klanten</h1>
        <p>onze klanten houden van de ruimte. want de ruimte is mooi met al die sterren enzovoort. je moet een weeten waar noble six zit lekker in mijn achtertuin.</p>
    </div>
    <div class='home_recentie_div'>
        <div class='recenties_div'>
            <div class='recenties_div_1'>
                <div class='recenties_div_2'>
                    <div class='recenties_div_3'>

<?php
$blem = $conn->prepare("SELECT * FROM reviews WHERE planet = :planetname");
$blem->bindParam(":planetname", $_GET['journey'], PDO::PARAM_STR);
$blem->execute();
$result = $blem->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $i)
{echo "
<div class='recentie_content'>
<div class='recentie_content_naam'>
<p>".$i['username']."</p></div>
<div class='recentie_content_plaats'><p>".$i['planet']."</p></div>
<div class='recentie_content_txt'>
<p>".$i['text']."</p></div>
<div class='recentie_content_ster'>
<p>".$i['stars']." stars</p>
</div>
</div>
ik wil ook kaas ik ben ook een klant
";}
?>
</div></div></div></div></div>
<script src="../assets/js/slider.js"></script>
</body>
</html>     

