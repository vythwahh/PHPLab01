<?php
$quantity = (int) $rawQuantity;
$subtotal = $price * $quantity;

$isActiveMember = $userStatus === "ACTIVE";
$isDiscountEligible = $isActiveMember && $subtotal >= 1000000;
$discount = $isDiscountEligible ? $subtotal * MEMBER_DISCOUNT_RATE : 0;

$afterDiscount = $subtotal - $discount;
$isFreeShipping = $afterDiscount >= FREE_SHIPPING_MIN;
$shipping = $isFreeShipping ? 0 : SHIPPING_FEE;

$beforeTax = $afterDiscount + $shipping;
$tax = $beforeTax * TAX_RATE;
$total = $beforeTax + $tax;

$hasValidQuantity = $quantity > 0;
$canCheckout = $inStock && $hasValidQuantity && $isActiveMember;