<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/bootstrap-icons.svg"> -->
    <link rel="stylesheet" href="style.css">
    <title>Restaurant WS</title>
</head>

<body>
    <!-- Bootstrap gồm 2 thành phần: Phân chia bố cục + thành phần nội dung: gọi là Component -->
    <!-- Để hiểu cách Bootstrap phân chia bố cục > Tìm hiểu về lưới -->


    <!-- Start: Header -->
    <div class="container-fluid header-th ps-fixed-th">
        <div class="row">
            <div class="col-md-7 logo-th">
                <img src="img/logo copy.png" alt="" class="img-fluid">
            </div>

            <div class="col-md">
                <ul class="nav flex-th flex-wrap-th margin-th">
                    <li class="nav-item mright-th">
                        <a class="text-th" href="home.php">Home</a>
                    </li>
                    <li class="nav-item mright-th">
                        <a class="text-th" href="categories.php">Categories</a>
                    </li>
                    <li class="nav-item mright-th">
                        <a class="text-th" href="food.php">Foods</a>
                    </li>
                    <li class="nav-item mright-th">
                        <a class="text-th" href="#contact-th">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- End: Header -->

    <!-- Start: Food search -->

    <div class="food-search text-center">
        <div class="container">
            <form action="">
                <input type="search" name="search" placeholder="Search for Food..">
                <input class="btn text-white btn-th" type="submit" value="Search">
            </form>
        </div>
    </div>
    <!-- End: Food search -->


    <!-- Start: Categories -->
    <div class="container pad-th">
        <h2 class="text-center font-weight-th footer-mb-th">Explore Foods</h2>
        <div class="container">
            <div class="row flex-th">
                <div class="col-4 text-center img-th width-th">
                    <img class="bd-radius-th img-fluid" src="img/pizza.jpg" alt="">
                    <p class="position-th font-weight-th">Pizza</p>
                </div>
                <div class="col-4 text-center img-th width-th">
                    <img class="bd-radius-th img-fluid" src="img/burger.jpg" alt="">
                    <p class="position-th font-weight-th">Burger</p>
                </div>
                <div class="col-4 text-center img-th width-th">
                    <img class="bd-radius-th img-fluid" src="img/momo.jpg" alt="">
                    <p class="position-th font-weight-th">Momo</p>
                </div>
            </div>
        </div>

    </div>
    <!-- End: Categories -->


    <!-- Start: Food menu -->
    <div class="container-fluid bg-th pad-th">
        <h2 class="text-center font-weight-th footer-mb-th">Food Menu</h2>

        <div class="container">
            <div class="row flex-th">
                <div class="col-5 mg-th img-th">
                    <div class="row bg-white-th bd-radius-th">
                        <div class="col-md-4">
                            <img class="bd-radius-th img-width-th" src="img/menu-momo.jpg" alt="">

                        </div>
                        <div class="col-md-8 col8-th">
                            <h5 class="font-weight-th">Dumplings Specials</h5>
                            <b style="font-size: 1.2rem">$5.00</b>
                            <p class="card-text"><small class="text-muted">Chicken Dumpling with herbs from
                                    Mountains</small></p>
                            <a href="order.php" class="btn btn-th text-white">Order Now</a>

                        </div>
                    </div>

                </div>
                <div class="col-5 mg-th img-th">
                    <div class="row bg-white-th bd-radius-th">
                        <div class="col-md-4">
                            <img class="bd-radius-th img-width-th" src="img/menu-burger.jpg" alt="">
                        </div>
                        <div class="col-md-8 col8-th">
                            <h5 class="font-weight-th">Best Burger</h4>
                                <b style="font-size: 1.2rem">$4.00</b>
                                <p class="card-text"><small class="text-muted">Burger with Ham, Pineapple and lots of
                                        Cheese.</small></p>
                                <a href="order.php" class="btn btn-th text-white">Order Now</a>

                        </div>
                    </div>
                </div>

            </div>

            <div class="row flex-th">
                <div class="col-5 mg-th img-th">
                    <div class="row bg-white-th bd-radius-th">
                        <div class="col-md-4">
                            <img class="bd-radius-th img-width-th" src="img/menu-pizza.jpg" alt="">

                        </div>
                        <div class="col-md-8 col8-th">
                            <h5 class="font-weight-th">Smoky BBQ Pizza</h5>
                            <b style="font-size: 1.2rem">$6.00</b>
                            <p class="card-text"><small class="text-muted">Best Firewood Pizza in Town.</small></p>
                            <a href="order.php" class="btn btn-th text-white">Order Now</a>

                        </div>
                    </div>
                </div>
                <div class="col-5 mg-th img-th">
                    <div class="row bg-white-th bd-radius-th">
                        <div class="col-md-4">
                            <img class="bd-radius-th img-width-th" src="img/menu-momo.jpg" alt="">
                        </div>
                        <div class="col-md-8 col8-th">
                            <h5 class="font-weight-th">Sadeko Momo</h5>
                            <b style="font-size: 1.2rem">$6.00</b>
                            <p class="card-text"><small class="text-muted">Best Spicy Momo for Winter</small></p>
                            <a href="order.php" class="btn btn-th text-white">Order Now</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="col-md-5 mg-th img-th">
                    <div class="row bd-radius-th bg-white-th">
                        <div class="col-md-4">
                            <img class="bd-radius-th img-width-th" src="img/menu-pizza.jpg" alt="">

                        </div>
                        <div class="col-md-8">
                            <h5 class="font-weight-th">Mixed Pizza</h5>
                            <b style="font-size: 1.2rem">$10.00</b>
                            <p class="card-text"><small class="text-muted">Pizza with chiken, Ham, Buff, Mushroom and
                                    Vegetables</small></p>

                            <a href="order.php" class="btn btn-th text-white">Order Now</a>

                        </div>
                    </div>
                </div> -->
        <a href="food.php" class="mg-th text-th row flex-th">See All Foods</a>
    </div>

    <!-- End: Food menu -->


    <!-- Start: Social -->
    <div class="container text-center mt-th" id="contact-th">
        <a class="contact-icon" href="#"><img src="https://img.icons8.com/color/48/000000/facebook-new.png" /></a>

        <a class="contact-icon" href="#"><img src="https://img.icons8.com/fluency/48/000000/instagram-new.png" /></a>

        <a class="contact-icon" href="#"><img src="https://img.icons8.com/color/48/000000/twitter--v1.png" /></a>

    </div>
    <!-- End: Social -->

    <!-- Start: Footer -->
    <div class="container text-center footer-mb-th">
        <p>All rights reserved. Designed By <a class="text-th" href="#">ThuHa</a></p>
    </div>
    <!-- Start: Footer -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>


</body>

</html>