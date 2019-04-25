
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
                    <li class="active">Category Grid</li>
                </ul>
            </div>
        </div>
        
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-left">
                        <div class="block block-layered-nav">
                            <div class="block-title">
                                <strong><span>Sort By</span></strong>
                            </div>
                            <div class="block-content">
                                <p class="block-subtitle">Shopping Options</p>
                                <div id="narrow-by-list">
                                    <!-- <div class="layered layered-Category">
                                        <h2>Category</h2>
                                        <div class="content-shopby">
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
                                    <div class="layered layered-price">
                                        <h2>Price</h2>
                                        <div class="content-shopby">
                                            <div id="slider-range"></div>
                                            <div id="search_pr">
                                                <input type="text" name="first_price" class="form-control">
                                                <input type="text" name="last_price" class="form-control">
                                                <button id="search_price" name="search_price" type="button" class="btn btn-default">SHOW</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="layered layered-Manufacturer">
                                        <h2>Manufacturer</h2>
                                        <div class="content-shopby">
                                            <ol>
                                                <li><a href="#">Aliquam</a></li>
                                                <li><a href="#">Duis tempus id </a></li>
                                                <li><a href="#">Leo quis molestie. </a></li>
                                                <li><a href="#">Suspendisse </a></li>
                                                <li><a href="#">Nunc gravida </a></li>
                                            </ol>
                                        </div>
                                    </div> -->
                                    <div class="layered layered-Color">
                                        <h2>Color</h2>
                                        <div class="content-shopby">
                                            <ol>
                                                <li><a href="#">White</a></li>
                                                <li><a href="#">Black</a></li>
                                                <li><a href="#">Yellow</a></li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /sort -->
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
                        </div>
                        
                    </div><!-- /.col-left -->
                    <div class="col-sm-9 col-right">
                        <div class="banner">
                            <a href="#"><img alt="" src="public/frontend/item8.jpg" ></a>
                        </div>
                        <div class="page-title">
                           <?php include "controller/frontend/controller_list_title.php" ?>
                        </div>
                        <div class="toolbar">
                            <div class="sorter">
                                <p class="view-mode">
                                    <label>View as:</label>
                                    <strong class="grid" title="Grid">Grid</strong>&nbsp;
                                    <a class="list" title="List" href="#">List</a>&nbsp;
                                </p>
                            </div><!-- /.sorter -->
                            <div class="pager">
                                <div class="sort-by hidden-xs">
                                    <label>Sort By:</label>
                                    <select class="form-control input-sm">
                                        <option selected="selected">Position</option>
                                        <option>Name</option>
                                        <option>Price</option>
                                    </select>
                                    <a title="Set Descending Direction" href="#"><span class="fa fa-sort-amount-desc"></span></a>
                                </div>
                                <div class="limiter hidden-xs">
                                    <label>Show:</label>
                                    <div class="limiter-inner">
                                        <select class="form-control input-sm">
                                            <option>9</option>
                                            <option selected="selected">12</option>
                                            <option>24</option>
                                            <option>36</option>
                                        </select> 
                                    </div>
                                </div>
                            </div><!--- /.pager -->
                        </div><!-- /.toolbar -->
                        <div class="row products">
                            
                            <?php include "controller/frontend/controller_list.php" ?>
                        </div><!-- /.product -->
                        <div class="toolbar">
                            <div class="sorter">
                                <p class="view-mode">
                                    <label>View as:</label>
                                    <strong class="grid" title="Grid">Grid</strong>&nbsp;
                                    <a class="list" title="List" href="#">List</a>&nbsp;
                                </p>
                            </div><!-- /.sorter -->
                            <div class="pager">
                                <div class="sort-by hidden-xs">
                                    <label>Sort By:</label>
                                    <select class="form-control input-sm">
                                        <option selected="selected">Position</option>
                                        <option>Name</option>
                                        <option>Price</option>
                                    </select>
                                    <a title="Set Descending Direction" href="#"><span class="fa fa-sort-amount-desc"></span></a>
                                </div>
                                <div class="limiter hidden-xs">
                                    <label>Show:</label>
                                    <div class="limiter-inner">
                                        <select class="form-control input-sm">
                                            <option>9</option>
                                            <option selected="selected">12</option>
                                            <option>24</option>
                                            <option>36</option>
                                        </select> 
                                    </div>
                                </div>
                            </div><!-- /.pager -->
                        </div><!-- /.toolbar -->
                    </div><!-- /.col-right -->
                </div>
            </div>
        </div><!-- /.main -->
        
     <?php include "footer.php" ?>
