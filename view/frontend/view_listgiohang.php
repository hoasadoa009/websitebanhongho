<?php 
if (isset($_SESSION['cart'])) {
	foreach ($_SESSION['cart'] as $rows) {
    ?>


<div class="media">
                                                <div class="media-left"><a href="#"><img src="public/frontend/<?php echo $rows['img_product'] ?>" alt="" class="img-responsive"></a></div>
                                                <div class="media-body">
                                                    <button type="button" class="remove-cart-item" >&times;</button>
                                                    <h4><?php echo $rows['name_product']?></h4>
                                                    
                                                    <div class="mini-cart-price">$ <?php echo $rows['price'] ?></div>
                                                </div>
                                            </div>
                                            
                                            <?php } }?>