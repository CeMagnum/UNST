<?php
include('../includes/header.php');
include('../includes/connect.php');
?>
<title>Journey</title>
<link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">
<button onclick="topFunction()" id="myBtn" title="Go to top">Back to top</button>
<?php include("../includes/navbar.php");?>

<form class="nav_form" method="get" action="#">
    <input class="nav_bar" type="text" placeholder="Find your great journey" name="search">
</form>

<?php   

    if (isset($_GET['search'])){
    $search = '%'.$_GET['search'].'%';
    $sql = "SELECT * FROM journeys WHERE planet LIKE :search";
    $stm = $conn->prepare($sql);
    $stm->bindParam(":search", $search);
  } else {
    $sql = "SELECT * FROM journeys";
    $stm = $conn->prepare($sql);
  }
    $stm->execute();
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($result as $i)
    {echo "
        <div class='journey_base_div' id='".$i['planet']."'>
        <div class='journey_div'>
        <div class='journey_img'>
        <div class='aspect_div'>
        <img class='journey_img_img' src='../assets/img/planets/".$i['planet'].".png'></div></div>
        <div class='journey_txt'>
        <h1>".$i['planet']."</h1>
        <p>".$i['shortdescription']."</p></div>
        <div class='journey_buttons'>
        <a class='journey_buttons_link' href=\"book.php?journey=".$i['planet']."\"><button class='journey_buttons_butn'>Information</button></a>
        </div></div></div>";}


?>

<script src="../assets/js/backtotop.js"></script>
<?php include('../includes/footer.php'); ?>