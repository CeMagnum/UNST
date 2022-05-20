<?php
include('../includes/header.php');
include('../includes/connect.php');
?>
<title>Journey</title>
<link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">
<button onclick="topFunction()" id="myBtn" title="Go to top">Back to top</button>
<?php include("../includes/navbar.php");?>
<div class="journey_search_div">
  <h1>
      Search your journey!
  </h1>
  <p>
      We here at the united nation space travels wouold like to take you on your great Journey
  </p>
  <form class="nav_form" method="get">
    <input type="text" placeholder="Find your great journey" name="search">
</form>
</div>


<?php   
    if (isset($_GET['search'])){
    $search = '%'.$_GET['search'].'%';
    $sql = "SELECT * FROM journeys WHERE planet LIKE :search ORDER BY planet ASC";
    $stm = $conn->prepare($sql);
    $stm->bindParam(":search", $search);
  } else {
    $sql = "SELECT * FROM journeys ORDER BY planet ASC";
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

include('../includes/footer_index.php');
?>

<script src="../assets/js/backtotop.js"></script>
</html>