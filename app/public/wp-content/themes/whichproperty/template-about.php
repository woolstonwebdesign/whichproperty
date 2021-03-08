<?php /* Template Name: About */ ?>
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
        	<div class="copy">
                <h1><?php the_field('heading'); ?></h1>
                <p class="block"><?php the_field('sub_heading'); ?></p>
                <div class="col">
                	<?php the_field('content'); ?>
                </div>
            </div>
        </div>
        
        <div class="team">
        	<div class="wrapper">
            	<h2><?php the_field('team_heading'); ?></h2>
				<?php if(get_field('team')) : ?>
                    <ul>
                    <?php while(the_repeater_field('team')): ?>
                        <li>
                    	<img src="<?php the_sub_field('image'); ?>" />
                        <div class="copy">
                            <h3><?php the_sub_field('first_name'); ?> <?php the_sub_field('last_name'); ?></h3>
                            <h4><?php the_sub_field('position'); ?></h4>
                            <p><?php the_sub_field('info'); ?></p>                            
                            <a class="email" href="mailto:<?php the_sub_field('email'); ?>">Email <?php the_sub_field('first_name'); ?></a>
                            <a class="phone" href="tel:<?php echo str_replace(' ', '', get_sub_field('phone')); ?>">Phone <?php the_sub_field('first_name'); ?></a>
</div>
                            <ul class="share">
                                <?php if(get_sub_field('linkedin')) { ?><li class="linkedin" ><a target="_blank" href="<?php the_sub_field('linkedin'); ?>">LinkedIn</a></li><?php } ?>
                                <?php if(get_sub_field('facebook')) { ?><li class="facebook" ><a target="_blank" href="<?php the_sub_field('facebook'); ?>">Facebook</a></li><?php } ?>
                                <?php if(get_sub_field('twitter')) { ?><li class="twitter" ><a target="_blank" href="<?php the_sub_field('twitter'); ?>">Twitter</a></li><?php } ?>
                                <?php if(get_sub_field('instagram')) { ?><li class="instagram" ><a target="_blank" href="<?php the_sub_field('instagram'); ?>">Instagram</a></li><?php } ?>
                            </ul>

                        </li>
                    <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
        
        <div class="wrapper">
        	<div class="copy">
                <h1><?php the_field('why_heading'); ?></h1>
                <p class="block"><?php the_field('why_sub_heading'); ?></p>
				<?php if(get_field('cta')) : ?>
                    <ol class="items">
                    <?php while(the_repeater_field('cta')): ?>
                        <li><h4><?php the_sub_field('cta_heading'); ?></h4> <?php the_sub_field('cta_copy'); ?></li>
                    <?php endwhile; ?>
                    </ol>
                <?php endif; ?>
            </div>
        </div>

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