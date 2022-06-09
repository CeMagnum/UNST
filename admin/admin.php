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
    <div class="adminpanel_full">
        <div class="adminpanel" id="a"><h2>Logged in as admin.</h2><a href="../functions/logout.php"><h4>Logout</h4></a>
    <div class="rev">
        <div class="admin_rev">
        <h1>Manage reviews</h1>
            <!-- php copy past this -->
        <div class="admin_rev_panel">
            <form action="POST">
                <h1>..naam..</h1>
                <p>..txt..</p>
                <p>..ster..</p>
                <input type="submit" name="accept" value="accept">
                <input type="submit" name="decline" value="decline">
            </form>
        </div>
        <!-- php stop hier -->
        <div class="admin_rev_panel">
            <form action="POST">
                <h1>..naam..</h1>
                <p>..txt..</p>
                <p>..ster..</p>
                <input type="submit" name="accept" value="accept">
                <input type="submit" name="decline" value="decline">
            </form>
        </div>
        <div class="admin_rev_panel">
            <form action="POST">
                <h1>..naam..</h1>
                <p>..txt..</p>
                <p>..ster..</p>
                <input type="submit" name="accept" value="accept">
                <input type="submit" name="decline" value="decline">
            </form>
        </div>
        <div class="admin_rev_panel">
            <form action="POST">
                <h1>..naam..</h1>
                <p>..txt..</p>
                <p>..ster..</p>
                <input type="submit" name="accept" value="accept">
                <input type="submit" name="decline" value="decline">
            </form>
        </div>
    </div>
    </div>
    </div>
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
            <div class="admin_insert">
                <form method="post" action="insert_planet.php">
            <input type="text" name="price" placeholder="Price">
            <input type="text" name="planet" placeholder="Planet name">
            <input type="text" name="img" placeholder="Image">
            <textarea name="shortdescription" placeholder="Short description"></textarea>
            <textarea name="longdescription" placeholder="Long description"></textarea>
            <!-- <input type="text" name="shortdescription" placeholder="Short description"> -->
            <!-- <input type="text" name="longdescription" placeholder="Long description"> -->
            <input type="submit" value="send" name="bttn">
        </form>
            </div>
        
        <?php //EDIT
            $sql = "SELECT * FROM journeys WHERE planet_id = :planet_id";
            $stm = $conn->prepare($sql);
            $stm->bindParam(":planet_id", $_GET['planet_id'], PDO::PARAM_INT);
            $stm->execute();
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            // var_dump($result);
            foreach($result as $i)
            {echo "<img src=\"../assets/img/planets/".$i['planet'].".png\" alt='".$i['shortdescription']."'</div>";}?>

            <div class="edit_panel">
                <form method="POST" action="edit.php">
                <input type="text" name="planet" placeechholder="Planet and image name" value="<?php echo $i['planet']?>">
                <input type="text" name="price" placeholder="Price" value="<?php echo $i['price']?>">
                <textarea name="short_desc" id="short_desc" cols="30" rows="10"><?php echo $i['shortdescription']?></textarea>
                <textarea name="long_desc" id="long_desc" cols="30" rows="10"><?php echo $i['longdescription']?></textarea>
                <input type="text" name="description"  placeholder="Long descrtiption" value="<?php echo $i['longdescription']?>">
                <input class="invisible" type="text" value="<?php echo $_GET['planet_id']?>" name="planet_id" />
                <button type="submit" name="editItem" value="Edit item">Push edit</button>
            </form>
            </div>            
        </div>
    </div>
    </div>
