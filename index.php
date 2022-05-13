<?php
include("includes/header.php");
include("includes/connect.php")
?>
<link rel="stylesheet" href="./assets/css/style.css">
<title>UNST Landing</title>
<link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">
<body>
<div class="navbar_main_div">
    <div class="navbar_middle_div">
        <a class="navbar_link" href="index.php"><button class="navbar_butn">Home</button></a>
        <a class="navbar_link" href="public/journey.php"><button class="navbar_butn">Plan your great journey</button></a>
        <a class="navbar_link" href="public/contact.php"><button class="navbar_butn">Contact</button></a>
        <a class="navbar_link" href="public/login.php"><button class="navbar_butn">log in</button></a>
    </div>
</div>
<div class="navbar_space"></div>
<div class="home_landing_title">
   <h1>Welcome to United Nations Travels</h1>
    <p>
        We are very pleased for picking our flight industry. We know that we are one of fewe so we try to get you to the best places as save as possible
        we have verry good transportation.
    </p> 
</div>
<div class="space_medium"></div>
<div class="home_info_div">
    <div class="home_info_section">
        <h2>Why would fly with us?</h2>
        <p>You see you dant want to get glassed by aliens do you?</p>
    </div>
    <div class="home_info_section">
        <h2>Why we fly for you</h2>
        <p>We need your children for a special case that will save humantiy. We do not know the survival rate but i means does anyone?</p>
    </div>
    <div class="home_info_section">
        <h2>Why Us and not the Covenant?</h2>
        <p>Well the Covenant is full of Bullys. They bully humanity and we dont like bullies dont we?</p>
    </div>
</div>
<div class="home_journeys_div">

<div class="home_carrousel">
    <div class="slideshow-container">

    <?php 
    $stm = $conn->query("SELECT * FROM journeys");
    $stm->execute();
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $i)
    {echo "
        <div class='mySlides fade'>
        <a href=\"public/book.php?journey=".$i['planet']."\"><img class='img_slideshow' src='assets/img/planets/".$i['planet'].".png'></a>
        <div class='txt_slideshow'>".$i['planet']."<br>".$i['shortdescription']."</div>
        </div>
    ";}?>
    </div><br><div class="dot_container">
    <?php foreach($result as $i)
    {echo "<span class='dot'></span>";}?>
    </div>
</div>

<div class="home_recenties_div">
    <div class="recenties_txt_div">
        <h1>Recenties van onze klanten</h1>
        <p>onze klanten houden van de ruimte. want de ruimte is mooi met al die sterren enzovoort. je moet een weeten waar noble six zit lekker in mijn achtertuin.</p>
    </div>












<div class="home_recentie_div">
    <div class="recenties_div">
        <div class="recenties_div_1">
            <div class="recenties_div_2">
                <div class="recenties_div_3">
                    <div class="recentie_content">
                        <div class="recentie_content_ster">
                            <p>ster hier</P>
                        </div>
                        <div class="recentie_content_naam">
                            <p>Naam hier</p>
                        </div>
                        
                        <div class="recentie_content_plaats">
                            <p>Plaats hier</p>
                        </div>
                        <div class="recentie_content_txt">
                            <p>Tekst hier</p>
                        </div>
                    </div>
                    <div class="recentie_content">
                        <div class="recentie_content_ster">
                            <p>ster hier</P>
                        </div>
                        <div class="recentie_content_naam">
                            <p>Naam hier</p>
                        </div>
                        <div class="recentie_content_plaats">
                            <p>Plaats hier</p>
                        </div>
                        <div class="recentie_content_txt">
                            <p>Tekst hier</p>
                        </div>
                    </div>
                    <div class="recentie_content">
                        <div class="recentie_content_ster">
                            <p>ster hier</P>
                           
                        </div>
                        <div class="recentie_content_naam">
                            <p>Naam hier</p>
                        </div>
                        
                        <div class="recentie_content_plaats">
                            <p>Plaats hier</p>
                        </div>
                        <div class="recentie_content_txt">
                            <p>Tekst hier</p>
                        </div>
                        
                    </div>
                    <div class="recentie_content">
                        <div class="recentie_content_ster">
                            <p>ster hier</P>
                        </div>
                        <div class="recentie_content_naam">
                            <p>Naam hier</p>
                        </div> 
                        
                        <div class="recentie_content_plaats">
                            <p>Plaats hier</p>
                        </div>
                        <div class="recentie_content_txt">
                            <p>Tekst hier</p>
                        </div>
                       
                    </div>
                </div>   
            </div>   
        </div>
</div>
   
</div>     
</div>
</body>
<script src="./assets/js/carousel.js"></script>
<?php include('includes/footer.php'); ?>