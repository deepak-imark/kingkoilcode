
 <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2>OUR PRODUCTS</h2>
                    <ul class="menu_footer">
                        <li>
                            <a href="#">Silver</a>
                        </li>
                        <li>
                            <a href="#">Gold</a>
                        </li>
                        <li>
                            <a href="#">Bronze</a>
                        </li>
                        <li>
                            <a href="#">All</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h2>INFORMATION</h2>
                    <ul class="menu_footer">
                        <?php 
								$defaults = array(
								'theme_location'  => '',
								'menu'            => 'footer_menu',
								'container'       => '',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'menu',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '%3$s',
								'depth'           => 0,
								'walker'          => ''
								);

								wp_nav_menu( $defaults ); ?>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h2>SOCIAL MEDIA</h2>
                    <ul class="social">
                        <li>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="copyright">Copyright &copy; <?php echo date('Y');?> KingKoil </div>
            <div class="live_chat"><img src="<?php echo get_template_directory_uri(); ?>/images/chat_icon.png">start live chat</div>
        </div>
    </footer>
	<?php wp_footer(); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->

	<script src="<?php echo get_template_directory_uri(); ?>/js/html5lightbox.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/lightslider.js"></script>
    <script>
        jQuery(document).ready(function () {

            jQuery('#menu_trigger').click(function (e) {
                jQuery(this).toggleClass('switch');
                jQuery('#menu').toggleClass('open');
                jQuery('.menu_title').toggleClass('opened');
            });


        });
    </script>
	<script>
        jQuery(document).ready(function () {

            jQuery("#our_testim").owlCarousel({

                autoPlay: 3000, //Set AutoPlay to 3 seconds
                navigation: true,
                navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                items: 1,
                itemsDesktop: [1199, 1],
                itemsDesktopSmall: [979, 1],
                itemsTablet: [768, 1],
                itemsMobile: [479, 1]
            });


        });
    </script>
    <script>
       jQuery(document).ready(function () {

           jQuery("#testimonial").owlCarousel({

                autoPlay: false, //Set AutoPlay to 3 seconds
                items: 1,
                itemsDesktop: [1199, 1],
                itemsDesktopSmall: [979, 1]

            });

        });
    </script>
    <script>
        var wow = new WOW({
            boxClass: 'wow', // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset: 0, // distance to the element when triggering the animation (default is 0)
            mobile: true, // trigger animations on mobile devices (default is true)
            live: true, // act on asynchronously loaded content (default is true)
            callback: function (box) {
                // the callback is fired every time an animation is started
                // the argument that is passed in is the DOM node being animated
            },
            scrollContainer: null // optional scroll container selector, otherwise use window
        });
        wow.init();
    </script>
    <script>
        // grab the initial top offset of the navigation 
        var stickyNavTop = jQuery('body').offset().top;
        // our function that decides weather the navigation bar should have "fixed" css position or not.
        var stickyNav = function () {
            var scrollTop = jQuery(window).scrollTop(); // our current vertical position from the top

            // if we've scrolled more than the navigation, change its position to fixed to stick to top,
            // otherwise change it back to relative
            if (scrollTop > 10) {
                jQuery('header').addClass('sticky');
            } else {
                jQuery('header').removeClass('sticky');
            }

        };

        stickyNav();
        // and run it again every time you scroll
        jQuery(window).scroll(function () {
            stickyNav();
        });
</script>

	
	<script>
        jQuery(document).ready(function () {
           jQuery("#content-slider").lightSlider({
                loop: true,
                keyPress: true
            });
            jQuery('#image-gallery').lightSlider({
                gallery: true,
                item: 1,
                thumbItem: 9,
                slideMargin: 0,
                speed: 500,
                auto: true,
                loop: true,
                onSliderLoad: function () {
                    jQuery('#image-gallery').removeClass('cS-hidden');
                }
            });
        });
    </script>
	<script>
        jQuery(document).ready(function () {
           jQuery("#content-slider").lightSlider({
                loop: true,
                keyPress: true
            });
            jQuery('#image-gallery2').lightSlider({
                gallery: true,
                item: 1,
                thumbItem: 9,
                slideMargin: 0,
                speed: 500,
                auto: true,
                loop: true,
                onSliderLoad: function () {
                    jQuery('#image-gallery2').removeClass('cS-hidden2');
                }
            });
        });
    </script>
	<script>
        jQuery(document).ready(function () {
           jQuery("#content-slider").lightSlider({
                loop: true,
                keyPress: true
            });
            jQuery('#image-gallery3').lightSlider({
                gallery: true,
                item: 1,
                thumbItem: 9,
                slideMargin: 0,
                speed: 500,
                auto: true,
                loop: true,
                onSliderLoad: function () {
                    jQuery('#image-gallery3').removeClass('cS-hidden3');
                }
            });
        });
    </script>
</body>

</html>

