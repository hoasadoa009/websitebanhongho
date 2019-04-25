<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Galio | Shop đồng hồ Online</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/nivo-slider.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
     <link href="css/jquery.bxslider.css" rel="stylesheet">
    <link href="css/jquery-ui.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="./images/avatar/231a.png"/>
     
    <link href="css/cloud-zoom.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css" type="text/css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <?php 
                   
                    if(isset($_POST['submit'])){
                        
                        
                        if(isset($_SESSION['cart'])){
                            $diachi = $_POST['txtdiachi'];
                            $sodienthoai = $_POST['txtsdt'];
                            // var_dump($_POST);
                            $sql = "insert into `order` (address_customer, phone_customer, id_customer)values ('{$diachi}','{$sodienthoai}','{$_SESSION['id_customer']}')";
                            mysqli_query($db, $sql);

                           $result =  mysqli_query($db, "select id_order from `order` ORDER BY date_created DESC LIMIT 1");
                           $id_order = mysqli_fetch_object($result)->id_order;
                           foreach ($_SESSION['cart'] as $arr) { 
                                $id_product = $arr['id_product'];
                                $number = $arr['number'];
                                $price = $arr['price'];
                                $sale = $arr['sale'];
                               $sql2= "insert into `order_detail`(`id_order`, `id_product`, `quality`, `current_price`) values ('{$id_order}','{$id_product}','{$number}','{$price}')";
                               mysqli_query($db, $sql2);
                               $result_sale = ($price * $sale) / 100;
                               $result_end = $price - $result_sale;
                               
                               

                           }
                           
                           


                        }
                    }
                        
                   ?>
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thông tin khách hàng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label>Tên khách hàng</label>
                            <input type="text" name="txtten" class="form-control" placeholder="Nhập vào họ tên" value="<?php echo $_SESSION['name_customer']; ?>" />
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input type="text" name="txtdiachi" class="form-control" placeholder="Nhập vào số địa chỉ" value="<?php echo $_SESSION['address']; ?>" />
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="text" name="txtsdt" class="form-control" placeholder="Nhập vào số điện thoại" value="<?php echo $_SESSION['phone']; ?>" />
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="submit" name="submit" value="huynh" class="btn btn-primary">Hoàn tất</button>
                          </div>
                    </form>
                  </div>
                  
                </div>
              </div>
            </div>
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
                            // echo '<pre>';
                            // print_r($_SESSION);
                            // echo '</pre>';                              
                              if(!isset($_SESSION['name_customer'])){

                             ?>
                            <li><a id="login" href="checkout.php" class="login">Đăng nhập</a></li>
                        <?php 
                            }else{
                                  echo  "<li>Xin chào: ".$_SESSION['name_customer']."</li><a href='logout.php'>Đăng xuất</a>";
                                }
                         ?>
                            <!-- <li class="dropdown">
                                <a href="#" class="account dropdown-toggle" data-toggle="dropdown">My Account</a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a title="My Account" href="account.html">My Account</a></li>
                                    <li><a title="My Wishlist" href="wishlist.html">My Wishlist</a></li>
                                    <li><a title="My Cart" href="cart.html">My Cart</a></li>
                                    <li><a title="Checkout" href="checkout.html">Checkout</a></li>
                                    <li><a title="Testimonial" href="testimonial.html">Testimonial</a></li>
                                </ul>
                            </li> -->
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
                                    <li><a onclick="setLanguage('en')" href="#"><img src="images/flag-us.png" alt=""> &nbsp;English</a></li>
                                    <li><a onclick="setLanguage('vn')" href="#"><img src="images/flag-spain.png" alt=""> &nbsp;Tiếng việt</a></li>
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
                                                <h2 id="workingtime" style="font-size: 16px;">Thời gian làm việc</h2>
                                                <p>T2- CN: 8.00 - 18.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="box-container free-shipping">
                                            <div class="box-inner">
                                                <h2 id="freeShip" style="font-size: 16px;">Miễn phí vận chuyển</h2>
                                                <p>Áp dụng đơn hàng từ 199$</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="box-container money-back">
                                            <div class="box-inner">
                                                <h2 id="return" style="font-size: 16px;">Hoàn trả 100%</h2>
                                                <p>Hoàn trả sau 30 ngày</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.support-client -->
                            <?php include "controller/frontend/controller_search.php" ?>
                            <div class="mini-cart">
                                <?php 
                                        $result_end1 = 0;
                                         if (isset($_SESSION['cart'])) {
                                             foreach ($_SESSION['cart'] as $arr) { 
                                                $id_product = $arr['id_product'];
                                                $number = $arr['number'];
                                                $price = $arr['price'];
                                                $sale = $arr['sale'];
                                               $result_sale = ($price * $sale) / 100;
                                               $result_end = ($price - $result_sale) * $number;
                                               $result_end1 += $result_end;
                                           }
                                         }
                                 ?>
                                <div class="top-cart-title">
                                    <a  href="cart.php?controller=cart" class="dropdown-toggle" data-toggle="dropdown">
                                        Giỏ hàng
                                        <span class="price" >$ <?php echo $result_end1; ?></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="cart-listing">
                                            <?php include "controller/frontend/controller_giohang.php" ?>
                                        </div><!-- /.cart-listing --><!-- 
                                        <div class="mini-cart-subtotal">Shipping: <span class="price">$5.00</span></div>
                                        <div class="mini-cart-subtotal">Total: <span class="price">$200.00</span></div> -->
                                        <div class="checkout-btn">
                                            <a href="#" class="btn btn-default btn-md fwb" data-toggle="modal" data-target="#exampleModal">Thanh toán</a>
                                            <a href="cart.php?controller=cart" class="btn btn-default btn-md fwb">Giỏ hàng</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="f-nav">
                        <div class="col-md-3">
                            <div class="mega-container visible-lg visible-md">
                                <div class="navleft-container">
                                    <div class="mega-menu-title"><h3 id="category">Danh mục</h3></div>
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
                                <li class="active"><a href="#" >GALIO</a>
                                    
                                </li>
                                <?php include "controller/frontend/controller_category_product_responsive.php" ?>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container -->
                </nav>
            </div><!-- /.header-bottom -->
        </div><!-- /.header -->