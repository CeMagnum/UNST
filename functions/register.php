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
$password   =   password_hash($_POST['password'], PASSWORD_DEFAULT);
if (empty($username || $password ||$email)) {
    echo "All fields must be filled!";
    header('location: ../index.php');
    exit();
} else if (isset($_POST)) {
    $usernamecheck = $conn->prepare( "SELECT * FROM users where username = :username");
    $usernamecheck->bindParam(":username", $_POST['username'], PDO::PARAM_STR);
    $usernamecheck->execute();
    $res = $usernamecheck->fetch(PDO::FETCH_ASSOC);
    if (!$res){
        $sql = "INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `admin`) VALUES (NULL, '$username', '$email', '$password', '0');";
        echo $sql;
        $conn->prepare($sql)->execute();
        echo "successfull!";
        header('location: ../public/login.php');
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