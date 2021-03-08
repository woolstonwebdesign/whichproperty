<?php /* Template Name: Property */ ?>
<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    
<div id="content" class="propertyDetails">
    <section>
    
        <div class="heroSlider">
            <ul>
                <li>
                	<img src="<?php the_field('hero_image'); ?>" />
                	<div class="contain">
                        <div class="wrap">
                            <?php if(get_field('hero_logo')) { ?><img src="<?php the_field('hero_logo'); ?>" /><?php } ?>
                        </div>
                        <a class="back" href="/"><img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/back.png" /></a>
                    </div>
                </li>
            </ul>
        </div>

		<div class="container">
			<div class="wrapper">
            	<div class="col">
                    <h2><?php the_field('header'); ?></h2>
                    <h3><?php the_field('sub_header'); ?></h3>
					<?php the_field('content'); ?>
                    <h4><?php the_field('list_heading'); ?></h4>
					<?php if(get_field('list')) : ?>
                        <ul class="split">
                        <?php while(the_repeater_field('list')): ?>
                            <li><?php the_sub_field('list_item'); ?></li>
						<?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="col">
				<?php if(get_field('slider')) : ?>
                    <div class="heroSliderSm">
                    <?php while(the_repeater_field('slider')): ?>
                        <img src="<?php the_sub_field('image'); ?>" />
					<?php endwhile; ?>
                    </div>
                <?php endif; ?>
        
                    <div class="filter">
                        <div class="wrapper">
                            <img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/icon-inspect.png" />
                             <h2><strong>Information</strong> about this property</h2>
                             <p>Contact us to arrange an exclusive<br/>property inspection time.</p>
							<?php the_field('form_embed'); ?>
                        </div>
					</div>
                    
                </div>
			</div>
        </div>

		<?php if(get_field('availability')) : ?>
        <div class="availability">
        	<div class="wrapper">
                <h2><strong><?php the_field('availability_bold_heading'); ?></strong> <?php the_field('availability_normal_heading'); ?></h2>
				<?php while(the_repeater_field('availability')): ?>
                <div class="apt">
                    <img src="<?php the_sub_field('image'); ?>" />
                    <div class="info">
                    	<span class="icon bed"><?php the_sub_field('bed'); ?></span>
                    	<span class="icon car"><?php the_sub_field('car'); ?></span>
                    	<span class="icon price"><?php the_sub_field('price'); ?></span>
                        <p><?php the_sub_field('copy'); ?></p>
                    </div>
                </div>
				<?php endwhile; ?>
            </div>
        </div>
		<?php endif; ?>

        <div class="metas">
            <div class="wrapper">
                <div class="col address">
					<?php if(get_field('details')) : ?>
                    <table>
						<?php while(the_repeater_field('details')): ?>
                        <tr>
                            <td><?php the_sub_field('title'); ?></td>
                            <td><?php the_sub_field('info'); ?></td>
                        </tr>
						<?php endwhile; ?>
                    </table>
					<?php endif; ?>
                    <div class="shares">
                    <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
                    </div>
                </div>
                <div class="col location">
                    <h2>Location</h2>
<a target="_blank" href="<?php the_field('map_embed'); ?>"><img src="<?php the_field('map'); ?>" /></a>
                </div>
                <div class="col star">
                    <h2>Star Rating</h2>
					<?php if(get_field('rating')) : ?>
                    <table>
						<?php while(the_repeater_field('rating')): ?>
                        <tr>
                            <td><?php the_sub_field('title'); ?></td>
                            <td>
                            <?php if(get_sub_field('star') == "1") { ?>
								<img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/star.png" />
							<?php } else if(get_sub_field('star') == "1.5") { ?>
								<img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/star.png" /><img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/star-half.png" />
							<?php } else if(get_sub_field('star') == "2") { ?>
								<img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/star.png" /><img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/star.png" />
							<?php } else if(get_sub_field('star') == "2.5") { ?>
								<img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/star.png" /><img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/star.png" /><img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/star-half.png" />
							<?php } else if(get_sub_field('star') == "3") { ?>
								<img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/star.png" /><img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/star.png" /><img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/star.png" />
							<?php } else if(get_sub_field('star') == "3.5") { ?>
								<img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/star.png" /><img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/star.png" /><img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/star.png" /><img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/star-half.png" />
							<?php } else if(get_sub_field('star') == "4") { ?>
								<img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/star.png" /><img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/star.png" /><img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/star.png" /><img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/star.png" />
							<?php } else if(get_sub_field('star') == "4.5") { ?>
								<img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/star.png" /><img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/star.png" /><img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/star.png" /><img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/star.png" /><img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/star-half.png" />
							<?php } else if(get_sub_field('star') == "5") { ?>
								<img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/star.png" /><img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/star.png" /><img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/star.png" /><img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/star.png" /><img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/star.png" />
							<?php } ?>                            
                           </td> 
                        </tr>
						<?php endwhile; ?>
                    </table>
					<?php endif; ?>
                    <p><?php the_field('rating_source'); ?> </p>
                </div>
        	</div>
        </div>
        
        <div class="filter">
        	<div class="wrapper">
                <img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/icon-news-white.png" />
                <h2><strong>Inspect</strong> this property</h2>
                <p>Contact us to arrange an exclusive<br/>property inspection time.</p>
                <?php the_field('form_embed'); ?>
            </div>
        </div>
        
		<?php if(get_field('related')) : ?>
        <div class="property">
        	<div class="wrapper">
            	<h2 class="icon eye"><strong><?php the_field('related_bold_heading'); ?></strong> <?php the_field('related_normal_heading'); ?></h2>
                <ul>
					<?php while(the_repeater_field('related')): ?>
                    <?php
					$post_object = get_sub_field('property');
					if($post_object):
						$post  = $post_object;
						setup_postdata($post);
						
						$variable = get_field('content', $post->ID);
						$excerpt_length = 40; // 20 words
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
                <div class="clear"></div>
            </div>
        </div>
		<?php endif; ?>
        
    </section>
</div>
    
<?php endwhile; ?>
    
<?php get_footer(); ?>