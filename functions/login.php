<?php
    if(isset($_POST['login'])){
        session_start();
        $_SESSION['admin'] = true;
        header('location: ../admin/admin.php');
        exit();
    } else{
    header('location: ../index.php');
    exit();
}
?>