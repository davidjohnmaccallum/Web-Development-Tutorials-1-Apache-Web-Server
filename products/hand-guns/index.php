<?php require_once('../../data.php'); ?>

<html>
    <head>
        <title>Hello World Air Guns</title>
        <link rel="stylesheet" href="../../stylesheets/main.css"/>
        <link rel="stylesheet" href="../../stylesheets/products.css"/>
    </head>
    <body>
        <h1>Hello World Air Guns</h1>
        <ul class="top-nav">
            <li><a href="../../products/">Products</a></li>
            <li><a href="../../about-us/">About Us</a></li>            
            <li><a href="../../contact-us/">Contact Us</a></li>
        </ul>
        <div class="bread-crumbs">
            <a href="../..">Home</a> / <a href="..">Products</a> / <a href=".">Hand Guns</a>
        </div>
        <div class="product-container">

            <?php foreach ($products['handGuns'] as $product) { ?>

                <div class="product-list-item">

                    <h2><a href="./detail.php?<?php echo $product['id']; ?>"><?php echo $product['title']; ?></a></h2>
                    
                    <img src="/apache-web-server/<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>"/>
                    
                    <p><?php echo $product['description']; ?></p>

                </div>

            <?php } ?>

        </div>
    </body>
</html>