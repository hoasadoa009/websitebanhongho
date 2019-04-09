<div class="catlist">
            <div class="container">
                <div class="title-group1">
                    <h2>Top danh mục</h2>
                </div> 
                <div class="row">
                    <?php include "controller/frontend/controller_topcategory.php" ?>
                    
                </div>
            </div>
        </div><!-- /.catlist -->
        
        <div class="brands">
            <div class="container">
                <div class="title-group1">
                    <h2>thương hiệu nổi tiếng</h2>
                </div>
                <div id="brands" class="owl-container">
                    <div class="owl">
                    <?php include "controller/frontend/controller_topbrand.php" ?>
                        
                    </div>
                </div><!-- /#brands -->
            </div>
        </div><!-- /.brands -->
        
        <div class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 hidden-sm hidden-xs">
                            <div class="subscribe">
                                <div class="subscribe-inner">
                                    <h3>đăng kí nhận tin</h3>
                                    Nhận những thông tin mới nhất từ cửa hàng
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-8">
                            <form method="post" class="form-inline form-subscribe">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter your email address" class="form-control" id="newsletter" name="email">
                                </div>
                                <button class="btn btn-danger" title="Subscribe" type="submit">Subscribe</button>
                            </form>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <ul class="social">
                                <li><a href="#" class="face">face</a></li>
                                <li><a href="#" class="google">google</a></li>
                                <li><a href="#" class="twitter">twitter</a></li>
                                <li><a href="#" class="youtube">youtube</a></li>
                                <li><a href="#" class="linkedin">linkedin</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- /.footer-top -->
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="footer-title">
                                <h2>contact us</h2>
                            </div>
                            <div class="footer-content">
                                <div class="email add">
                                    <p>Support@plazathemes.com</p>
                                </div>
                                <div class="phone add">
                                    <p>(800) 0123 456 789</p>
                                </div>
                                <div class="address add">Address: 
                                    <p>1234 - Bandit Tringi lAliquam Vitae. New York</p>
                                </div>
                                <div class="contact-link">
                                    <a href="https://www.google.com/maps" target="_bland" class="btn btn-default">Open in Google Maps</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="footer-title">
                                <h2>MY ACCOUNT</h2>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Your Account</a></li>
                                    <li><a href="#">Advanced Search</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="footer-title">
                                <h2>Payment &amp; Shipping</h2>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Payment Methods</a></li>
                                    <li><a href="#">Shipping Guide</a></li>
                                    <li><a href="#">Locations We Ship To</a></li>
                                    <li><a href="#">Estimated Delivery Time</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="footer-title">
                                <h2>Customer Service</h2>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li><a href="#">Shipping Policy</a></li>
                                    <li><a href="#">Compensation First</a></li>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Return Policy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d29794.690934923467!2d105.79108280000857!3d21.01922301599559!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1548746894894" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="copy">Copyright &copy; 2015 Plazathemes. All Rights Reserved</div>
                        </div>
                        <div class="col-sm-6">
                            <div class="payment"><img src="images/payment.png" alt="" class="img-responsive"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.footer -->
        
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <!-- Latest compiled and minified JS -->
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.nivo.slider.pack.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.bxslider.min.js"></script>
        <script src="js/cloud-zoom.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/main.js"></script>
        <script type="text/javascript">
            /* Main Slideshow */
            $(window).load(function() {
                $(document).off('mouseenter').on('mouseenter', '.pos-slideshow', function(e){
                    $('.ma-banner7-container .timethai').addClass('pos_hover');
                });
                $(document).off('mouseleave').on('mouseleave', '.pos-slideshow', function(e){
                    $('.ma-banner7-container .timethai').removeClass('pos_hover');
                });
            });
            $(window).load(function() {
                $('#ma-inivoslider-banner7').nivoSlider({
                    effect: 'random',
                    slices: 15,
                    boxCols: 8,
                    boxRows: 4,
                    animSpeed: 1000,
                    pauseTime: 6000,
                    startSlide: 0,
                    controlNav: false,
                    controlNavThumbs: false,
                    pauseOnHover: true,
                    manualAdvance: false,
                    prevText: 'Prev',
                    nextText: 'Next',
                    afterLoad: function(){
                        },     
                    beforeChange: function(){ 
                    }, 
                    afterChange: function(){ 
                    }
                });
            });
            $(document).ready(function(){
                /* timely-owl */
                $("#timely-owl .owl").owlCarousel({
                    autoPlay : false,
                    items : 1,
                    itemsDesktop : [1199,1],
                    itemsDesktopSmall : [991,1],
                    itemsTablet: [767,2],
                    itemsMobile : [480,1],
                    slideSpeed : 1000,
                    paginationSpeed : 1000,
                    rewindSpeed : 1000,
                    navigation : true,
                    stopOnHover : true,
                    pagination : false,
                    scrollPerPage:true,
                });
                /* special-offer slider */
                $("#special-offer .owl").owlCarousel({
                    autoPlay : false,
                    items : 1,
                    itemsDesktop : [1199,1],
                    itemsDesktopSmall : [991,1],
                    itemsTablet: [767,2],
                    itemsMobile : [480,1],
                    slideSpeed : 3000,
                    paginationSpeed : 3000,
                    rewindSpeed : 3000,
                    navigation : true,
                    stopOnHover : true,
                    pagination : false,
                    scrollPerPage:true,
                });
                /* latest-news slider */
                $("#latest-news .owl").owlCarousel({
                    autoPlay : false,
                    items : 1,
                    itemsDesktop : [1199,1],
                    itemsDesktopSmall : [991,1],
                    itemsTablet: [767,2],
                    itemsMobile : [480,1],
                    slideSpeed : 1000,
                    paginationSpeed : 1000,
                    rewindSpeed : 1000,
                    navigation : true,
                    stopOnHover : true,
                    pagination : false,
                    scrollPerPage:true,
                });
                /* clients-say slider */
                $("#clients-say .owl").owlCarousel({
                    autoPlay : false,
                    items : 1,
                    itemsDesktop : [1199,1],
                    itemsDesktopSmall : [991,1],
                    itemsTablet: [767,2],
                    itemsMobile : [480,1],
                    slideSpeed : 3000,
                    paginationSpeed : 3000,
                    rewindSpeed : 3000,
                    navigation : true,
                    stopOnHover : true,
                    pagination : false,
                    scrollPerPage:true,
                });
                /* featured-products slider */
                $("#featured-products .owl").owlCarousel({
                    autoPlay : false,
                    items : 4,
                    itemsDesktop : [1199,3],
                    itemsDesktopSmall : [991,2],
                    itemsTablet: [767,2],
                    itemsMobile : [480,1],
                    slideSpeed : 3000,
                    paginationSpeed : 3000,
                    rewindSpeed : 3000,
                    navigation : true,
                    stopOnHover : true,
                    pagination : false,
                    scrollPerPage:true,
                });
                /* new-products slider */
                $("#new-products .owl").owlCarousel({
                    autoPlay : false,
                    items : 4,
                    itemsDesktop : [1199,3],
                    itemsDesktopSmall : [991,2],
                    itemsTablet: [767,2],
                    itemsMobile : [480,1],
                    slideSpeed : 3000,
                    paginationSpeed : 3000,
                    rewindSpeed : 3000,
                    navigation : true,
                    stopOnHover : true,
                    pagination : false,
                    scrollPerPage:true,
                });
                $("#special-offer .owl").owlCarousel({
                    autoPlay : false,
                    items : 1,
                    itemsDesktop : [1199,1],
                    itemsDesktopSmall : [991,1],
                    itemsTablet: [767,2],
                    itemsMobile : [480,1],
                    slideSpeed : 3000,
                    paginationSpeed : 3000,
                    rewindSpeed : 3000,
                    navigation : true,
                    stopOnHover : true,
                    pagination : false,
                    scrollPerPage:true,
                });
                /* featured-products slider */
                $("#featured-products .owl").owlCarousel({
                    autoPlay : false,
                    items : 4,
                    itemsDesktop : [1199,3],
                    itemsDesktopSmall : [991,2],
                    itemsTablet: [767,2],
                    itemsMobile : [480,1],
                    slideSpeed : 3000,
                    paginationSpeed : 3000,
                    rewindSpeed : 3000,
                    navigation : true,
                    stopOnHover : true,
                    pagination : false,
                    scrollPerPage:true,
                });
                /* .thumbnail-container product image slider */
                $('.thumbnail-container .bxslider').bxSlider({
                    slideWidth: 94,
                    slideMargin: 5,
                    minSlides: 4,
                    maxSlides: 4,
                    pager: false,
                    speed: 500,
                    pause: 3000
                });
                /* recent-post slider */
                $("#recent-post .owl").owlCarousel({
                    autoPlay : false,
                    items : 1,
                    itemsDesktop : [1199,1],
                    itemsDesktopSmall : [991,1],
                    itemsTablet: [767,2],
                    itemsMobile : [480,1],
                    slideSpeed : 3000,
                    paginationSpeed : 3000,
                    rewindSpeed : 3000,
                    navigation : true,
                    stopOnHover : true,
                    pagination : false,
                    scrollPerPage:true,
                });
            });
        </script>
        
        <!-- Hot Deals Timer 1-->
        <script type="text/javascript">
            var dthen1 = new Date("12/25/33 11:59:00 PM");
            start = "08/04/15 03:02:11 AM";
            start_date = Date.parse(start);
            var dnow1 = new Date(start_date);
            if(CountStepper>0)
                ddiff= new Date((dnow1)-(dthen1));
            else
                ddiff = new Date((dthen1)-(dnow1));
            gsecs1 = Math.floor(ddiff.valueOf()/1000);
            
            var iid1 = "countbox_1";
            CountBack_slider(gsecs1,"countbox_1", 1);
        </script>
        <!-- Hot Deals Timer 2-->
        <script type="text/javascript">
            var dthen2 = new Date("05/21/26 11:59:00 PM");
            start = "08/04/15 03:02:11 AM";
            start_date = Date.parse(start);
            var dnow2 = new Date(start_date);
            if(CountStepper>0)
                ddiff= new Date((dnow2)-(dthen2));
            else
                ddiff = new Date((dthen2)-(dnow2));
            gsecs2 = Math.floor(ddiff.valueOf()/1000);
            
            var iid2 = "countbox_2";
            CountBack_slider(gsecs2,"countbox_2", 2);
        </script>
        <!-- Hot Deals Timer 3-->
        <script type="text/javascript">
            var dthen3 = new Date("05/21/33 11:59:00 PM");
            start = "08/04/15 03:02:11 AM";
            start_date = Date.parse(start);
            var dnow3 = new Date(start_date);
            if(CountStepper>0)
                ddiff= new Date((dnow3)-(dthen3));
            else
                ddiff = new Date((dthen3)-(dnow3));
            gsecs3 = Math.floor(ddiff.valueOf()/1000);
            
            var iid3 = "countbox_3";
            CountBack_slider(gsecs3,"countbox_3", 3);


        </script>
        <script type="text/javascript">
            /* slider price */
                var currencies = "$";
                var toolbar_status = "1";
                var rate = "1";
                var min = "99"
                    min = Number(min);
                var max = "999"
                    max = Number(max);
                var currentMinPrice = "99"
                    currentMinPrice = Number(currentMinPrice);
                var currentMaxPrice = "999"
                //alert('min: '+min+'--max: '+ max+ 'currentMin: '+currentMinPrice);
                currentMaxPrice = Number(currentMaxPrice);
                var params = "";
                params = $.trim(params);
                //slider
                $( "#slider-range" ).slider({
                    range: true,
                    min: min,
                    max: max,
                    values: [ currentMinPrice, currentMaxPrice ],
                    slide: function( event, ui ) {
                        $( "#amount" ).val( currencies + ui.values[ 0 ] + " - "+ currencies + ui.values[ 1 ] );
                        $('input[name="first_price"]').val(ui.values[0]);
                        $('input[name="last_price"]').val(ui.values[1]);
                    },
                    stop: function( event, ui ) {
                    }
                });
        
                $( "#amount" ).val( currencies + $( "#slider-range" ).slider( "values", 0 ) +
                    " - "+currencies + $( "#slider-range" ).slider( "values", 1 ) );
                $('input[name="first_price"]').val($( "#slider-range" ).slider( "values", 0 ));
                $('input[name="last_price"]').val($( "#slider-range" ).slider( "values", 1 ));   
                 
                //search price from input box
                $('#search_price').each(function(){
                    $(this).live('click',function(){
                        return false;
                    })
                });
                $('#slider-range a:first').addClass('first_item');
                $('#slider-range a:last').addClass('last_item');
        </script>
        <script type="text/javascript">
            if($(location).attr('pathname') !== '/galio/index.php') {
                $('.mega-menu-category').hide();
            }
        </script>

        <script type="text/javascript">
            $(document).ready(function(){

                // $(document).on('click', '.btndown', function() {
                    
                //         console.log(111);
                //     $.get("cart.php?controller=cart&act=down").function(data){
                //         console.log(data);
                //     }
                // });
                $('.btndown').click(function() {
                    // $.get("cart.php?controller=cart&act=down",function(data, status){
                    //     console.log(data);
                    // });
                    var t = $(this);
                    var id = $(this).attr('data-id');
                    
                    var n = t.parent().next('input').val();
                    if (n > 0) {
                        $.ajax({
                            type: "GET",
                            url: 'ajax.php',
                            data: {'controller': 'cart', 'act': 'down', 'id': $(this).attr('data-id')},
                            success: function(data){
                                // console.log(data);
                                t.parent().next('input').val(n - 1);
                                $('#money').text("$" + data);
                                $("p[data-id='" + id +"']").text("$" + data);
                                
                            }
                        });
                    }
                });
                $('.btnup').click(function() {
                    // $.get("cart.php?controller=cart&act=down",function(data, status){
                    //     console.log(data);
                    // });
                    var t = $(this);
                    var id = $(this).attr('data-id');
                    var n = t.parent().prev('input').val();
                    
                        $.ajax({
                            type: "GET",
                            url: 'ajax.php',
                            data: {'controller': 'cart', 'act': 'up', 'id': $(this).attr('data-id')},
                            success: function(data){
                                // console.log(data);
                                t.parent().prev('input').val(n - (-1));
                                $("p[data-id='" + id +"']").text("$" + data);
                            }
                        });
                    
                });
            });
        </script>
    </body>
</html>