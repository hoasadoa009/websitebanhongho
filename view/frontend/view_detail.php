<?php 
	$id=($_GET["id"]) ? $_GET["id"] : 0;
	 $arr = $this->model->get_a_record("select * from product where id_product=$id");

 ?>
  <div class="product-view">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="product-img-box">
                                        <p class="product-image">
                                            <a href="public/frontend/<?php echo $arr->img_product ?>" class="cloud-zoom" id="ma-zoom1">
                                                <img src="public/frontend/<?php echo $arr->img_product ?>" alt="Fusce aliquam" title="Fusce aliquam" />
                                            </a>
                                        </p>
                                        <!-- <div class="more-views thumbnail-container">
                                            <ul class="bxslider">
                                                <li class="thumbnail-item">
                                                    <a href="images/products/1.jpg" class="cloud-zoom-gallery" title="" name="images/products/1.jpg" rel="useZoom: 'ma-zoom1', smallImage: 'images/products/1.jpg'">
                                                        <img src="images/products/1.jpg" alt="" />
                                                    </a>
                                                </li>
                                                <li class="thumbnail-item">
                                                    <a href="images/products/2.jpg" class="cloud-zoom-gallery" title="" name="images/products/2.jpg" rel="useZoom: 'ma-zoom1', smallImage: 'images/products/2.jpg'">
                                                        <img src="images/products/2.jpg" alt="" />
                                                    </a>
                                                </li>
                                                <li class="thumbnail-item">
                                                    <a href="images/products/3.jpg" class="cloud-zoom-gallery" title="" name="images/products/3.jpg" rel="useZoom: 'ma-zoom1', smallImage: 'images/products/3.jpg'">
                                                        <img src="images/products/3.jpg" alt="" />
                                                    </a>
                                                </li>
                                                <li class="thumbnail-item">
                                                    <a href="images/products/4.jpg" class="cloud-zoom-gallery" title="" name="images/products/4.jpg" rel="useZoom: 'ma-zoom1', smallImage: 'images/products/4.jpg'">
                                                        <img src="images/products/4.jpg" alt="" />
                                                    </a>
                                                </li>
                                                <li class="thumbnail-item">
                                                    <a href="images/products/5.jpg" class="cloud-zoom-gallery" title="" name="images/products/5.jpg" rel="useZoom: 'ma-zoom1', smallImage: 'images/products/5.jpg'">
                                                        <img src="images/products/5.jpg" alt="" />
                                                    </a>
                                                </li>
                                                <li class="thumbnail-item">
                                                    <a href="images/products/6.jpg" class="cloud-zoom-gallery" title="" name="images/products/6.jpg" rel="useZoom: 'ma-zoom1', smallImage: 'images/products/6.jpg'">
                                                        <img src="images/products/6.jpg" alt="" />
                                                    </a>
                                                </li>
                                            </ul>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="product-shop col-sm-7">
                                    <div class="product-name">
                                        <h1><?php echo $arr->name_product ?></h1>
                                    </div>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <div style="width:67%" class="rating"></div>
                                        </div>
                                        <span class="amount"><a href="#">1 Review(s)</a></span>
                                    </div>
                                    <div class="box-container2"> 
                                    	<?php 
					                      $price =  $arr->price;
					                       
					                       $sale = $arr->sale;
					                       $result = ($price * $sale) / 100;

					                     ?>
                                        <div class="price-box">
                                            <p class="special-price">
                                                <span class="price-label">Special Price</span>
                                            <span id="product-price-1" class="price">$<?php echo $arr->price - $result ?></span>
                                            </p>
                                            <p class="old-price">
                                                <span class="price-label">Regular Price:</span>
                                                <span id="old-price-1" class="price">$<?php echo $arr->price; ?></span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="short-description">
                                        <div class="std"><?php echo $arr->short_description ?></div>
                                    </div>
									
                                    <p class="availability in-stock">Tồn kho: <span><?php echo $arr->quality ?> sản phẩm</span></p>
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-md-2 col-sm-3 control-label">Size <em>*</em></label>
                                            <div class="col-sm-7">
                                                <select class="form-control">
                                                    <option value="">-- Please Select --</option>
                                                    <option value="2">L +$2.00</option>
                                                    <option value="1">M +$1.00</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 col-sm-3 control-label">Color <em>*</em></label>
                                            <div class="col-sm-7">
                                                <select class="form-control">
                                                    <option value="">-- Please Select --</option>
                                                    <option value="4">black +$2.00</option>
                                                    <option value="3">blue +$1.00</option>
                                                    <option value="5">yellow +$1.00</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 col-sm-3 control-label">Quantity:</label>
                                            <div class="col-md-3 col-sm-5">
                                                <div class="input-group qty">
                                                    <span class="input-group-btn">
                                                        <button class="btn" type="button">-</button>
                                                    </span>
                                                    <input type="text" class="form-control" value="3">
                                                    <span class="input-group-btn">
                                                        <button class="btn" type="button">+</button>
                                                    </span>
                                                </div><!-- /input-group -->
                                            </div>
                                        </div>
                                        <a href="cart.php?controller=cart&act=add&id=<?php echo $arr->id_product; ?>"  class="btn btn-danger btn-cart">Add to cart</a>
                                       
                                        <!-- <button type="button" class="btn btn-default btn-wishlist">Add to wishlist</button>
                                        <button type="button" class="btn btn-default btn-compare">Add to compare</button> -->
                                    </form>
                                </div><!-- /.product-shop -->
                            </div>
                            <div class="product-tab tab-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#product-desc" data-toggle="tab">PRODUCT DESCRIPTION</a></li>
                                    <li><a href="#product-review" data-toggle="tab">CUSTOMER REVIEW</a></li>
                                    <li><a href="#product-tags" data-toggle="tab">PRODUCT TAGS</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="product-desc">
                                        <?php echo $arr->description ?>
                                    </div>
                                    <div class="tab-pane" id="product-review">...</div>
                                    <div class="tab-pane" id="product-tags">...</div>
                                </div>
                            </div><!-- /.product-tab -->
                        </div><!-- /.product-view -->