</div>
    <div class="adminpanel_full">
        <div class="adminpanel" id="a"></a>
            <div class="acc">
                <div class="admin_acc">
                <h1>Manage accounts</h1>
                <!-- php copy -->
                <div class="admin_acc_panel">
                    <form action="POST">
                        <input type="text" value="..naam..">
                        <input type="text" value="..email..">
                        <input type="text" value="..wachtwoord..">
                        <input type="text" value="..admin..">
                        <input type="submit" name="save" value="save">
                        <input type="submit" name="delete" value="delete">
                    </form>
                </div>
                <!-- php stop copy -->
                <div class="admin_acc_panel">
                    <form action="POST">
                        <input type="text" value="..naam..">
                        <input type="text" value="..email..">
                        <input type="text" value="..wachtwoord..">
                        <input type="text" value="..admin..">
                        <input type="submit" name="save" value="save">
                        <input type="submit" name="delete" value="delete">
                    </form>
                </div>
                <div class="admin_acc_panel">
                    <form action="POST">
                        <input type="text" value="..naam..">
                        <input type="text" value="..email..">
                        <input type="text" value="..wachtwoord..">
                        <input type="text" value="..admin..">
                        <input type="submit" name="save" value="save">
                        <input type="submit" name="delete" value="delete">
                    </form>
                </div>
                <div class="admin_acc_panel">
                    <form action="POST">
                        <input type="text" value="..naam..">
                        <input type="text" value="..email..">
                        <input type="text" value="..wachtwoord..">
                        <input type="text" value="..admin..">
                        <input type="submit" name="save" value="save">
                        <input type="submit" name="delete" value="delete">
                    </form>
                </div>
            </div>
            </div>
            </div>
            <div class="adminpanel" id="b">
            <div class="hrd" id="a">
                <div class="rd1">
                    <div class="rd2">
            	        <h1>Manage journeys</h1>
                        <!-- php copy -->
                        <div class="admin_panel_journey">
                            <form action="POST">
                                <input type="text" name="acc_id" id="acc_id" value="..ID..">
                                <input type="text" name="planet" id="planet" value="..planet..">
                                <input type="text" name="total" id="total" value="..total..">
                                <input type="date" name="date_start" id="date_start" value="..start..">
                                <input type="date" name="date_end" id="date_end" value="..end..">
                                <input type="submit" name="save_edit" id="submit" value="save edit">
                                <input type="submit" name="delete" id="delete" value="delete">
                            </form>
                        </div>
                        <!-- php stop here -->
                        <div class="admin_panel_journey">
                            <form action="POST">
                                <input type="text" name="acc_id" id="acc_id" value="..ID..">
                                <input type="text" name="planet" id="planet" value="..planet..">
                                <input type="text" name="total" id="total" value="..total..">
                                <input type="date" name="date_start" id="date_start" value="..start..">
                                <input type="date" name="date_end" id="date_end" value="..end..">
                                <input type="submit" name="save_edit" id="submit" value="save edit">
                                <input type="submit" name="delete" id="delete" value="delete">
                            </form>
                        </div>
                        <div class="admin_panel_journey">
                            <form action="POST">
                                <input type="text" name="acc_id" id="acc_id" value="..ID..">
                                <input type="text" name="planet" id="planet" value="..planet..">
                                <input type="text" name="total" id="total" value="..total..">
                                <input type="date" name="date_start" id="date_start" value="..start..">
                                <input type="date" name="date_end" id="date_end" value="..end..">
                                <input type="submit" name="save_edit" id="submit" value="save edit">
                                <input type="submit" name="delete" id="delete" value="delete">
                            </form>
                        </div>
                        <div class="admin_panel_journey">
                            <form action="POST">
                                <input type="text" name="acc_id" id="acc_id" value="..ID..">
                                <input type="text" name="planet" id="planet" value="..planet..">
                                <input type="text" name="total" id="total" value="..total..">
                                <input type="date" name="date_start" id="date_start" value="..start..">
                                <input type="date" name="date_end" id="date_end" value="..end..">
                                <input type="submit" name="save_edit" id="submit" value="save edit">
                                <input type="submit" name="delete" id="delete" value="delete">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="b">
                <div id="d">
                </div>
            </div>

            </div>
            
    </div>
    
</body>
</html>