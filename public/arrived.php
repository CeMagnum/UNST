<?php
include("../includes/header.php");
?>
<div class="arrived_div">
    <div class="arrvived_rev_div">
        <form action="post">
            <div class="arrived_txt">
                <h1>Do you want to write a review?</h1>
            </div>
            <div class="arrvived_rev_name_div">
              <div class="arrvived_txt">
                <p>tell us your name</p>
              </div>
              <div class="arrvived_rev_name_input">
                <input type="text" placeholder="        type your name here" />
              </div>
            </div>
            <div class="arrvived_rev_txt_div">
              <div class="arrvived_txt">
                <p>What did you think of your trip</p>
              </div>
              <div class="arrvided_rev_txt_input">
                <textarea placeholder="      type somehitng here"></textarea>
              </div>
            </div>
            <div class="arrvived_rev_star_div">
              <div class="arrvived_txt">
                <p>rate 1/5</p>
              </div>
              <div class="arrvived_rev_star_input">
                <input type='range' name='rangeInput' onchange='updateTextInput(this.value);'min='1' max='5' step='1'value='1' id='slider_booking'>
                <input type='text' value='1' readonly id='textInput'>..</p>
              </div>
            </div>
            <div class="arrived_rev_butn">
                <button class="arrived_butn1">no i do not want to leave a reveiuw</button>
                <input class="arrived_butn2" type="submit" value="submit reviuw">
            </div>
        </form>
       
      </div>
</div>
<script src="../assets/js/slider.js"></script>
</body>
</html>