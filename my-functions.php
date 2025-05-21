<?php 
function formatPrice(float $price){
    $resultatPrice = $price / 100;
    return number_format($resultatPrice, 2, ',', ' ') . ' €';
}

function priceExcludingVAT(float $priceTtc) {
    $priceHt = ($priceTtc / 100) * 0.8;
    return number_format($priceHt, 2, ',', ' ') . ' €';
}
function discountedPrice(float $priceTtc,float $discount){
    $discountPrice = ($priceTtc / 100) * ($discount / 100);
    $finalDiscount = ($priceTtc / 100) - $discountPrice ;
    return number_format($finalDiscount, 2, ',', ' ') . ' €';
}
?>
