<?php
include("../includes/connect.php");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $qu = "SELECT * FROM users WHERE 'username' = $username"; 

    // Ophalen userID, password en admin 
    // password om daarna te controleren of die klopt met het ingevoerde wachtwoord (password_verify)
    // Als die kloppen, dan controleren of admin 0 of 1 is, zodat je weet of je de sessioN_admin op true moet zetten
    // dan sturen naar de juiste pagina, bij admin kan dat de backend zijn, bij user kan het de frontend zijn

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