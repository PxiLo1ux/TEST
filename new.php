<?php
$con = mysqli_connect("localhost", "root", "", "test");

$sql = mysqli_query($con, "select * from user");

?>

<table border="1">
    <tr><th>ID</th><th>Username</th></tr>
    <?php
    while($det = mysqli_fetch_array($sql))
    {
    ?>
    <tr><td><?php echo $det['id'];?></td><td><?php echo $det['username'];
    ?></td></tr>
    <?php
    }
    ?>
</table>
