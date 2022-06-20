<?php include('../includes/connect.php');
include('admin_session.php');

    # PLANETS
        if(isset($_POST['insert_planet'])){
            $planet             =   $_POST['planet'];
            $shortdescription   =   $_POST['shortdescription'];
            $longdescription    =   $_POST['longdescription'];
            $price              =   $_POST['price'];
            $sql = "INSERT INTO `journeys`(`planet`, `shortdescription`, `longdescription`, `price`) VALUES ('$planet','$shortdescription','$longdescription','$price');";
            $conn->prepare($sql)->execute();
            header("Location: ./planets.php");
            exit();
        }
        if(isset($_POST['edit_planet'])){
            $planet_id          =   $_POST['planet_id'];
            $planet             =   $_POST['planet'];
            $price              =   $_POST['price'];
            $shortdescription   =   $_POST['shortdescription'];
            $longdescription    =   $_POST['longdescription'];
            $stm = $conn->prepare("UPDATE `journeys` SET `planet`=?, `price`=?, `shortdescription`=?, `longdescription`=? WHERE `journeys`.`planet_id`=?");
            $stm->execute([$planet, $price, $shortdescription, $longdescription, $planet_id]);
            header("Location: ./planets.php");
            exit();
        }
        if(isset($_POST['delete_planet'])){
            $stm = $conn->prepare("DELETE FROM journeys WHERE planet_id = :planet_id");
            $stm->bindParam(":planet_id", $_POST['planet_id'], PDO::PARAM_INT);
            $stm->execute();
            header("Location: ./planets.php");
            exit();
        }


    # REVIEWS
        if(isset($_POST['approvereview'])){
            $stm = $conn->prepare("UPDATE reviews SET curated=1 WHERE review_id = :review_id");
            $stm->bindParam(":review_id", $_POST['review_id'], PDO::PARAM_INT);
            $stm->execute();
            // header("Location: ../admin/reviews.php");
            // exit();
            var_dump($_POST);
            var_dump($_POST['review_id']);
        }
        if(isset($_POST['deletereview'])){
            $stm = $conn->prepare("DELETE FROM reviews WHERE review_id = :review_id");
            $stm->bindParam(":review_id", $_POST['review_id'], PDO::PARAM_INT);
            $stm->execute();
            // header("Location: ../admin/reviews.php");
            // exit();
            var_dump($_POST);
        }


    # USERS
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


    # BOOKINGS
        if(isset($_POST['insert_booking'])){
            $planet             =   $_POST['planet'];
            $shortdescription   =   $_POST['shortdescription'];
            $longdescription    =   $_POST['longdescription'];
            $price              =   $_POST['price'];
            $sql = "INSERT INTO `bookings`(`user_id`, `planet_id`, `price`, `travellers`, `start_date`, `end_date`) VALUES ('$user_id','$planet_id','$price','$travellers','$start_date','$end_date');";
            $conn->prepare($sql)->execute();
            header("Location: ./planets.php");
            exit();
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
        // header("Location: ../admin/admin.php");
        // exit();
        var_dump($_POST);
?>