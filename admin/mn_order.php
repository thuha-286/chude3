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
                <h2 class="font-weight-th">Manage Order</h2>
            </div>
        </div>
        <div class="container">
            <div class="table-responsive">
                <table style="margin-top: 4%" class="table">

                    <thead>
                        <tr>
                            <th scope="col">S.N.</th>
                            <th scope="col">Food</th>
                            <th scope="col">Price</th>
                            <th scope="col">Qty.</th>
                            <th scope="col">Total</th>
                            <th scope="col">Order Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th style="font-weight: 100;" scope="row">1.</th>
                            <td>Mixed <br> Pizza</td>
                            <td>10.00</td>
                            <td>2</td>
                            <td>20.00</td>
                            <td>2020-11-30<br>04:07:17</td>
                            <td style="color: #27ae60">Delivered</td>
                            <td>Jana Bush</td>
                            <td>+1 (562)<br>101-2028</td>
                            <td>tydujy@mailinatior.com</td>
                            <td>Minima iure<br>ducimus</td>
                            <td>
                                <span style="background-color: #0be881" class="font-weight-th">Update <br> Order</span>
                            </td>
                        </tr>
                        <tr>
                            <th style="font-weight: 100;" scope="row">2.</th>
                            <td>Best <br> Burger</td>
                            <td>4.00</td>
                            <td>4</td>
                            <td>16.00</td>
                            <td>2020-11-30<br>03:52:43</td>
                            <td style="color: #27ae60">Delivered</td>
                            <td>Kelly Dillard</td>
                            <td>+1 (908)<br>914-3106</td>
                            <td>fexekihor@mailinatior.com</td>
                            <td>Incidunt ipsum<br> ad d</td>
                            <td>
                                <span style="background-color: #0be881" class="font-weight-th">Update <br> Order</span>
                            </td>

                        </tr>
                        <tr>
                            <th style="font-weight: 100;" scope="row">3.</th>
                            <td>Sadeko <br> Momo</td>
                            <td>6.00</td>
                            <td>3</td>
                            <td>18.00</td>
                            <td>2020-11-30<br>03:49:48</td>
                            <td style="color: #ff6b6b">Cancelled</td>
                            <td>Bradley Farrell</td>
                            <td>+1 (576)<br>504-4657</td>
                            <td>zuhafiq@mailinatior.com</td>
                            <td>Duis aliqua<br>Qui lor</td>
                            <td>
                                <span style="background-color: #0be881" class="font-weight-th">Update <br> Order</span>
                            </td>

                        </tr>

                    </tbody>
                </table>
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