<?php include('../includes/connect.php');
        if(isset($_POST['deleteitem'])){
            $stm = $conn->prepare("DELETE FROM journeys WHERE planet = :product_name");
            $stm->bindParam(":product_name", $_POST['product_name'], PDO::PARAM_INT);
            $stm->execute();
        }
        // header("Location: ../admin/admin.php");
        exit();
?>