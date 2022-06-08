<!--

Kijken of het formulier is verstuurd
kijken of wachtwoorden gelijk zijn

    Kijken of de user al bestaat in de sql database\
    zo niet, dan user aanmaken met gebruik van password_Hash
    USERID ophalen zodat die in de SESSION komt
    opgehaalde data in de session plaatsen
    user doorsturen naar de homepagina.

    extra: De user kan pas admin worden gemaakt in de backend.

-->

<?php
include("../includes/connect.php");
$username   =   $_POST['username'];
$email      =   $_POST['email'];
$password   =   $_POST['password'];
if (empty($username || $password ||$email)) {
    echo "All fields must be filled!";
} else if (isset($_POST['Register'])) {
    $usernamecheck = $conn->prepare( "SELECT * FROM users where username = :username");
    $usernamecheck->bindParam(":username", $_POST['username'], PDO::PARAM_STR);
    $usernamecheck->execute();
    $res = $usernamecheck->fetch(PDO::FETCH_ASSOC);
    if (!$res){
        $sql = "INSERT INTO `users` (`userid`, `username`, `email`, `password`, `admin`) VALUES (NULL, '$username', '$email', '$password', '0');";
        echo $sql;
        $conn->prepare($sql)->execute();
        session_start();
        echo "successfull!";
        header('location: ../index.php');
        exit();
    } else {
        echo 'This account exists already!';
        header('location: ../index.php');
        exit();
    }
} else {
    echo 'idk what happened';
    var_dump($test);
}
        // header('location: ../admin/admin.php?planet_id='.$firstplanet.'');
    // header('location: ../index.php');
    // exit();

?>