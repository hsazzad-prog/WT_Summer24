<?php

include '../control/userlogincontrol.php';
?>
<html>
<body>

<?php 
    include '../route/router.php';
?>

<form action="" method="post">
email:
<input type="text" name="email" >
password:
<input type="password" name="password" >
<input type="submit" name="login" value="Login">
</form>
</body>
</html>