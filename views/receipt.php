<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>SmartCafe Billing</title>
</head>
<body>
    <h1>SmartCafe Order Receipt</h1>
    <p>Product: <?= $productName ?></p>
    <p>Unit Price: <?= number_format($unitPrice) ?> <?= CURRENCY ?></p>
    <p>Quantity: <?= $quantity ?></p>
    <p>Subtotal: <?= number_format($subtotal) ?> <?= CURRENCY ?></p>
    <p>Discount: <?= number_format($discount) ?> <?= CURRENCY ?></p>
    <p>Packaging Fee: <?= number_format($packagingFee) ?> <?= CURRENCY ?></p>
    <p>Service Fee: <?= number_format($serviceFee) ?> <?= CURRENCY ?></p>
    <p><strong>Total: <?= number_format($total) ?> <?= CURRENCY ?></strong></p>
    <p>Status: <?= $canOrder ? "READY TO ORDER" : "BLOCKED" ?></p>
</body>
</html>