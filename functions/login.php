<?php
include("../includes/connect.php");
    if(isset($_POST['login'])){
        session_start();
        $_SESSION['admin'] = true;
        $firstplanet = "SELECT planet_id FROM journeys ORDER BY planet ASC LIMIT 1";
        header('location: ../admin/admin.php?planet_id='.$firstplanet.'');
        exit();
    } else{
    header('location: ../index.php');
    exit();
}
?>