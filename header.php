<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="#">

    <title>Galio</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/nivo-slider.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
     <link href="css/jquery.bxslider.css" rel="stylesheet">
    <link href="css/jquery-ui.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="./images/avatar/icon.png"/>
     
    <link href="css/cloud-zoom.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
        <div class="header">
            <div class="topbar">
                <div class="container">
                    <div class="topbar-left">
                        <ul class="topbar-nav clearfix">
                            <li><span class="phone">0(123) 456 789</span></li>
                            <li><span class="email">info@plazathemes.com</span></li>
                        </ul>
                    </div>
                    <div class="topbar-right">
                        <ul class="topbar-nav clearfix">
                            <?php 
                            echo '<pre>';
                            print_r($_SESSION);
                            echo '</pre>';                                if(!isset($_SESSION['name_customer'])){

                             ?>
                            <li><a href="checkout.php" class="login">Login</a></li>
                        <?php 
                            }else{
                                  echo  "<li>Xin chào: ".$_SESSION['name_customer']."</li><a href='logout.php'>Đăng xuất</a>";
                                }
                         ?>
                            <li class="dropdown">
                                <a href="#" class="account dropdown-toggle" data-toggle="dropdown">My Account</a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a title="My Account" href="account.html">My Account</a></li>
                                    <li><a title="My Wishlist" href="wishlist.html">My Wishlist</a></li>
                                    <li><a title="My Cart" href="cart.html">My Cart</a></li>
                                    <li><a title="Checkout" href="checkout.html">Checkout</a></li>
                                    <li><a title="Testimonial" href="testimonial.html">Testimonial</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="currency dropdown-toggle" data-toggle="dropdown">USD</a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#">Euro</a></li>
                                    <li><a href="#">US Dollar</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="language dropdown-toggle" data-toggle="dropdown"><img src="images/flag-us.png" alt=""> English</a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#"><img src="images/flag-us.png" alt=""> &nbsp;English</a></li>
                                    <li><a href="#"><img src="images/flag-spain.png" alt=""> &nbsp;Spanish</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div><!-- /.container -->
            </div><!-- /.topbar -->
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="index.php" class="logo"><img src="images/logo.png" alt=""></a>
                        </div>
                        <div class="col-md-9">
                            <div class="support-client">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="box-container time">
                                            <div class="box-inner">
                                                <h2>working time</h2>
                                                <p>Mon- Sun: 8.00 - 18.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="box-container free-shipping">
                                            <div class="box-inner">
                                                <h2>Free shipping</h2>
                                                <p>On order over $199</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="box-container money-back">
                                            <div class="box-inner">
                                                <h2>Money back 100%</h2>
                                                <p>Within 30 Days after delivery</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.support-client -->
                            <?php include "controller/frontend/controller_search.php" ?>
                            <div class="mini-cart">
                                <div class="top-cart-title">
                                    <a href="cart.php?controller=cart" class="dropdown-toggle" data-toggle="dropdown">
                                        Giỏ hàng
                                        <span class="price">$45.00</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="cart-listing">
                                            <div class="media">
                                                <div class="media-left"><a href="#"><img src="images/products/11.jpg" alt="" class="img-responsive"></a></div>
                                                <div class="media-body">
                                                    <button type="button" class="remove-cart-item" >&times;</button>
                                                    <h4>Accumsan elit</h4>
                                                    <div class="mini-cart-qty">Qty:2</div>
                                                    <div class="mini-cart-price">$ 64.00</div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-left"><a href="#"><img src="images/products/13.jpg" class="img-responsive" alt=""></a></div>
                                                <div class="media-body">
                                                    <button type="button" class="remove-cart-item" >&times;</button>
                                                    <h4>Accumsan elit</h4>
                                                    <div class="mini-cart-qty">Qty:2</div>
                                                    <div class="mini-cart-price">$ 64.00</div>
                                                </div>
                                            </div>
                                        </div><!-- /.cart-listing -->
                                        <div class="mini-cart-subtotal">Shipping: <span class="price">$5.00</span></div>
                                        <div class="mini-cart-subtotal">Total: <span class="price">$200.00</span></div>
                                        <div class="checkout-btn">
                                            <a href="#" class="btn btn-default btn-md fwb">Thanh toán</a>
                                            <a href="cart.php" class="btn btn-default btn-md fwb">Giỏ hàng</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mega-container visible-lg visible-md">
                                <div class="navleft-container">
                                    <div class="mega-menu-title"><h3>Danh mục</h3></div>
                                    <div class="mega-menu-category">
                                        <?php include "controller/frontend/controller_category_brand.php" ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <?php include "controller/frontend/controller_category_product.php" ?>
                            
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-primary navbar-static-top hidden-lg hidden-md">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <h2 class="navbar-brand visible-xs">Menu</h2>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Home</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Computer <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Desktop PC</a></li>
                                        <li><a href="#">Notebook</a></li>
                                        <li><a href="#">Gaming</a></li>
                                        <li><a href="#">Mouse &amp; Keyboard</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Camera <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Walkera</a></li>
                                        <li><a href="#">Fpv System &amp; Parts</a></li>
                                        <li><a href="#">RC Cars &amp; Parts</a></li>
                                        <li><a href="#">Helicopters &amp; Part</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Smart Phone <span class="fa fa-angle-down"></span></a>                                   <ul class="dropdown-menu">
                                        <li><a href="#">Accessories for iPhone</a></li>
                                        <li><a href="#">Accessories for iPad</a></li>
                                        <li><a href="#">Accessories for Tablet PC</a></li>
                                        <li><a href="#">Tablet PC</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Electtronic <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Batteries &amp; Chargers</a></li>
                                        <li><a href="#">Headphone, Headset</a></li>
                                        <li><a href="#">Home Audio</a></li>
                                        <li><a href="#">Mp3 Player Accessories</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">New Arrivals</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container -->
                </nav>
            </div><!-- /.header-bottom -->
        </div><!-- /.header -->