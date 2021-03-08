<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    
<div id="content" >
    <section>
    
        <div class="heroSlider">
            <ul>
                <li>
                	<img src="<?php the_field('hero_image'); ?>" />
                </li>
            </ul>
        </div>
        
        <div class="wrapper">
        	<h1 style="text-align:center;"><?php the_title(); ?></h1>
        	<div class="splitHalf">
				<?php the_field('content'); ?>
            </div>
        	<div class="splitHalf">
				<?php the_field('right_content'); ?>
            </div>
        </div>
        <div class="clear"></div>
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
        
        <div class="testimonial">
        	<div class="wrapper">
            	<h2 class="icon people"><strong><?php the_field('bold_testimonial_heading'); ?></strong> <?php the_field('normal_testimonial_heading'); ?></h2>
            	<p><strong><?php the_field('source'); ?></strong></p>
            	<p><?php the_field('testimonial'); ?></p>
            </div>
        </div>
        <div class="clear">&nbsp;</div>
        <div class="ratings copy">
        	<div class="wrapper">
                <h1><?php the_field('ratings_heading'); ?></h1>
                <p class="block"><?php the_field('ratings_sub_heading'); ?></p>
				<?php if(get_field('rating')) : ?>
                    <ul class="star">
					<?php while(the_repeater_field('rating')): ?>
                    <li style="background-image:url('<?php the_sub_field('icon'); ?>');">
                    	<h4><?php the_sub_field('title'); ?></h4> 
                        <?php the_sub_field('copy'); ?>
                    </li>
                    <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
        
    </section>
</div>
    
<?php endwhile; ?>
    
<?php get_footer(); ?>