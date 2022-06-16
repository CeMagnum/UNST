<?php include('./navbar_admin.php');?>
<main>
    <h1>Add a planet</h1>

    <div class="row">
        <div class="column">
            <input type="text" name="name">
            <input type="text" name="price">
            <input type="text" name="img">
        </div>
        <div class="column">
            <textarea name="shortdescription"></textarea>
            <textarea name="longdescription"></textarea>
            <input class="good" type="submit" value="send" name="bttn">
        </div>
    </div>
    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>img?</th>
            <th>Short text</th>
            <th>Long text</th>
        </tr>
        <h1>Edit planets</h1>
        <?php
        $blem = $conn->prepare("SELECT * FROM journeys");
        $blem->execute();
        $result = $blem->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $i){ echo '
        <tr><form method="POST" action="delete.php">
            <td><input type="text" name="planet" value="'.$i['planet'].'"/></td>
            <td><input type="text" name="price" value="'.$i['price'].'"/></td>
            <td><img src="../../assets/img/planets/'.$i['planet'].'.png" alt="'.$i['planet'].'"> </td>
            <td><textarea type="text" name="shortdescription">'.$i['shortdescription'].'</textarea></td>
            <td><textarea type="text" name="longdescription"/>'.$i['longdescription'].'</textarea></td>
            <td class="btns">
                <input class="inv" type="text" name="planet_id" value="'.$i['planet_id'].'">
                <input class="good" type="submit" name="editItem" value="Edit item"></form>
            <form method="POST" action="delete.php">
                <input class="inv" type="text" name="planet_id" value='.$i['planet_id'].'/>
                <input class="bad" type="submit" name="delete" value="delete">
            </form>
            </td>
        </tr>
        ';}?>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</main>
<?php include('./footer_admin.php');?>