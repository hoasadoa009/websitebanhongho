
<?php 
    session_start();
   include "config.php";
         //load file model.php
         include "model/model.php";
include "header.php" ?>
        
        <div class="breadcrumbs">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Blogs</li>
                </ul>
            </div>
        </div>
        
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <!-- <div class="block block-layered-nav">
                            <div class="block-content">
                                <h2>Categories</h2>
                                <ol>
                                    <li><a href="#">Clothing</a></li>
                                    <li><a href="#">Accessories</a></li>
                                    <li><a href="#">Bags</a></li>
                                    <li><a href="#">Shoes</a></li>
                                    <li><a href="#">HandBag</a></li>
                                    <li><a href="#">Fashion</a></li>
                                </ol>
                            </div>
                        </div> -->
                        <div class="block">
                            <div class="title-group"><h2>Recent post</h2></div>
                            <div id="recent-post" class="owl-container">
                                <div class="owl">
                                    <div class='sepecialoffer-item item'>
                                        <div class="item-inner first">
                                            <div class="images-container">
                                                <a href="#" title="Demonstraverunt lectores" class="product-image">
                                                    <img src="images/blog/blog-sm-01.jpg" alt="Demonstraverunt lectores" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Demonstraverunt lectores">Demonstraverunt lectores</a></h2>
                                            </div>
                                        </div>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <a href="#" title="Accumsan elit " class="product-image">
                                                    <img src="images/blog/blog-sm-02.jpg" alt="Accumsan elit " />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Accumsan elit ">Accumsan elit </a></h2>
                                            </div>
                                        </div>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <a href="#" title="Nunc facilisis" class="product-image">
                                                    <img src="images/blog/blog-sm-03.jpg" alt="Nunc facilisis" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Nunc facilisis">Nunc facilisis</a></h2>
                                            </div>
                                        </div>
                                        <div class="item-inner last">
                                            <div class="images-container">
                                                <a href="#" title="Fusce aliquam" class="product-image">
                                                    <img src="images/blog/blog-sm-04.jpg" alt="Fusce aliquam" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Fusce aliquam">Fusce aliquam</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='sepecialoffer-item item'>
                                        <div class="item-inner first">
                                            <div class="images-container">
                                                <a href="#" title="Demonstraverunt lectores" class="product-image">
                                                    <img src="images/blog/blog-sm-01.jpg" alt="Demonstraverunt lectores" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Demonstraverunt lectores">Demonstraverunt lectores</a></h2>
                                            </div>
                                        </div>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <a href="#" title="Accumsan elit " class="product-image">
                                                    <img src="images/blog/blog-sm-02.jpg" alt="Accumsan elit " />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Accumsan elit ">Accumsan elit </a></h2>
                                            </div>
                                        </div>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <a href="#" title="Nunc facilisis" class="product-image">
                                                    <img src="images/blog/blog-sm-03.jpg" alt="Nunc facilisis" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Nunc facilisis">Nunc facilisis</a></h2>
                                            </div>
                                        </div>
                                        <div class="item-inner last">
                                            <div class="images-container">
                                                <a href="#" title="Fusce aliquam" class="product-image">
                                                    <img src="images/blog/blog-sm-04.jpg" alt="Fusce aliquam" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Fusce aliquam">Fusce aliquam</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.owl-container -->
                        </div><!-- /.block - Recent post -->
                        <div class="block">
                            <div class="title-group"><h2>Comments</h2></div>
                            <div class="block-content">
                                <div class="comment-item">
                                    <h4><a href="#">Natalia Assyrian</a></h4>
                                    <div class="comment-date">13 / 6 /2014 </div>
                                    <p>“  Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.   “</p>
                                </div>
                                <div class="comment-item">
                                    <h4><a href="#">John</a></h4>
                                    <div class="comment-date">13 / 6 /2014 </div>
                                    <p>“  IEodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum   “</p>
                                </div>
                                <div class="comment-item">
                                    <h4><a href="#">Thomas Hurt</a></h4>
                                    <div class="comment-date">13 / 6 /2014 </div>
                                    <p>“  Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus   “</p>
                                </div>
                            </div>
                        </div><!-- /.block - Comments -->
                        <div class="block">
                            <div class="title-group"><h2>Tags</h2></div>
                            <div class="block-content">
                                <ol class="tags">
                                    <li><a href="#">Women</a></li>
                                    <li><a href="#">Men</a></li>
                                    <li class="active"><a href="#">Bags</a></li>
                                    <li><a href="#">Suits</a></li>
                                    <li><a href="#">Sweatshirts</a></li>
                                    <li><a href="#">Shopping</a></li>
                                    <li><a href="#">Hoodies</a></li>
                                </ol>
                            </div>
                        </div><!-- /.block - Comments -->
                    </div><!-- /sidebar -->
                    <div class="col-sm-9">
                        <?php include "controller/frontend/controller_blog_detail.php" ?>
                    </div><!-- /content -->
                </div>
            </div>
        </div><!-- /.main -->
        
        <?php include "footer.php" ?>
