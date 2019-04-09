
<div class="flexslider ma-nivoslider">
                                
                            <div class="ma-loading"></div>
                             <?php foreach ($arr as $rows) {
                                 ?>
                            <div id="ma-inivoslider-banner7" class="slides">
                              
                                <img src="public/frontend/slide/<?php echo $rows->big_img ?>" class="dn" alt="" title="#banner7-caption1"  />                           
                            </div>
                     

                            <div id="banner7-caption1" class="banner7-caption nivo-html-caption nivo-caption">
                                <div class="timethai"></div>
                    
                                <div class="banner7-content slider-1">
                                  
                                    <div class="title-container">

                                        <h1 class="title1"><?php echo $rows->big_content ?></h1>
                                        <h2 class="title2" >Typi non habent claritatem insitam; est usus legentis</h2>
                                    </div>
                               
                                    <div class="banner7-des">
                                        <div class="des">
                                            <h1>sale up to!</h1>
                                            <h2><?php echo $rows->sale ?>% off</h2>
                                        </div>
                                    </div>                                                                                              
                                    <img class="img1" src="public/frontend/slide/<?php echo $rows->small ?>" alt="" />

                                </div>

                            </div>                      
                             
                          <?php } ?>

                        </div><!-- /.flexslider -->
