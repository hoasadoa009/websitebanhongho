<?php 
        include "config.php";
         //load file model.php
         include "model/model.php";
        include "header.php";

 ?>
        
        <div class="breadcrumbs">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Category</a></li>
                    <li class="active">Detail Product</li>
                </ul>
            </div>
        </div><!-- /.breadcrumbs -->
        
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-right">

                       <?php include "controller/frontend/controller_detail.php" ?>

                        <div class="featuredproductslider-container"> 
                            <div class="title-group1"><h2>sản phẩm mới</h2></div>
                            <div id="featured-products" class="owl-container">
                                <div class="owl">
                                    
                                    <?php include "controller/frontend/controller_product_detail_new.php" ?>
                                    

                                </div>
                            </div>
                        </div><!-- /.featuredproductslider-container -->
                    </div><!-- /.col-right -->
                    <div class="col-sm-3 col-left">
                        <div class="block">
                            <div class="title-group"><h2>Related</h2></div>
                            <div id="special-offer" class="owl-container">
                                <div class="owl">
                                    <div class='sepecialoffer-item item'>
                                        <div class="item-inner first">
                                            <div class="images-container">
                                                <a href="#" title="Primis in faucibus" class="product-image">
                                                    <img src="images/products/15.jpg" alt="Primis in faucibus" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Primis in faucibus">Primis in faucibus</a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price">$169.99</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price">$189.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:87%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <a href="#" title="Accumsan elit " class="product-image">
                                                    <img src="images/products/14.jpg" alt="Accumsan elit " />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Accumsan elit ">Accumsan elit </a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price">$169.99</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price">$189.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:67%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <a href="#" title="Nunc facilisis" class="product-image">
                                                    <img src="images/products/5.jpg" alt="Nunc facilisis" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Nunc facilisis">Nunc facilisis</a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price">$169.99</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price">$189.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:67%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-inner last">
                                            <div class="images-container">
                                                <a href="#" title="Fusce aliquam" class="product-image">
                                                    <img src="images/products/8.jpg" alt="Fusce aliquam" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Fusce aliquam">Fusce aliquam</a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price">$169.99</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price">$189.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:67%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='sepecialoffer-item item'>
                                        <div class="item-inner first">
                                            <div class="images-container">
                                                <a href="h#" title="consequences" class="product-image">
                                                    <img src="images/products/9.jpg" alt="consequences" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="consequences">consequences</a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price">$169.99</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price">$189.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:73%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <a href="#" title="Cras neque metus" class="product-image">
                                                    <img src="images/products/12.jpg" alt="Cras neque metus" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Cras neque metus">Cras neque metus</a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price">$169.99</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price">$189.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:67%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-inner ">
                                            <div class="images-container">
                                                <a href="#" title="Etiam gravida" class="product-image">
                                                <img src="images/products/4.jpg" alt="Etiam gravida" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Etiam gravida">Etiam gravida</a></h2>
                                                <div class="price-box">
                                                    <p class="old-price">
                                                        <span class="price-label">Regular Price: </span><span class="price">$432.00</span>
                                                    </p>
                                                    <p class="special-price">
                                                        <span class="price-label">Special Price</span>
                                                        <span class="price">$321.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:67%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-inner last">
                                            <div class="images-container">
                                                <a href="#" title="Donec non est" class="product-image">
                                                <img src="images/products/9.jpg" alt="Donec non est" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Donec non est">Donec non est</a></h2>
                                                <div class="price-box">
                                                    <p class="old-price">
                                                        <span class="price-label">Regular Price: </span><span class="price">$721.00</span>
                                                    </p>
                                                    <p class="special-price">
                                                        <span class="price-label">Special Price</span>
                                                        <span class="price">$631.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:73%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='sepecialoffer-item item'>
                                        <div class="item-inner first">
                                            <div class="images-container">
                                                <a href="#" title="pleasure rationally" class="product-image">
                                                    <img src="images/products/10.jpg" alt="pleasure rationally" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="pleasure rationally">pleasure rationally</a></h2>
                                                <div class="price-box">
                                                    <p class="old-price">
                                                        <span class="price-label">Regular Price: </span><span class="price">$333.00</span>
                                                    </p>
                                                    <p class="special-price">
                                                        <span class="price-label">Special Price</span>
                                                        <span class="price">$222.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:67%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-inner ">
                                            <div class="images-container">
                                                <a href="#" title="Aliquam consequat" class="product-image">
                                                    <img src="images/products/5.jpg" alt="Aliquam consequat" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Aliquam consequat">Aliquam consequat</a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price">$169.99</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price">$189.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:60%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-inner ">
                                            <div class="images-container">
                                                <a href="#" title=" Donec ac tempus " class="product-image">
                                                    <img src="images/products/11.jpg" alt=" Donec ac tempus " />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title=" Donec ac tempus "> Donec ac tempus </a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price">$169.99</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price">$189.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:80%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-inner last">
                                            <div class="images-container">
                                                <a href="#" title="occaecati cupiditate" class="product-image">
                                                    <img src="images/products/6.jpg" alt="occaecati cupiditate" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="occaecati cupiditate">occaecati cupiditate</a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price">$169.99</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price">$189.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:67%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.owl-container -->
                        </div><!-- /.block - Special offer -->
                        <div class="block block-list">
                            <div class="block-title">
                                <strong><span>Compare</span></strong>
                            </div>
                            <div class="block-content">
                                <p class="empty">You have no items to compare.</p>
                            </div>
                        </div><!-- /.compare -->
                        <div class="banner-left"><a href="#"><img src="images/ads/ads-01.jpg" alt=""></a>
                            <div class="banner-content">
                                <h1>sale up to</h1>
                                <h2>20% off</h2>
                                <p>on selected products</p>
                                <a href="#">buy now</a>
                            </div>
                        </div><!-- /.banner-left -->
                    </div><!-- /.col-left -->
                </div>
            </div>
        </div><!-- /.main -->
        
       <?php include "footer.php" ?>
