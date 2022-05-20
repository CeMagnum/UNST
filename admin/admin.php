<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <title>Admin</title>
</head>
    <?php 
    // include('admin_session.php'); 
        include('../includes/connect.php');
    ?>

    
<body>
    <div class="adminpanel" id="a"><h2>Logged in as admin.</h2><a href="../includes/logout.php"><h4>Logout</h4></a></div>
    <div class="adminpanel" id="b">
    <div class="home_recentie_div">
        <div class="recenties_div_1">
            <div class="recenties_div_2">
    <?php
    if (isset($_GET['search'])){
    $search = '%'.$_GET['search'].'%';
    $sql = "SELECT * FROM journeys WHERE planet LIKE :search ORDER BY planet ASC";
    $stm = $conn->prepare($sql);
    $stm->bindParam(":search", $search);
  } else {
    $sql = "SELECT * FROM journeys ORDER BY planet ASC";
    $stm = $conn->prepare($sql);
  }
    $stm->execute();
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($result as $i)
    {echo "<div class='c'><h1>".$i['planet']."\n</h1>
        <img src='../assets/img/planets/".$i['planet'].".png'>
        <p>".$i['shortdescription']."</p>
        <div><a><button>edit</button></a><a><button>delete</button></a></div>
        </div><br><hr><br>";}?>
    
    </div>
</body>
</html>