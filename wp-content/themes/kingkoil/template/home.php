<?php 
/* Template Name:  home

*/ 
get_header();

?>
<?php
	$banner=get_post_meta(4,"banner_image",true);
	$thumb = wp_get_attachment_image_src($banner, 'inner_banner' );	
?>
<div class="banner" style="background: url(<?php echo $url = $thumb['0'];?>);">
        <div class="caption">
            <h2><?php the_field('banner_heading',4);?></h2>
            <p><?php the_field('banner_heading_subtitle',4);?></p>
        </div>
        <div class="container here">
            <a class="here_btn hvr-grow-shadow" href="<?php the_field('banner_button_link',4);?>"><?php the_field('banner_button_text',4);?></a>
        </div>
    </div>
    <section class="welcome">
        <div class="container">
            <h2><?php the_field('welcome_title',4);?></h2>
            <p><?php the_field('welcome_content',4);?></p>
        </div>
    </section>
    <section class="welcome_video">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="wlcm_txt">
                        <hr>
                        <h2><?php the_field('welcome_video_title',4);?></h2>
                        <p><?php the_field('welcome_video_content',4);?></p>
                        <a class="see_btn hvr-pulse-grow  href="<?php the_field('welcome_video',4);?>" ><?php the_field('welcome_video_button',4);?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="video">
                       <a class="html5lightbox" data-height="400" data-width="800" href="<?php the_field('welcome_video',4);?>"><img src="<?php echo get_template_directory_uri(); ?>/images/video_screenshot.jpg"/></a>
					</div>
                </div>
                <div class="col-md-3">
                    <div class="about_txt">
                        <hr>
                        <h2><?php the_field('about_king_koil_title',4);?></h2>
                        <?php the_field('about_kingkoil_content',4);?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our_product">
        <div class="left-section">
            <?php
				$product=get_post_meta(4,"our_product_image",true);
				$thumb = wp_get_attachment_image_src($product, 'product_image' );	
			?>
							<img src="<?php echo $url = $thumb['0'];?>">
            <div class="product_info">
                <h2><?php the_field('our_products_title',4);?></h2>
                <p><?php the_field('our_products_content',4);?></p>
                <a class="point_out hvr-buzz-out" href="<?php echo site_url();?>/product"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow_icon.png"></a>
            </div>
        </div>
        <div class="right-section">
            <div class="left_part">
                <a class="top" href="<?php echo site_url();?>/product/#bronze">
                <?php
					$product=get_post_meta(4,"bronze_category_image",true);
					$thumb = wp_get_attachment_image_src($product, 'bronze_image' );	
				?>
					<img src="<?php echo $url = $thumb['0'];?>">
                    <div class="heading">
                        <h2><?php the_field('bronze_category_heading',4);?></h2>
                        <p><?php the_field('bronze_category_text',4);?></p>
                    </div>
                </a>
                <a class="bottom" href="<?php echo site_url();?>/product/#gold">
				<?php
					$product=get_post_meta(4,"gold_category_image",true);
					$thumb = wp_get_attachment_image_src($product, 'gold_image' );	
				?>
					<img src="<?php echo $url = $thumb['0'];?>">
                    <div class="heading3">
                        <h2><?php the_field('gold_category_heading',4);?></h2>
                        <p><?php the_field('gold_category_text',4);?></p>
                    </div>
                </a>
            </div>
            <div class="right_part">
                <a class="top" href="<?php echo site_url();?>/product/#silver">
                <?php
					$product=get_post_meta(4,"silver_category_image",true);
					$thumb = wp_get_attachment_image_src($product, 'silver_image' );	
				?>
					<img src="<?php echo $url = $thumb['0'];?>">
                    <div class="heading2">
                        <h2><?php the_field('silver_category_heading',4);?></h2>
                        <p><?php the_field('silver_category_text',4);?></p>
                    </div>
                </a>
                <a class="bottom" href="<?php echo site_url();?>/product">
                <?php
					$product=get_post_meta(4,"all_category_image",true);
					$thumb = wp_get_attachment_image_src($product, 'all_image' );	
				?>
					<img src="<?php echo $url = $thumb['0'];?>">
                    <div class="heading4">
                        <h2><?php the_field('all_category_heading',4);?></h2>
                        <p><?php the_field('all_category_text',4);?></p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="our_Services">
        <div class="container">
            <div class="row">
                <div class="col-md-6 pull-right">
                    <div class="service">
                        <h2><?php the_field('our_services_heading',4);?></h2>
                        <p class="tg">nascetur ridiculus mus. Integer arcu sem, vulputate et eros cursus, vulputate vestibulum diam. </p>
                        <a class="service_block" href="javascript:void(0)">
                            <div class="icon"></div>
                            <div class="info">
                                <h3><?php the_field('product_design_title',4);?></h3>
                                <p><?php the_field('product_design_content',4);?></p>

                            </div>
                        </a>
                    </div>

                    <a class="service_block" href="javascript:void(0)">
                        <div class="icon2"></div>
                        <div class="info">
                            <h3><?php the_field('delivery_&_installation_title',4);?></h3>
                            <p><?php the_field('delivery_&_installation_content',4);?></p>

                        </div>
                    </a>


                    <a class="service_block" href="javascript:void(0)">
                        <div class="icon3"></div>
                        <div class="info">
                            <h3><?php the_field('after_sales_title',4);?></h3>
                            <p><?php the_field('after_sales_content',4);?></p>

                        </div>
                    </a>

                </div>
            </div>
    </section>
    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>Testimonials</h2>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer arcu sem, vulputate et
                        <br> eros cursus, vulputate vestibulum diam.</p>
                    <div class="testim">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="testim_video">
                                    <iframe width="420" height="315" src="<?php the_field('home_testimonial_video',4)?>" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id="testimonial">
								<?php
								$args = array('post_type'      => 'Testimonial_slider',
								'posts_per_page' => 5,
								'order' => 'desc'
								);
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
								?>
                                    <div class="item">
                                        <div class="testim-box">
                                            <?php the_content();?>
                                            <p><?php the_title();?></p>
										</div>
                                        <h4><?php the_field('testinonial_slider_desg',$loop->ID);?></h4>
                                    </div>
									<?php
									endwhile;
									?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trip">
        <div class="container">
            <h2>Trip advisor quotes</h2>
            <p>“ Ut luctus justo quis orci euismod scelerisque. Praesent ut maximus augue. In iaculis pellentesque nisl. Fusce id nulla aliquam, finibus lorem nec, blandit arcu. Nam consectetur consequat ex eget dictum. Mauris in arcu feugiat, cursus metus molestie, tempor eros. Duis sollicitudin nunc lacus, vitae luctus turpis volutpat sed. Donec in fringilla risus. Integer nec accumsan ex. Nullam porta scelerisque pretium ” </p>
            <div class="trip_logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/trip_advisor_logo.png">
            </div>
        </div>
    </section>
    <section class="browse_blogs">
        <div class="container">
            <h2>Browse through the Blogs</h2>
            <div class="row">
						<?php
							  $args = array('post_type'=> 'post',
							  'posts_per_page' => 3,
							  'order'          => 'DESC');
							  $loop = new WP_Query( $args );
							  while ( $loop->have_posts() ) : $loop->the_post();
						?>
                <div class="col-md-4">
                    <div class="blog_box">
					<?php
											if(has_post_thumbnail())
											{
											?>
                        <a href="<?php the_permalink();?>"><?php the_post_thumbnail(array(305,186));?></a>
						<?php }
						else{?>
						<a href="<?php the_permalink();?>" title=""><img src="http://i.imgur.com/C2fMPsJ.jpg" width="660" height="306"></a>
						<?php } ?>
                        <a href="<?php the_permalink();?>"><?php the_title();?></a>
                        <p><?php the_content();?></p>
                    </div>
                </div>
				<?php
				endwhile;
				?>
            </div>
            <a class="see_more_btn hvr-float-shadow" href="<?php echo site_url();?>/blog">See More</a>
        </div>
    </section>

<?php
get_footer();
?>
