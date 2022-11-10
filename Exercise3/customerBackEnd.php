<?php 

$username = $_POST["username"];
$password = $_POST["password"];
$shipping = $_POST["shipping"];
$figure1 = $_POST["figure1"];
$figure2 = $_POST["figure2"];
$figure3 = $_POST["figure3"];

$figure1Cost = $figure1 * 30;
$figure2Cost = $figure2 * 30;
$figure3Cost = $figure3 * 30;

$quantity = $figure1 + $figure2 + $figure3;
$cost = $figure1Cost + $figure2Cost + $figure3Cost;

$shippingCost = intval($shipping);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Purchase Complete</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
        <h1 class="header">Purchase Complete</h1>
        <h2>Welcome <?php echo $username; ?> with password <?php echo $password; ?>!</h2>

        <h2>Your Receipt:</h2>
        <div class="item">
            <table>
                <tr>
                    <td>Item</td>
                    <td>Quantity</td>
                    <td>Cost Per Unit</td>
                    <td>Cost</td>
                </tr>
                <tr>
                    <td>Satoru Gojo Figure</td>
                    <td><?php echo $figure1; ?></td>
                    <td>$30.00</td>
                    <td>$<?php echo round($figure1Cost, 2); ?></td>
                </tr>
                <tr>
                    <td>Suguru Geto Figure</td>
                    <td><?php echo $figure2; ?></td>
                    <td>$30.00</td>
                    <td>$<?php echo round($figure2Cost, 2); ?></td>
                </tr>
                <tr>
                    <td>Sukuna Figure</td>
                    <td><?php echo $figure3; ?></td>
                    <td>$30.00</td>
                    <td>$<?php echo round($figure3Cost, 2); ?></td>
                </tr>
                <tr>
                    <td>Subtotal</td>
                    <td><?php echo $quantity; ?></td>
                    <td colspan="2">$<?php echo round($cost, 2); ?></td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td colspan="3">$<?php echo round($shippingCost, 2); ?></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td colspan="3">$<?php echo round($shippingCost + $cost, 2); ?></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>