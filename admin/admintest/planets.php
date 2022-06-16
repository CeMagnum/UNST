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
            <input type="submit" value="send" name="bttn">
        </div>
    </div>
    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>img?</th>
            <th>Short text</th>
            <th>Long text</th>
        </tr><?php
        $blem = $conn->prepare("SELECT * FROM journeys");
        $blem->execute();
        $result = $blem->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $i){ echo '
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
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