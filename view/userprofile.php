<?php
session_start();

?>


<html>

<body>
    <h1>User Profile</h1>
    hii, <?php echo $_SESSION["email"];?>

    <a href="../control/logout.php">Logout</a>
</body>
</html>