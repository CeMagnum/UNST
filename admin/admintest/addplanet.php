<?php include('./navbar_admin.php');?>
<main>
    <h1>Add a planet</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>img?</th>
            <th>Short text</th>
            <th>Long text</th>
        </tr>
        <tr>
            <input type="text" name="name">
            <input type="text" name="price">
            <input type="text" name="img">
            <textarea name="shortdescription"></textarea>
            <textarea name="longdescription"></textarea>
            <input type="submit" value="send" name="bttn">
        </tr>
    </table>
</main>
<?php include('./footer_admin.php');?>