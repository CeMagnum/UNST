<?php
include("../includes/header.php");
?>
<div class="arrived_div">
    <div class="arrvived_rev_div">
        <form  method="post" action="insert.php">
            <div class="arrived_txt">
                <h1>Do you want to write a review?</h1>
            </div>
            <div class="arrvived_rev_txt_div">
              <div class="arrvived_txt">
                <p>write your expreriance</p>
              </div>
              <div class="arrvided_rev_txt_input">
                <textarea name="text" placeholder="        type somehitng here"></textarea>
              </div>
            </div>
            <div class="arrvived_rev_star_div">
              <div class="arrvived_txt">
                <p>rate out of 5</p>
              </div>
              <div class="arrvived_rev_star_input">
                <input type='range' name='rangeInput' onchange='updateTextInput(this.value);'min='1' max='5' step='1'value='5' id='slider_booking'>
                <input type='text' name="stars" value='5' readonly id='textInput'>..</p>
              </div>
            </div>
            <div class="arrived_rev_butn">
                <a href="../index.php"><button class="arrived_butn1">no i do not want to leave a reveiuw</button></a>
                <input class="arrived_butn2" type="submit" value="send" name="bttn">
            </div>
        </form>
       
      </div>
</div>
<script src="../assets/js/slider.js"></script>
</body>
</html>
<!-- 
<form method="post" action="insert.php">
    <input type="text"   name="price"            placeholder="Price">
    <input type="text"   name="planet"           placeholder="Planet name">
    <input type="text"   name="img"              placeholder="Image">
    <input type="text"   name="shortdescription" placeholder="Short description">
    <input type="text"   name="longdescription"  placeholder="Long description">
    <input type="submit" name="bttn" value="send">
</form> -->