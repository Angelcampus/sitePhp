<?php include('header.php'); ?>
<?php include('multidimensional-catalog.php');?>

<div class="container text-center mt-5 mb-5">
        <h1><strong>Catalogue</strong></h1>
    </div>
    <hr>
    <div class="container text-left mt-5 mb-5 ">
        <h1><strong>Services</strong></h1>
    </div>

    <div class="container">
    <div class="row">

    <?php foreach ($products as $objet => $product): ?>
        <div class="col-md-6 col-lg-3">
            <h2><?php echo $product['name']; ?></h2>
            <p>Prix : <?php echo $product['price']; ?></p>
            <p>Poids : <?php echo $product['weight']; ?> mg</p>
            <p>Remise : <?php echo $product['discount']; ?> %</p>
            <a href="<?php echo $objet ?>.php">
                <img src="<?php echo $product['picture']; ?>" class="img-fluid rounded mb-5" alt="<?php echo $product['name']; ?>">
            </a>
        </div>
    <?php endforeach; ?>
    </div>
</div>

<?php include('footer.php'); ?>