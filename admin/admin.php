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
        include('admin_session.php'); 
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
        <div><a href=\"admin.php?planet_id=".$i['planet_id']."\"><button>edit</button></a>
        <form action='delete.php' method='POST'>
            <input class='invisible' type='text' value=\"".$i['planet_id']."\" name='planet_id'/>
            <button type='submit' name='deleteitem' value='delete item'>Delete</button>
        </form></div></div><br><hr><br>";}?>
    </div>
    </div>
    </div>
    <div id="b">
        <div id="d">Insert⭐
        <form method="post" action="insert_planet.php">
            <input type="text" name="price" placeholder="Price">
            <input type="text" name="planet" placeholder="Planet name">
            <!-- <input type="text" name="img" placeholder="Image"> -->
            <input type="text" name="shortdescription" placeholder="Short description">
            <input type="text" name="longdescription" placeholder="Long description">
            <input type="submit" value="send" name="bttn">
        </form><br><br>
        <?php //EDIT
            $sql = "SELECT * FROM journeys WHERE planet_id = :planet_id";
            $stm = $conn->prepare($sql);
            $stm->bindParam(":planet_id", $_GET['planet_id'], PDO::PARAM_INT);
            $stm->execute();
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            // var_dump($result);
            foreach($result as $i)
            {echo "<div><h2>".$i['price']."<h2><br>".$i['planet']."<br><img src=\"../assets/img/planets/".$i['planet'].".png\" alt='".$i['shortdescription']."' /><br>".$i['longdescription']."</div>";}?>

            <form method="POST" action="edit.php">
                <input type="text" name="price" placeholder="Price" value="<?php echo $i['price']?>">
                <input type="text" name="planet" placeechholder="Planet and image name" value="<?php echo $i['planet']?>">
                <input type="text" name="description"  placeholder="Short description" value="<?php echo $i['shortdescription']?>">
                <input type="text" name="description"  placeholder="Long descrtiption" value="<?php echo $i['longdescription']?>">
                <input class="invisible" type="text" value="<?php echo $_GET['planet_id']?>" name="planet_id" />
                <button type="submit" name="editItem" value="Edit item">Push edit</button>
            </form>
        </div>
        <!-- <div id="d">?</div>
        <div id="d">?</div> -->
    </div>
    </div>
    </div>
</body>
</html>