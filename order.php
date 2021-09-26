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
            <div class="col-md-6 logo-th">
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
                </ul>
            </div>

            <div class="clear"></div>
        </div>
    </div>
    <!-- End: Header -->



    <!-- Start: Food search -->
    <div class="food-search">
        <div class="container">
            <h2 class="text-center text-white font-weight-th footer-mb-th">Fill this form to confirm your order.</h2>

            <form action="">
                <fieldset style="border-radius: 5px" class="border-th">
                    <legend class="legend-th">Selected Food</legend>
                    <div class="mg-th img-th">
                        <div class="row bd-radius-th flex-th">
                            <div class="col-md-4">
                                <img class="bd-radius-th img-width-th" src="img/menu-momo.jpg" alt="">

                            </div>
                            <div class="col-md-8">
                                <div class="text-left-th">
                                    <h4 class="font-weight-th">Food Title</h4>
                                    <p>$2.3</p>
                                    <b>Quantity</b>
                                    <input class="input-number-th" type="number" name="" id="">
                                </div>
                            </div>
                        </div>

                    </div>


                </fieldset>
            </form>

            <form action="">
                <fieldset style="border-radius: 5px" class="border-th">
                    <legend class="legend-th">Delivery Details</legend>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label font-weight-th">Full Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="E.g. Vijay Thapa" require>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label font-weight-th">Phone Number</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="E.g. 9843xxxxxx" require>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label font-weight-th">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="E.g. hi@vijaythapa.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label font-weight-th">Address</label>
                        <textarea  style="height: 130px" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="E.g. Street, City, Country" require></textarea>
                    </div>
                    <div>
                        <input class="btn text-white btn-th" type="submit" value="Confirm Order">
                    </div>

                </fieldset>




            </form>
        </div>
    </div>
    <!-- End: Food search -->



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