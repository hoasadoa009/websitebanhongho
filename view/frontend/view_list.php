<?php 
	$id=($_GET["id"]) ? $_GET["id"] : 0;
    // $key = ($_GET["search"]) ? $_GET["search"] : "";
	 $arr = $this->model->get_all("select * from product where id_category_brand=$id or id_category_product=$id  ");
    
	 foreach ($arr as $rows) {

 ?>

 <div class="col-md-3 col-sm-6">
                                <div class='productslider-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <div class="product_icon">
                                                <div class='new-icon'><span>new</span></div>
                                            </div>
                                            <a href="detail.php?id=<?php echo $rows->id_product ?>" title="Nunc facilisis" class="product-image">
                                                <img src="public/frontend/<?php echo $rows->img_product ?>" alt="Nunc facilisis" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li><a href="#" class="link-quickview">Quick View</a></li>
                                                    <li><a href="#" class="link-wishlist">Add to Wishlist</a></li>
                                                    <li><a href="#" class="link-compare">Add to Compare</a></li>
                                                    <li><a href="cart.php?id=<?php echo $rows->id_product ?>" class="link-cart">Add to Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a href="detail.php?id=<?php echo $rows->id_product ?>" title="Nunc facilisis"><?php echo $rows->name_product ?></a></h2>
                                            <?php 
					                      $price =  $rows->price;
					                       
					                       $sale = $rows->sale;
					                       $result = ($price * $sale) / 100;

					                     ?>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price-label">Special Price</span>
                                                    <span class="price">$<?php echo $rows->price - $result ?></span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price-label">Regular Price: </span>
                                                    <span class="price">$<?php echo $rows->price ?></span>
                                                </p>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:67%"></div>
                                                </div>
                                                <span class="amount"><a href="#">3 Review(s)</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>