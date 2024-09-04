<?php
session_start();
setcookie("status", "true", time()+((84600*7)));

if(isset($_COOKIE["status"]))
{
    echo "you have visited me before";
}
else{
    echo "Welcome !!";
}
echo $_SESSION["email"];

?>

<html>
<head>
    <title> Home </title>
    <link rel="icon" type="image/x-icon" href="../images/images.png">
</head>
<body>
<h1>Home</h1>
<a href="https://www.google.com">
<img src="../images/images.png" width="200" height="200" />
</a>
</body>

</html> 