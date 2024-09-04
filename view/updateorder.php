<?php
include '../control/updateordercontrol.php';
?>
<html>
<body>

Update Order
<form action="" method="post">
order id: <input type="text" name="id" value="<?php echo $orderid; ?>" readonly>
customer email: <input type="text" name="email" value="<?php echo $email; ?>" readonly>
product: <input type="text" name="product" value="<?php echo $product; ?>">
Quantity: <input type="text" name="quantity" value="<?php echo $quantity; ?>">
<input type="submit" name="update" value="Update">

</form>

</body>
</html>