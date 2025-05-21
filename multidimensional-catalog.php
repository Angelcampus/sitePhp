<?php include('my-functions.php')?>
<?php 
$products = [
   'siteweb' => [
    $priceWeb=3200,
        "name" => "Site-Web",
        "priceTtc" => formatPrice($priceWeb),
        "priceHt" => priceExcludingVAT($priceWeb),
        "weight" => 500,
        "discount" => $sitewebDiscount=5,
        "remiseDiscount" => discountedPrice($priceWeb,$sitewebDiscount),
        "picture"=> "images/sitewebb.png"
    ],
    'tgv' => [
        $priceTgv=45500000,
        "name" => "TGV",
        "priceTtc" =>  formatPrice($priceTgv),
        "priceHt" => priceExcludingVAT($priceTgv),
        "weight" => 10000,
        "discount" => $tgvDiscount=1,
        "remiseDiscount" => discountedPrice($priceTgv,$tgvDiscount),
        "picture"=> "images/tgv.png"
    ],
    'bob' => [
        $priceBob=7800,
        "name" => "BoB",
        "priceTtc" => formatPrice($priceBob),
        "priceHt" => priceExcludingVAT($priceBob),
        "weight" => 10,
        "discount" => $bobDiscount=69,
        "remiseDiscount" => discountedPrice($priceBob,$bobDiscount),
        "picture"=> "images/bob.png"
    ],
];
$sous_siteweb=$products['siteweb'];
$sous_tgv=$products['tgv'];
$sous_bob=$products['bob'];
?>
