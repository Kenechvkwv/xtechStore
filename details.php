<?php
include 'functions.php'
;
?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <title>Product Detail</title>
</head>

<body>



    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row">
            <h2 class="text-center">Product Details</h2>

            <div class="col-md-5">
                <h4>
                    <b>
                        <?php title(); ?>
                    </b>
                </h4>
                <img src="<?php image(); ?>" alt="<?php title(); ?>" class="img-fluid">
                <p class="1price">N
                    <?php price(); ?>
                </p>
                <p class="1description">
                    <?php description(); ?>
                </p>
                <p class="1brandname">
                    <?php brandname(); ?>
                </p>
            </div>
        </div>
    </div>

    <!-- Ajax-Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- bootstrap 5 js   -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

</body>