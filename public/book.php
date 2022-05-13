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
    <div class='journey_div'>
    <div class='journey_img'>
    <img class='journey_img_img' src='../assets/img/planets/".$i['planet'].".png'></div>
    <div class='journey_txt'>
    <h1>".$i['planet']."</h1>
    <p>".$i['description']."</p></div>
    <div class='journey_buttons'>
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

