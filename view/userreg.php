<?php
include '../control/userregcontrol.php';
?>
<html>
<body>

<?php 
    include '../route/router.php';
?>

<form action="" method="post">
    name:
<input type="text" name="name" >

email:
<input type="text" name="email" >
password:
<input type="password" name="password" >
<input type="submit" name="register" value="Register">
</form>
</body>
</html>