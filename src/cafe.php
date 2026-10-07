<?php
// 1. Explicit casting: Chuyển raw string sang integer
$quantity = (int) $rawQuantity;

// 2. Tính Subtotal
$subtotal = $unitPrice * $quantity;

// 3. Tính Member Discount (Chỉ giảm khi là MEMBER và Subtotal >= 100.000 VND)
$isMember = $customerStatus === "MEMBER";
$isDiscountEligible = $isMember && $subtotal >= MEMBER_MIN;
$discount = $isDiscountEligible ? $subtotal * MEMBER_DISCOUNT_RATE : 0;

// 4. Tính Phí bao bì (Packaging fee = Số lượng * Phí từng ly)
$packagingFee = $quantity * PACKAGING_FEE_PER_ITEM;

// 5. Tính Phí dịch vụ (Service fee = 5% * Số tiền sau khi giảm giá)
$afterDiscount = $subtotal - $discount;
$serviceFee = $afterDiscount * SERVICE_RATE;

// 6. Tính Tổng thanh toán (Total)
$total = $subtotal - $discount + $packagingFee + $serviceFee;

// 7. Cổng kiểm tra đơn hàng (Checkout Gate)
$hasValidQuantity = $quantity > 0;
$canOrder = $productAvailable && $hasValidQuantity && ($customerStatus === "MEMBER" || $customerStatus === "GUEST");