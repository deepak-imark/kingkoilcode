<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); 
global $post;
?>
<div class="banner inner_banner" style="background: url(<?php echo get_template_directory_uri(); ?>/images/product_banner.jpg);">
        <div class="container here">
            <div class="gold_prdcts">
			<?php
				$terms = get_the_terms( $post->ID , 'products_category' );
					foreach ( $terms as $term ) {			  
				
			?>
					<h2><?php echo $term->name; }?></h2>
			
                <h3>kk Club</h3>
                <p>Classic Mahogany French sleigh bed with high foot board and double scrolled arms having slatted base, this is one of newest ranges of solid mahogany bedroom furniture</p>
            </div>
        </div>
    </div>
    <section class="product_view">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                   <div class="product_diffr_view" id="brown_div">
                        <div class="demo">
                            <div class="item">
                                <div class="clearfix" style="max-width:474px;">
                                    <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                        <li data-thumb="<?php echo get_template_directory_uri(); ?>/images/thumb/cS-1.jpg">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cS-1.jpg" />
                                        </li>
                                        <li data-thumb="<?php echo get_template_directory_uri(); ?>/images/thumb/cS-2.jpg">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cS-2.jpg" />
                                        </li>
                                        <li data-thumb="<?php echo get_template_directory_uri(); ?>/images/thumb/cS-3.jpg">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cS-3.jpg" />
                                        </li>
                                        <li data-thumb="<?php echo get_template_directory_uri(); ?>/images/thumb/cS-4.jpg">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cS-4.jpg" />
                                        </li>

                                    </ul>
                                </div>
                            </div>


                        </div>

                    </div>
					
					 <div class="product_diffr_view" id="beize_div">
                        <div class="demo">
                            <div class="item">
                                <div class="clearfix" style="max-width:474px;">
                                    <ul id="image-gallery2" class="gallery list-unstyled cS-hidden2">
                                        <li data-thumb="<?php echo get_template_directory_uri(); ?>/images/thumb/cS-1.jpg">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cS-1.jpg" />
                                        </li>
                                        <li data-thumb="<?php echo get_template_directory_uri(); ?>/images/thumb/cS-2.jpg">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cS-2.jpg" />
                                        </li>
                                        <li data-thumb="<?php echo get_template_directory_uri(); ?>/images/thumb/cS-3.jpg">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cS-3.jpg" />
                                        </li>
                                        <li data-thumb="<?php echo get_template_directory_uri(); ?>/images/thumb/cS-4.jpg">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cS-4.jpg" />
                                        </li>

                                    </ul>
                                </div>
                            </div>


                        </div>

                    </div>
					<div class="product_diffr_view" id="grey_div">
                        <div class="demo">
                            <div class="item">
                                <div class="clearfix" style="max-width:474px;">
                                    <ul id="image-gallery3" class="gallery list-unstyled cS-hidden3">
                                        <li data-thumb="<?php echo get_template_directory_uri(); ?>/images/thumb/cS-1.jpg">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cS-1.jpg" />
                                        </li>
                                        <li data-thumb="<?php echo get_template_directory_uri(); ?>/images/thumb/cS-2.jpg">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cS-2.jpg" />
                                        </li>
                                        <li data-thumb="<?php echo get_template_directory_uri(); ?>/images/thumb/cS-3.jpg">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cS-3.jpg" />
                                        </li>
                                        <li data-thumb="<?php echo get_template_directory_uri(); ?>/images/thumb/cS-4.jpg">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/cS-4.jpg" />
                                        </li>

                                    </ul>
                                </div>
                            </div>


                        </div>

                    </div>

                </div>
                <div class="col-md-6">
                    <div class="color_option_div">
					<?php while (have_posts()) : the_post();?>
                        <h2><?php the_title();?></h2>
						<?php
							endwhile;
						?>
                        <p><?php the_field('description',$post->ID)?></p>
                        <div>
							<input type="button" value="select Colour">
						</div>
						<div>
							<button id="brown">Brown</button>
							<button id="beize">Beize</button>
							<button id="grey">Grey</button>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="product_specification">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h2>Product Benefits</h2>
                    <p>He best start to your day is a good night’s sleep. Our sturdy beds in different styles give you comfort and quality .</p>
                    <div class="table-responsive">
                        <p><?php the_field('description',$post->ID)?></p>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="spec_img"><img src="<?php echo get_template_directory_uri(); ?>/images/spec_img.png"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="tab_section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="tab_box">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Additional Information</a></li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Delivery and Returns</a></li>
                            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Reviews</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <h2>King Koil Club</h2>
                                <?php the_field('bottom_description',$post->ID);?>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <h2>Additional Information</h2>
                                <p>Classic Mahogany French sleigh bed with high foot board and double scrolled arms having slatted base, this is one of our newest ranges of solid mahogany bedroom furniture - elegant and serene. Add some charm and elegance to your bedroom in true traditional style with this solid mahogany sleigh bed. </p>
                                <p>Classic Mahogany French sleigh bed with high foot board and double scrolled arms having slatted base, this is one of our newest ranges of solid mahogany bedroom furniture - elegant and serene. Add some charm and elegance to your bedroom in true traditional style with this solid mahogany sleigh bed.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="messages">
                                <h2>Delivery and Returns</h2>
                                <p>Classic Mahogany French sleigh bed with high foot board and double scrolled arms having slatted base, this is one of our newest ranges of solid mahogany bedroom furniture - elegant and serene. Add some charm and elegance to your bedroom in true traditional style with this solid mahogany sleigh bed. </p>
                                <p>Classic Mahogany French sleigh bed with high foot board and double scrolled arms having slatted base, this is one of our newest ranges of solid mahogany bedroom furniture - elegant and serene. Add some charm and elegance to your bedroom in true traditional style with this solid mahogany sleigh bed.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="settings">
                                <h2>Reviews</h2>
                                <p>Classic Mahogany French sleigh bed with high foot board and double scrolled arms having slatted base, this is one of our newest ranges of solid mahogany bedroom furniture - elegant and serene. Add some charm and elegance to your bedroom in true traditional style with this solid mahogany sleigh bed. </p>
                                <p>Classic Mahogany French sleigh bed with high foot board and double scrolled arms having slatted base, this is one of our newest ranges of solid mahogany bedroom furniture - elegant and serene. Add some charm and elegance to your bedroom in true traditional style with this solid mahogany sleigh bed.</p>
                            </div>
                        </div>


                    </div>
                    <div class="newsletter">
                        <div class="signup_info">
                            <div class="mail_icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                            <div class="sign_info">
                                <h4>Sign up for our latest deals and offers</h4>
                                <p>To subscribe just enter your email address and press sign up.</p>
                            </div>
                        </div>
                        <div class="email_Section">
                            <input type="text" value="" placeholder="Your email address">
                            <button>sign up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<script>
		jQuery(document).ready(function () {
			setTimeout(function(){
					jQuery('#grey_div').hide();
			jQuery('#beize_div').hide();
			}, 3000);
		
            jQuery('#brown').click(function(){
				alert("hello");
				jQuery('#brown_div').hide();
				jQuery('#grey_div').show();
			});
		});
	</script>
<?php get_footer(); ?>
