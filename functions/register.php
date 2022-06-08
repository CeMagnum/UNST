<!--

Kijken of het formulier is verstuurd
kijken of wachtwoorden gelijk zijn

    Kijken of de user al bestaat\
    zo niet, dan user aanmaken met gebruik van password_Hash
    USERID ophalen zodat die in de SESSION komt
    opgehaalde data in de session plaatsen
    user doorsturen naar de homepagina.

    extra: De user kan pas admin worden gemaakt in de backend.

-->

<?php
include("../includes/connect.php");

if(isset($_POST['register'])){
    $usernamecheck = "SELECT * FROM users where username = :username";
    $usernamecheck->bindParam(":username", $_POST['username'], PDO::PARAM_STR);
    $sql = "SELECT * FROM users where username = :username";
    $stm = $conn->prepare($sql);
    $stm->execute([:username]);


    // header('location: ../admin/admin.php?planet_id='.$firstplanet.'');
    exit();

} else {
    header('location: ../index.php');
    exit();
}

?>