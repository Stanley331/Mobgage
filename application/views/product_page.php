<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>MobGage - Online mobile rental platform | Product Details</title>

    <!-- Favicon  -->
    <link rel="icon" href="<?php echo base_url();?>img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/core-style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>

<body>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="<?php echo base_url();?>img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.html"><img src="<?php echo base_url();?>img/core-img/mlogo.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="index.html"><img src="<?php echo base_url();?>img/core-img/mlogo.png" alt=""></a>
            </div>
            <!-- Amado Nav 
            <nav class="amado-nav">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li class="active"><a href="product-details.html">Product</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                </ul>
            </nav>
            Button Group 
            <div class="amado-btn-group mt-30 mb-100">
                <a href="#" class="btn amado-btn mb-15">%Discount%</a>
                <a href="#" class="btn amado-btn active">New this week</a>
            </div> -->
            <!-- Cart Menu -->
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                <a href="https://www.pinterest.pt/"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://twitter.com/?lang=en"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </header>
        <!-- Header Area End -->

        <!-- Product Details Area Start -->
        <div class="single-product-area section-padding-100 clearfix">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                           <!-- <ol class="breadcrumb mt-50">
                                <li class="breadcrumb-item"><a href="#">Hom</a></li>
                                <li class="breadcrumb-item"><a href="#">Furniture</a></li>
                                <li class="breadcrumb-item"><a href="#">Chairs</a></li>
                                <li class="breadcrumb-item active" aria-current="page">white modern chair</li>
                            </ol>-->
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">   
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a class="gallery_img" href="<?php echo $result->row()->image;?>">
                                            <img class="d-block w-100" src="<?php echo base_url();?>img/bg-img/<?php echo $result->row()->image;?>">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="single_product_desc">
                            <!-- Product Meta Data -->
                            <div class="product-meta-data">
                                <div class="line"></div>
                                <p class="product-price">&#8377;<?php echo $result->row()->mob_price;?></p>
                                <a href="product-details.html">
                                    <h6><?php echo $result->row()->mob_model;?></h6>
                                </a>
                                <div><br>
                                    <div class="text">
                                        <h6>Descrpition:</h6>
                                        <Div>
                                        <h6>Ram:   <?php echo $result->row()->mob_ram;?></div>
                                        <Div>
                                        <h6>Camera:   <?php echo $result->row()->mob_camera;?></div>
                                        <Div>
                                        <h6>Battery:   <?php echo $result->row()->mob_battery;?></div><br><br>
                                    </div>
                                </div>
                                <!-- Ratings & Review -->
                                <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <!-- Avaiable -->
                                <p class="avaibility"><i class="fa fa-circle"></i> In Stock</p>
                                <p>Renting period</p>
                            </div>

                            <!-- Add to Cart Form -->
                            <form class="cart clearfix" method="post" action="<?php echo base_url().'customer/success/'.$result->row()->mob_id?>">
                                <div class="cart-btn d-flex mb-50">
                                    <form class="form-inline">
                                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref"></label>
                                    <select name="duration" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" require>
                                        <option selected>3</option>
                                        <option value="3">6</option>
                                        <option value="6">12</option>
                                    </select>
                                </div>
                                <input type="submit" class="btn btn-warning" value="Rent now" >
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Details Area End -->
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Newsletter Area Start ##### -->
    <section class="newsletter-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <!-- Newsletter Text -->
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="newsletter-text mb-100">
                        <h2>Mob<span>G<span style="color:white;">age<span></span></h2>
                        <p>Normalizing renting of Mobile phones since 2021</p>
                    </div>
                </div>
                <!-- Newsletter Form -->
            </div>
        </div>
    </section>
    <!-- ##### Newsletter Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Logo -->
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-8">
                    <div class="single_widget_area">
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <nav class="navbar navbar-expand-lg justify-content-end">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNavContent" aria-controls="footerNavContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="<?php echo base_url();?>js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url();?>js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="<?php echo base_url();?>js/plugins.js"></script>
    <!-- Active js -->
    <script src="<?php echo base_url();?>ctive.js"></script>

</body>

</html>