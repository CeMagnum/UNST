<?php include('../includes/connect.php');
        if(isset($_POST['deleteitem'])){
            $stm = $conn->prepare("DELETE FROM journeys WHERE planet_id = :planet_id");
            $stm->bindParam(":planet_id", $_POST['planet_id'], PDO::PARAM_INT);
            $stm->execute();
        }
        header("Location: ../admin/admin.php");
        exit();
?>