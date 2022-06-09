<?php
include("includes/header.php");
include("includes/connect.php");
?>
<link rel="stylesheet" href="./assets/css/style.css">
<title>UNST Landing</title>
<link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">
<body>
    <div class="navbar_main_div">
        <div class="navbar_logo">
            <img src="./assets/img/Logo2_small_WIP.png" alt="logo" />
        </div>
        <div class="navbar_middle_div">
            <a class="navbar_link" href="index.php">
            <button class="navbar_butn">Home</button>
            </a>
            <a class="navbar_link" href="./public/journey.php ">
            <button class="navbar_butn">great journey</button>
            </a>
            <a class="navbar_link" href="./public/contact.php">
            <button class="navbar_butn">Contact</button>
            </a>
            <a class="navbar_link" href="./public/login.php">
            <button class="navbar_butn">log in</button>
            </a>
        </div>
    </div>
<div class="navbar_space"></div>
<div class="home_landing_title_div" id="landing">
    <div class="home_landing_title">
        <h1>Welcome to</h1>
        <br>
        <h1>United Nations Space Travels</h1>
        <p>We help create the greatest journeys</p> 
    </div>
   <div class="home_landing_txt">
       <p>
        We are very pleased for picking our flight industry. We know that we are one of fewe so we try to get you to the best places as save as possible
        we have verry good transportation. Drop in with your homeis, contribute to our latest new thiung, spartansm, these kids are "choses" to help us get you from point a to point
        it will be an epic journey with adventure, death, life and smiles
    </p> 
    <a href="private/base.php">private</a>
   </div>
</div>
<div class="home_info_div" id="info">
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

<div class="home_carrousel" id="top_location">
    <div class="home_slideshow_txt">
        <h1>Greates journeys</h1>
        <div class="slideshow_txt_div">
            <p>
                There are a lot of locations and journeys you can go on. like earth, mars, jupiter and other known locations
                but did you know there is a dinosaur planet? A cold planet a desert planet and a monkey planet? there are so many option!
                there is also a midget planet and a chicken planet, there are so many spiecies and stuff. but the coolest place is the cool ring
                on the ring there are caves, buildings, wierd popckorn things, green and a lot of other people from the other place called UNSC.
                i dont know what they are doing there    
            </p> 
        </div>
    </div>
    <div class="slideshow">
        <div class="slideshow-container">
        <?php 
        $stm = $conn->query("SELECT * FROM journeys ORDER BY RAND()");
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $i)
        {echo "
            <div class='mySlides fade'>
            <a href=\"public/book.php?journey=".$i['planet']."\"><img class='img_slideshow' src='assets/img/planets/".$i['planet'].".png'></a>
            <div class='txt_slideshow'><h1>".$i['planet']."</h1><br><p>".$i['shortdescription']."</p></div>
            </div>
        ";}?>
        </div>
        <br>
        <div class="dot_container">
        <?php foreach($result as $i)
        {echo "<span class='dot'></span>";}?>
        </div>
    </div>
    
</div>

<div class="home_recenties_div" id="recenties">
    <div class="recenties_txt_div">
        <h1>Recenties van onze klanten</h1>
        <p>onze klanten houden van de ruimte. want de ruimte is mooi met al die sterren enzovoort. je moet een weeten waar noble six zit lekker in mijn achtertuin.</p>
    </div>
</div>
<div class="home_recentie_div">
    <div class="recenties_div">
        <div class="recenties_div_1">
            <div class="recenties_div_2">
                <div class="recenties_div_3">
                <?php $blem = $conn->prepare("SELECT * FROM reviews WHERE curated = 2 ORDER BY RAND()");
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
                    <p>".str_repeat('⭐', $i['stars'])."</p>
                    </div></div>";}?>
                </div>   
            </div>   
        </div>
    </div>
</div>
</div>
</div>
</div>     
</div>
<script src="./assets/js/carousel.js"></script>
<footer class="foot_div">
    <div class="footer_left">
    <img src="./assets/img/logo2_WIP.png" alt="Pelican" />
    </div>
    <div class="footer_right">
    <div class="footer_list">
        <a href="index.php"><p>Home</p></a>
        <hr class="footer_hr" />
        <a href="index.php#landing"><p>Landing</p></a>
        <a href="index.php#info"><p>information</p></a>
        <a href="index.php#top_location"><p>top locatations</p></a>
        <a href="index.php#recenties"><p>reviews</p></a>
    </div>
    <div class="footer_list">
    <a href="../public/journey.php"><h1>journey</h1></a>
    <hr class="footer_hr" />
    <a href="../public/journey.php#search"><p>search journey</p></a>
    <a href="../public/journey.php#journey"><p>destinations</p></a>
    </div>
<div class="footer_list">
    <a href="../public/contact.php"><h1>Contact</h1></a>
    <hr class="footer_hr" />
    <a href="../public/contact.php#information"><p>information</p></a>
    <a href="../public/contact.php#message"><p>contact us</p></a>
</div>

<div class="footer_list">
    <a href="../public/privacy_policy.php"><h1>privacy policy</h1></a>
</div>
</div>
</div>
</footer>
<script src="./assets/js/scrollfunciton.js"></script>
</body>
</html>