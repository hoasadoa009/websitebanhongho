<?php foreach ($arr as $rows) {
 ?>
<div class="products-grid">
    <div class="images-container">
        <a class="product-image" title="Accumsan elit " href="detail.php?id=<?php echo $rows->id_product ?>"><img alt="Accumsan elit " src="public/frontend/<?php echo $rows->img_product ?>"></a>
    </div>
    <div class="des-container">
        <h2 class="product-name"><a title="Accumsan elit " href="detail.php?id=<?php echo $rows->id_product ?>"><?php echo $rows->name_product ?> </a></h2>
        <div class="ratings">
            <div class="rating-box">
                <div style="width:67%" class="rating"></div>
            </div>
            <span class="amount"><a href="#">1 Review(s)</a></span>
        </div>
        <?php 
                      $price =  $rows->price;
                       
                       $sale = $rows->sale;
                       $result = ($price * $sale) / 100;

                     ?>
        <div class="price-box">
            <p class="special-price">
                <span class="price">$<?php echo $rows->price - $result ?></span>
            </p>
            <p class="old-price">
                <span class="price">$<?php echo $rows->price ?></span>
            </p>
        </div>
    </div>
</div>
<?php } ?>