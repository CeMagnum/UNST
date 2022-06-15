<?php include('./navbar_admin.php');?>
<main>
    <h1>Bookings</h1>
    <table>
        <tr>
            <th>Planet</th>
            <th>Price</th>
            <th>Username</th>
            <th>Passengers</th>
            <th>Start date</th>
            <th>End date</th>
        </tr><?php
        $blem = $conn->prepare("SELECT bookings.*,users.username,journeys.planet FROM `bookings` INNER JOIN users ON bookings.user_id=users.user_id INNER JOIN journeys ON bookings.planet_id=journeys.planet_id;");
        $blem->execute();
        $result = $blem->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $i){ echo '
        <tr><form action="delete.php" method="POST">
            <td><input type="text" name="planet" value='.$i['planet'].'></td>
            <td><input type="text" name="total" value='.$i['price'].'></td>
            <td><input type="text" name="username" value='.$i['username'].'></td>
            <td><input type="text" name="travellers" value='.$i['travellers'].'></td>
            <td><input type="date" name="date_start" value='.$i['start'].'></td>
            <td><input type="date" name="date_end" value='.$i['end'].'></td>
            <td class="btns">
            <input class="inv" type="text" value='.$i['booking_id'].'name="booking_id"/>
            <input class="good" type="submit" name="save_edit" value="submit">
            </form>
            <form action="delete.php" method="POST">
                <input class="inv" type="text" value='.$i['booking_id'].'name="booking_id"/>
                <input class="bad" type="submit" name="delete" value="delete">
            </form></td>
        </tr>';}?>
    </table>
</main>
<?php include('./footer_admin.php');?>