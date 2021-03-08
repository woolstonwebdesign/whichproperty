<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    
<div id="content" >
    <section>
    
        <div class="heroSlider">
			<?php if(get_field('hero_slider')) : ?>
                <ul>
                <?php while(the_repeater_field('hero_slider')): ?>
                <li>
                	<img src="<?php the_sub_field('hero_image'); ?>" />
                	<div class="contain"><?php if(get_sub_field('heading')) { ?><div class="wrap">
                    	<h1><?php the_sub_field('heading'); ?></h1>
                        <p><?php the_sub_field('copy'); ?></p>
                    </div><?php  } ?></div>
                </li>
				<?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
        
        <div class="wrapper">
        	<div class="feature">
			<?php if(get_field('gallery')) : ?>
                <ul class="mainImage">
                <?php while(the_repeater_field('gallery')): ?>
                	<li>
					<?php 
                    
                    $image = get_sub_field('image');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    
                    if( $image ) {
                    
                        echo wp_get_attachment_image( $image, $size );
                    
                    }
                    
                    ?>  
                    </li>                  
				<?php endwhile; ?>
                </ul>
			<?php endif; ?>
			<?php if(get_field('gallery')) : ?>
                <ul class="thumb">
                <?php while(the_repeater_field('gallery')): ?>
                	<li>
					<?php 
                    
                    $image = get_sub_field('image');
                    $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
                    
                    if( $image ) {
                    
                        echo wp_get_attachment_image( $image, $size );
                    
                    }
                    
                    ?>                    
					</li>
				<?php endwhile; ?>
                </ul>
			<?php endif; ?>
                <h2 class="clear"><?php the_field('header'); ?></h2>
                <h3><?php the_field('sub_header'); ?></h3>
                <?php the_field('content'); ?>
                <a href="<?php the_field('link'); ?>">More ></a>
            </div>
        </div>

        <div class="testimonial">
        	<div class="wrapper">
            	<h2 class="icon people"><strong><?php the_field('bold_testimonial_heading'); ?></strong> <?php the_field('normal_testimonial_heading'); ?></h2>
            	<p><strong><?php the_field('source'); ?></strong></p>
            	<p><?php the_field('testimonial'); ?></p>
            </div>
        </div>
        
        <div class="newsList">
            <div class="wrapper">
            	<h2 class="icon news"><strong><?php the_field('bold_news_heading'); ?></strong> <?php the_field('normal_news_heading'); ?></h2>
			<?php if(get_field('news_list')) : ?>
                <ul>
                <?php while(the_repeater_field('news_list')): ?>
                    
                    <?php
					$post_object = get_sub_field('news');
					if($post_object):
						$post  = $post_object;
						setup_postdata($post);
					?>				
                    <li>
                        <?php the_post_thumbnail() ?>
                        <div class="copy">
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>">More ></a>
                        </div>                            
                    </li>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
                    
				<?php endwhile; ?>
                
                    <li class="subscribe">
                    	<img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/icon-news-white.png" />
                        <p><strong>Stay Informed</strong><br/>Subscribe<br/>to our<br/>e-Newsletter</p>
                        <?php the_field('form_embed'); ?>
                    </li>
                </ul>
            <?php endif; ?>
            </div>
        </div>
        <?php if(get_field('social_feed')) { ?>
        <div class="social">
        	<div class="wrapper">
            	<h2 class="icon mobile"><strong>What's trending</strong> in Social Media</h2>
                <?php the_field('social_feed'); ?>
                <div class="socialFeeds">
                    <h3>Stay informed and <strong>follow us</strong> on social media</h3>
                    <?php wp_nav_menu( array(
                        'theme_location' => 'social-menu',
                        'container' => false, 
                        'items_wrap' => '<ul>%3$s</ul>',
                    )); /* editable within the Wordpress backend */ ?>
                </div>
            </div>
        </div>
		<?php } ?>

        <div class="filter">
        	<div class="wrapper">
            	<h2><strong>WHICH PROPERTY</strong> is the perfect fit for you?</h2>
				<?php echo do_shortcode( '[searchandfilter post_types="projects" taxonomies="locations,bedrooms,1_bedroom,2_bedrooms,3_bedrooms,4_bedrooms"]' ); ?>
            </div>
        </div>

		<?php if(get_field('property_list')) : ?>
		<?php while(the_repeater_field('property_list')): ?>
        <div class="property">
        	<div class="wrapper">
            	<h2><strong><?php the_sub_field('bold_heading'); ?></strong> <?php the_sub_field('normal_heading'); ?></h2>
				<?php if(get_sub_field('properties')) : ?>
                    <ul>
                    <?php while(the_repeater_field('properties')): ?>
                        
                        <?php
                        $post_object = get_sub_field('property');
                        if($post_object):
                            $post  = $post_object;
                            setup_postdata($post);
                            
                            $variable = get_field('content', $post->ID);
                            $excerpt_length = 30; // 20 words
                            $excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
                            $variable = wp_trim_words( $variable, $excerpt_length, $excerpt_more );					
                        ?>				
                        <li>
                            <?php the_post_thumbnail() ?>
                            <div class="copy">
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo $variable ?></p>
                                <a href="<?php the_permalink(); ?>">More ></a>
                            </div>                            
                        </li>
                        <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                        
                    <?php endwhile; ?>
				</ul>
                <?php endif; ?>
                <div class="clear">
                <?php 
					$term_id =  get_sub_field('link');
					$term_link = get_term_link( $term_id, 'area' );
				?>
                	<a class="icon eye" href="<?php echo $term_link ?>"><strong>See All</strong> <?php the_sub_field('bold_heading'); ?> <?php the_sub_field('normal_heading'); ?></a>
                </div>
            </div>
        </div>
		<?php endwhile; ?>
        <?php endif; ?>
        
    </section>
</div>
    
<?php endwhile; ?>
    
<?php get_footer(); ?>