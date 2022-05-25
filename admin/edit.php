<?php include('../includes/connect.php');
$prijs =        $_POST['prijs'];
$naam =         $_POST['naam'];
$imgsource =    $_POST['imgsource'];
$categorie =    $_POST['categorie'];
$beschrijving = $_POST['beschrijving'];
$id =  $_POST['product_id'];

if (empty($prijs || $naam || $imgsource || $categorie || $beschrijving)) {
    echo "All fields must be filled!";
} else if (isset($_POST['editItem'])) {
    $sql = "UPDATE journeys SET prijs=?, naam=?, imgsource=?, categorie=?, beschrijving=? WHERE id=?";
    $stm = $conn->prepare($sql);
    $stm->execute([$prijs, $naam, $imgsource, $categorie, $beschrijving, $id]);
} else {
    echo 'idk what happened';
    var_dump($test);
}
header("Location: ../admin/admin.php");
exit();
?>