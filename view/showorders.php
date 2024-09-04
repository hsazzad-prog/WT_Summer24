<?php
include '../control/viewordercontrol.php';
?>

<html>

<body>
    <?php 
        include '../route/profileRouter.php';
    ?>
    <form action="" method="post">
        <input type="text" name="orderid">
        <input type="submit" name="search" value="Search">
    </form>
</body>
</html>