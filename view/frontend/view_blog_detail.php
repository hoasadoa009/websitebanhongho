<?php 
	$id=($_GET["id"]) ? $_GET["id"] : 0;
	 $arr = $this->model->get_a_record("select * from news where id_news=$id");

 ?>
 <div class="blog-detail blog-list">
                            <div class="blog-image"><img src="public/frontend/blog/<?php echo $arr->img_news ?>" class="img-responsive" alt=""></div>
                            <div class="item">
                                <div class="item-inner">
                                    <h2 class="product-name"><a title="" href="#"><?php echo $arr->name_news ?></a></h2>
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
                                        <span><?php echo $arr->date_news ?></span>
                                    </div>
                                    <div class="desc">
                                        <p><?php echo $arr->description ?></p>
                                        <div class="well well-lg">
                                        <?php echo $arr->note ?> </div>
                                        
                                    </div>
                                    <div class="share-post">
                                        <span class="share-label">Share this post</span>
                                        <ul>
                                            <li class="color-facebook"><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                            <li class="color-twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
                                            <li class="color-pinterest"><a href="#"><span class="fa fa-pinterest"></span></a></li>
                                            <li class="color-gplus"><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                            <li class="color-linkedin"><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="title-group3">
                                <h3>Comments (3)</h3>
                            </div>
                            <div class="comment-list">
                                <div class="comment-item">
                                    <div class="media">
                                        <div class="media-left"><a href="#"><img src="images/avatar/avatar-04.jpg" alt=""></a></div>
                                        <div class="media-body">
                                            <div class="comment-date">12.5/2104</div>
                                            <div class="comment-title">Section 1.10.33 of "de Finibus Bonorum et Malorum"</div>
                                            Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. 
                                        </div>
                                    </div>
                                    <div class="comment-reply">
                                        <div class="media">
                                            <div class="media-left"><a href="#"><img src="images/avatar/avatar-04.jpg" alt=""></a></div>
                                            <div class="media-body">
                                                <div class="comment-date">12.5/2104</div>
                                                <div class="comment-title">1914 translation by H. Rackham</div>
                                                Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. 
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.commnent-item -->
                                <div class="comment-item">
                                    <div class="media">
                                        <div class="media-left"><a href="#"><img src="images/avatar/avatar-04.jpg" alt=""></a></div>
                                        <div class="media-body">
                                            <div class="comment-date">12.5/2104</div>
                                            <div class="comment-title">Section 1.10.33 of "de Finibus Bonorum et Malorum"</div>
                                            Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. 
                                        </div>
                                    </div>
                                </div><!-- /.comment-item -->
                            </div>
                            <hr>
                            <div class="title-group3">
                                <h3>Leave a reply</h3>
                            </div>
                            <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control input-md" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control input-md" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control input-md" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Your comment" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-default btn-lg">SUBMIT COMMENT</button>
                            </form>
                            <br>
                        </div>