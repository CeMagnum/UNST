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
    <div class="adminpanel" id="a"><h2>Logged in as admin.</h2><a href="../functions/logout.php"><h4>Logout</h4></a></div>
    <div class="adminpanel" id="b">
    <div class="hrd" id="a">
        <div class="rd1">
            <div class="rd2">
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
        <div><a><button>edit</button></a>
        <form action='../functions/delete.php' method='POST'>
            <input class='invisible' type='text' value=\"".$i['planet']."\" name='product_name'/>
            <button type='submit' name='deleteitem' value='delete item'>Delete</button>
        </form></div></div><br><hr><br>";}?>
    </div>
    </div>
    </div>
    <div id="b">
        <div id="d">Insert⭐
        <form method="post" action="../functions/insert.php">
            <input type="text" name="planet" placeholder="Planet name">
            <!-- <input type="text" name="img" placeholder="Image"> -->
            <input type="text" name="shortdescription" placeholder="Short description">
            <input type="text" name="longdescription" placeholder="Long description">
            <input type="text" name="price" placeholder="Price">
            <input type="submit" value="send" name="bttn">
        </form>
        </div>
        <!-- <div id="d">?</div>
        <div id="d">?</div> -->
    </div>
    </div>
    </div>
</body>
</html>