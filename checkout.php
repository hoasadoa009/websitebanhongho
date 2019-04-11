<!-- <?php session_start(); ?> -->
 <?php  include "./config.php";
    include 'model/model.php';
    include 'header.php' ?>

        
        <div class="breadcrumbs">
            <div class="container">
                <ul class="breadcrumb">
                	<li><a href="#">Home</a></li>
                	<li><a href="#">Cart</a></li>
                    <li class="active">Checkout</li>
               	</ul>
            </div>
        </div>
        
        <div class="main">
        	<div class="container">
                <div class="checkout">
                	<div class="row">
                    	<div class="col-sm-9">
                        	<div class="checkout-step">
                        		<div class="checkout-step-item">
                                	<div class="step-title clearfix" data-toggle="collapse" data-target="#checkout-one">
                                        
                                        <h2>Đăng nhập</h2>
                                    </div>
                                    <div id="checkout-one" class="collapse in">
                                    	<div class="step-content">
                                            <div class="row">
                                                <div class="col-sm-6 formLogin">
                                                    <h4>Đăng kí thành viên</h4>
                                                    <div class="line2 mtb20"></div>
                                                    
                                                    <?php include 'controller/frontend/controller_dangki.php' ?>
                                                </div>

                                                <?php include 'controller/frontend/controller_checkout.php' ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div><!-- /.main -->
        
        
        
        <?php include "footer.php" ?>
