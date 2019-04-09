<?php foreach ($arr as $rows) {
    # code... ?>

<div class="item-inner first">
                                            <div class="images-container">
                                                <a href="detail.php?id=<?php echo $rows->id_product ?>" title="Primis in faucibus" class="product-image">
                                                    <img src="public/frontend/<?php echo $rows->img_product ?>" alt="Primis in faucibus" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Primis in faucibus"><?php echo $rows->name_product ?></a></h2>
                                                <div class="price-box">
                                                    <?php 
                                                      $price =  $rows->price;
                                                       
                                                       $sale = $rows->sale;
                                                       $result = ($price * $sale) / 100;

                                                     ?>
                                                    <p class="special-price">
                                                        <span class="price">$ <?php echo $result ?></span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price">$ <?php echo $rows->price ?></span>
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

                                        <?php } ?>
                                        