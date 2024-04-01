<?php
$datas =
    [
        [
            "product" => "Rengginang",
            "img" => "assets/img/product/rengginang.jpeg",
            "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, nostrum?",
            "price" => "25.000"
        ],
        [
            "product" => "Tapai Singkong",
            "img" => "assets/img/product/tapai.png",
            "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, nostrum?",
            "price" => "30.000"
        ],
        [
            "product" => "Biji Ketapang",
            "img" => "assets/img/product/biji-ketapang.jpeg",
            "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, nostrum?",
            "price" => "50.000"
        ],
        [
            "product" => "Bika Ambon",
            "img" => "assets/img/product/bika-ambon.jpeg",
            "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, nostrum?",
            "price" => "60.000"
        ],
    ]


?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product</title>
    <link rel="stylesheet" href="bootstrap-v5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark fw-bold py-3 ">
        <div class="container">
            <a class="navbar-brand text-light fst-italic " href="#">.nurF Product</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Contact</a>
                    </li>
                </div>
            </div>

        </div>
    </nav>
    <!-- End of Navbar -->

    <!-- Hero Section -->
    <main class="container">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="assets/img/product.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"
                    width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Product - Product asli buatan pabrik lokal
                </h1>
                <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s
                    most
                    popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system,
                    extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="#list-product">
                        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 w-100">Product</button>
                    </a>

                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                </div>
            </div>
        </div>
    </main>
    <!-- End of Hero -->

    <!-- List Product -->
    <main class="container">
        <h3 class="fw-bold text-center my-5" id="list-product">Product</h3>
        <div class="row row-cols-1 row-cols-md-4 g-4 py-5 konten">
            <?php foreach ($datas as $data) : ?>
            <div class="col">
                <div class="card">
                    <img src="<?= $data["img"] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold"><?= $data["product"] ?></h5>
                        <p class="card-text"><?= $data["desc"] ?></p>
                    </div>
                    <div class="d-flex justify-content-around mb-3">
                        <h3><?= $data["price"] ?></h3>
                        <button class="btn btn-primary">Beli</button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </main>
    <!-- End of List Product -->



    <script src="bootstrap-v5/js/bootstrap.bundle.min.js"></script>
</body>

</html>