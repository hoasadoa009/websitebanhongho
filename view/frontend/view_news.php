<?php 
foreach ($arr as $rows) {
 ?>

                                    <div>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <a href="#"> <img alt="" src="public/frontend/blog/<?php echo $rows->img_news ?>" /> </a>
                                            </div>
                                            <div class="des-container">
                                                <div class="date-comments">
                                                    <div class="time"><span class="date"><?php echo $rows->date_news ?></span></div>
                                                </div>
                                                <div class="des">
                                                    <h4><a href="#" class="title-blog"><span><?php echo $rows->name_news; ?></span></a></h4> 
                                                    <?php echo $rows->short_description; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                               
                                   
 <?php } ?>