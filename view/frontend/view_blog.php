<?php foreach ($arr as $rows) {
?>
<li class="item">
                                <div class="item-inner">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="images-container">
                                                <a class="product-image" title="Fusce aliquam" href="blog-detail.php?id=<?php echo $rows->id_news ?>" rel="author"><img alt="Fusce aliquam" src="public/frontend/blog/<?php echo $rows->img_news ?>"></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <h2 class="product-name"><a title="" href="blog-detail.php?id=<?php echo $rows->id_news ?>"><?php echo $rows->name_news ?></a></h2>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:67%" class="rating"></div>
                                                </div>
                                                <span class="amount"><a href="#">1 Review(s)</a></span>
                                                <span class="separator">|</span>
                                                <span class="comment-amount"><a href="#">4 comment</a></span>
                                            </div>
                                            <div class="blog-attr">
                                                <span>Post by <a href="#">Admin</a></span>
                                                <span class="separator">|</span>
                                                <span><?php echo $rows->date_news ?></span>
                                            </div>
                                            <div class="desc">
                                               <?php echo $rows->short_description ?>
                                            </div>
                                            <a href="blog-detail.php?id=<?php echo $rows->id_news ?>" class="btn btn-default btn-readmore">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php } ?>