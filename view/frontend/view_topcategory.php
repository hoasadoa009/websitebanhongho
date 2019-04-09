<?php foreach ($arr as $rows) {
 ?>
<div class="col-md-3 col-sm-6">
    <div class="row">
        <div class="col-xs-6">
            <div class="image-cat">
                <a href="detail.php?id=<?php echo $rows->id_category_brand ?>"><img alt="Electronic" src="public/frontend/img_category_product/<?php echo $rows->img_category_brand ?>"></a>
            </div>
        </div>
        <div class="col-xs-6">
            <div class="name-cat"><h3><?php echo $rows->name_category_brand ?></h3></div>
            <a class="view-more" href="detail.php?id=<?php echo $rows->id_category_brand ?>">view more</a>
        </div>
    </div>
    <div class="list-cat">
        <ul>
            <li><a href="#">Đồng hồ</a></li>
            <li><a href="#">Dây đeo</a></li>
            <li><a href="#">Mặt kính</a></li>
            <li><a href="#">Phụ kiện</a></li>
        </ul>
    </div>
 </div>
<?php } ?>              