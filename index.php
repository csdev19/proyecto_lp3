<?php
// include database configuration file
include 'dbConfig.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Shopping Cart Tutorial</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
</head>
<body>

    <!-- <div class="container"> -->
    <!-- <div class="py-1 bg-primary">
        <div class="container" style="background-color: #F08080;">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                            <span class="text">+51 999 999 999</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                            <span class="text">contactos@dulcekat.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!--  -->
    <!--  -->
    <!--  -->
    <!--  -->
    <!--  -->

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.jsp">Dulcekat</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.jsp" class="nav-link">Inicio</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link"></a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="todosProductos" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item">
                        </div>
                    </li>
                    <li class="nav-item"><a href="nosotros" class="nav-link">Nosotros</a></li>
                    <li class="nav-item"><a href="contacto" class="nav-link">Contáctanos</a></li>
                    <li class="nav-item">
                        <a href="login" class="nav-link">
                            <img src="images/avatar.png" width="18">
                        </a>
                    </li>
                    <li class="nav-item cta cta-colored">
                        <a href="carroCompras" class="nav-link">
                            <span class="icon-shopping_cart"></span>
                            [<spam id="counter"><spam>0</spam></spam>]
                        </a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link">Cristian</a></li>
                    <li class="nav-item cta cta-colored">
                        <a href="carroCompras" class="nav-link">
                            <span class="icon-shopping_cart"></span>
                            <spam id="counter">0</spam>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

        <!-- <h1>hola</h1> -->

    <!-- </div> -->
</body>
</html>