<?php include('../includes/connect.php');
include('admin_session.php');
        if(isset($_POST['deleteitem'])){
            $stm = $conn->prepare("DELETE FROM journeys WHERE planet_id = :planet_id");
            $stm->bindParam(":planet_id", $_POST['planet_id'], PDO::PARAM_INT);
            $stm->execute();
        }
        if(isset($_POST['deletereview'])){
            $stm = $conn->prepare("DELETE FROM reviews WHERE ID = :review_id");
            $stm->bindParam(":review_id", $_POST['ID'], PDO::PARAM_INT);
            $stm->execute();
        }
        if(isset($_POST['approvereview'])){
            $stm = $conn->prepare("UPDATE reviews SET curated=1 WHERE ID = :review_id");
            $stm->bindParam(":review_id", $_POST['ID'], PDO::PARAM_INT);
            $stm->execute();
        }
        if(isset($_POST['edit_user'])){
            $username   =   $_POST['username'];
            $email      =   $_POST['email'];
            $admin      =   $_POST['admin'];
            $user_id    =   $_POST['user_id'];
            $stm = $conn->prepare("UPDATE `users` SET `username`=?, `email`=?, `admin`=? WHERE `users`.`user_id`=?");
            // $stm->bindParam(":userid", $_POST['user_id'], PDO::PARAM_INT);
            $stm->execute([$username, $email, $admin, $user_id]);
        }
        if(isset($_POST['delete_user'])){
            $stm = $conn->prepare("DELETE FROM users WHERE user_id = :userid");
            $stm->bindParam(":userid", $_POST['user_id'], PDO::PARAM_INT);
            $stm->execute();
        }
        if(isset($_POST['edit_booked'])){
            $username   =   $_POST['username'];
            $email      =   $_POST['email'];
            $admin      =   $_POST['admin'];
            $user_id    =   $_POST['user_id'];
            $stm = $conn->prepare("UPDATE `users` SET `username`=?, `email`=?, `admin`=? WHERE `users`.`user_id`=?");
            // $stm->bindParam(":userid", $_POST['user_id'], PDO::PARAM_INT);
            $stm->execute([$username, $email, $admin, $user_id]);
        }
        if(isset($_POST['delete_booked'])){
            $stm = $conn->prepare("DELETE FROM users WHERE user_id = :userid");
            $stm->bindParam(":userid", $_POST['user_id'], PDO::PARAM_INT);
            $stm->execute();
        }
        header("Location: ../admin/admin.php");
        exit();
?>