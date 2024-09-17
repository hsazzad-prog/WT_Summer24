<?php
require '../control/process.php'; 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order Form</title>
  <link rel="stylesheet" href="../css/mystyle.css">
</head>
<body>
<?php include "../layout/header.php"; ?>
<p id="title">My Page </p>
    <form action="" method="POST" enctype="multipart/form-data" onsubmit="return formValidation()">
        <fieldset>
            <legend>Order Information</legend>
            <table>
                <tr>
                    <td><label for="product">Product:</label></td>
                    <td>
                        <select id="product" name="product">
                            <option value="product1">Product 1</option>
                            <option value="product2">Product 2</option>
                            <option value="product3">Product 3</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="quantity">Quantity:</label></td>
                    <td><input type="number" id="quantity" name="quantity" >
                <?php echo $quantitymsg; ?><p id="quantityError"></p>
                </td>
                </tr>
                <tr>
                    <td><label for="fullname">Full Name:</label></td>
                    <td><input type="text" id="fullname" name="fullname" ></td>
                </tr>
                <tr>
                    <td><label for="email">Email Address:</label></td>
                    <td><input type="email" id="email" name="email" ></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" id="password" name="password" ></td>
                </tr>
                <tr>
                    <td><label for="phone">Phone Number:</label></td>
                    <td><input type="tel" id="phone" name="phone"></td>
                </tr>
                <tr>
                    <td><label for="address">Address:</label></td>
                    <td><textarea id="address" name="address" rows="4" cols="50"></textarea></td>
                </tr>
                <tr>
                    <td><label for="billingAddress">Billing Address:</label></td>
                    <td><textarea id="billingAddress" name="billingAddress" rows="4" cols="50"></textarea></td>
                </tr>
                <tr>
                    <td><label>Shipping Option:</label></td>
                    <td>
                        <input type="radio" id="standardShipping" name="shipping" value="standard" >
                        <label for="standardShipping">Standard Shipping</label>
                        <input type="radio" id="expressShipping" name="shipping" value="express">
                        <label for="expressShipping">Express Shipping (additional charges may apply)</label>
                    </td>
                </tr>
                <tr>
                    <td><label for="deliveryTime">Preferred Delivery Time:</label></td>
                    <td>
                        <select id="deliveryTime" name="deliveryTime">
                            <option value="morning">Morning</option>
                            <option value="afternoon">Afternoon</option>
                            <option value="evening">Evening</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="instructions">Special Instructions:</label></td>
                    <td><textarea id="instructions" name="instructions" rows="4" cols="50"></textarea></td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="expressShippingOption" name="expressShippingOption" value="expressShippingOption">
                    <label for="expressShippingOption">Request Express Shipping (additional charges may apply)</label></td>
                
                    <td><input type="checkbox" id="giftWrapping" name="giftWrapping" value="giftWrapping"><label for="giftWrapping">Gift Wrapping (additional charges may apply)</label></td>
                </tr>
                <tr>
                <td><label for="terms">I agree to the terms and conditions</label></td>
                    <td><input type="checkbox" id="terms" name="terms"></td>
                   
                </tr>
                <tr>
                    <td>Upload file</td>
                    <td><input type="file" name="myfile"></td>
</tr>
                <tr>
                    <td >
                        <input type="submit" class="button submit" name ="Submit" value="Submit">
                        <input type="reset" class="button reset" value="Reset">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
<script src="../js/myscript.js">
</script>
</body>
</html>
<?php
echo "<h5>hello PHP</h5>";
?>

