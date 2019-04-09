<div class="owl">
    <?php foreach ($arr as $rows) {
     ?>
    <div class='timer-item item'>
        <div class="item-inner">
            <div class="images-container">
                <a href="detail.php?id=<?php echo $rows->id_product ?>" title="Fusce aliquam" class="product-image"><img src="public/frontend/<?php echo $rows->img_product ?>" alt="Fusce aliquam" /></a>
                <div class="box-timer">
                    <div class="countbox_1 timer-grid"></div>
                </div>
            </div>
            <div class="content-box">
                <h2 class="product-name"><a href="#" title="Fusce aliquam"><?php echo $rows->name_product ?></a></h2>
                <div class="price-box">
                    <?php 
                      $price =  $rows->price;
                       
                       $sale = $rows->sale;
                       $result = ($price * $sale) / 100;

                     ?>
                    <p class="special-price">
                        <span class="price-label"><?php echo $rows->name_product ?></span>
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
                    <span class="amount"><a href="#">1 Review(s)</a></span>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>