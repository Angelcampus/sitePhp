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
            <div class="col-md-6 col-lg-3">
                <h2>Espionnage</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, corrupti laudantium optio repellat,
                    neque sint nemo dolorum alias minus corporis maxime qui ullam numquam. Omnis asperiores consectetur
                    dignissimos culpa nam.</p>
                <img src="images/espio.jpg" class="img-fluid rounded mb-5 w-100 h-50" alt="Espionnage">
            </div>

            <div class="col-md-6 col-lg-3">
                <h2><?php echo $sous_siteweb['name']; ?></h2>
                <p>prix = <?php echo $sous_siteweb['price']; ?>€</p>
                <p>poids = <?php echo $sous_siteweb['weight']; ?>g</p>
                <a href="siteweb.php"><img src="<?php echo $sous_siteweb['picture']; ?>" class="img-fluid rounded mb-5 w-100 h-50"
                        alt="sitewebb"></a>
            </div>

            <div class="col-md-6 col-lg-3">
                <h2>Application Mobile</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, corrupti laudantium optio repellat,
                    neque sint nemo dolorum alias minus corporis maxime qui ullam numquam. Omnis asperiores consectetur
                    dignissimos culpa nam.</p>
                <img src="images/applimob.jpg" class="img-fluid rounded mb-5 w-75 h-50" alt="applimob">
            </div>

            <div class="col-md-6 col-lg-3">
                <h2>Application Web</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, corrupti laudantium optio repellat,
                    neque sint nemo dolorum alias minus corporis maxime qui ullam numquam. Omnis asperiores consectetur
                    dignissimos culpa nam.</p>
                <img src="images/Appliweb.jpg" class="img-fluid rounded mb-5 w-100 h-50" alt="Appliweb">
            </div>

        </div>
    </div>


    <div class="container text-left mt-5 mb-5 ">
        <h1><strong>Goodies</strong></h1>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <h2>Jumelle</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, corrupti laudantium optio repellat,
                    neque sint nemo dolorum alias minus corporis maxime qui ullam numquam. Omnis asperiores consectetur
                    dignissimos culpa nam.</p>
                <img src="images/jumelles.png" class="img-fluid rounded mb-5" alt="jumelles">
            </div>

            <div class="col-md-6 col-lg-3">
            <h2><?php echo $sous_bob['name']; ?></h2>
                <p>prix = <?php echo $sous_bob['price']; ?>€</p>
                <p>poids = <?php echo $sous_bob['weight']; ?>ko</p>
                <a href="bob.php"><img src="<?php echo $sous_bob['picture']; ?>" class="img-fluid rounded mb-5" alt="Bob"></a>
            </div>

            <div class="col-md-6 col-lg-3">
                <h2>Gourde</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, corrupti laudantium optio repellat,
                    neque sint nemo dolorum alias minus corporis maxime qui ullam numquam. Omnis asperiores consectetur
                    dignissimos culpa nam.</p>
                <img src="images/gourde.png" class="img-fluid rounded mb-5" alt="Gourde">
            </div>

            <div class="col-md-6 col-lg-3">
            <h2><?php echo $sous_tgv['name']; ?></h2>
                <p>prix = <?php echo $sous_tgv['price']; ?>€</p>
                <p>poids = <?php echo $sous_tgv['weight']; ?>mg</p>
                <a href="tgv.php"><img src="<?php echo $sous_tgv['picture']; ?>" class="img-fluid rounded mb-5" alt="TGV"></a>
            </div>

        </div>
    </div>
<?php include('footer.php'); ?>