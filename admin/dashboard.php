<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Restaurant</title>
</head>

<body>
    <!-- Start: Header -->
    <div class="container-fluid text-center ps-fixed-th">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand text-th" href="#"></a>
                <button class="navbar-toggler text-th" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div style="padding: 1%" class="collapse navbar-collapse  flex-th" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-th font-weight-th" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-th font-weight-th" aria-current="page" href="mn_users.php">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-th font-weight-th" href="mn_category.php">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-th font-weight-th" href="mn_food.php">Food</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled text-th font-weight-th" href="mn_order.php">Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled text-th font-weight-th" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- End: Header -->


    <!-- Start: Content -->
    <div style="padding: 3%; box-shadow: 0 0 4px rgb(0 0 0 / 44%);" class="container-fluid bg-th content-th">
        <div class="container">
            <div class="row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                <h2 style="margin-left: 8%" class="font-weight-th">Dashboard</h2>
            </div>
        </div>


        <div style="margin-top: 5%" class="container">
            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3 flex-th">
                <div class="col">
                    <div style="background-color: white !important" class="p-3 border">
                        <h5 class="font-weight-th">4</h5>
                        <p>Categories</p>
                    </div>
                </div>
                <div class="col">
                    <div style="background-color: white !important" class="p-3 border">
                        <h5 class="font-weight-th">6</h5>
                        <p>Foods</p>
                    </div>
                </div>
                <div class="col">
                    <div style="background-color: white !important" class="p-3 border">
                        <h5 class="font-weight-th">3</h5>
                        <p>Total Orders</p>
                    </div>
                </div>
                <div class="col">
                    <div style="background-color: white !important" class="p-3 border">
                        <h5 class="font-weight-th">$36.00</h5>
                        <p>Revenue Generated</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Content -->


    <!-- Start: Footer -->
    <div class="container-fluid" style="background-color: #ff6b6b">
        <div class="container text-center text-white">
            <p style="padding: 1%">2020 All rights reserved. Food House. Developed By <a href="#">ThuHa</a></p>
        </div>
    </div>
    <!-- End: Footer -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>