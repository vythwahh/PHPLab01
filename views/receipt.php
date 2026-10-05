<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>QuickCheckout</title>
</head>
<body>
    <h1>QuickCheckout Receipt</h1>
    <p>Product: <?= $productName ?></p>
    <p>Quantity: <?= $quantity ?></p>
    <p>Subtotal: <?= $subtotal ?> <?= CURRENCY ?></p>
    <p>Discount: <?= $discount ?> <?= CURRENCY ?></p>
    <p>Shipping: <?= $shipping ?> <?= CURRENCY ?></p>
    <p>Tax: <?= $tax ?> <?= CURRENCY ?></p>
    <p><strong>Total: <?= $total ?> <?= CURRENCY ?></strong></p>
    <p>Status: <?= $canCheckout ? "READY TO CHECKOUT" : "BLOCKED" ?></p>
</body>
</html>