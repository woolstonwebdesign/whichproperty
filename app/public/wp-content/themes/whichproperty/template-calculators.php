<?php /* Template Name: Calculator */ ?>
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
                <?php if(get_field('heading')) { ?><h1><?php the_field('heading'); ?></h1><?php } ?>
                <?php if(get_field('content')) { ?><p class="block"><?php the_field('content'); ?></p><?php } ?>
            </div>
			<?php if(get_field('calculators')) : ?>
			<?php while(the_repeater_field('calculators')): ?>
            <div class="calculators">
                <a href="<?php the_sub_field('link'); ?>"><img src="<?php the_sub_field('image'); ?>" /></a>
                <div class="info">
                    <p><a class="cal"  href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a></p>
                    <?php the_sub_field('copy'); ?>
                    <a href="<?php the_sub_field('link'); ?>">Use Calculator &raquo;</a>
                </div>
            </div>
			<?php endwhile; ?>
			<?php endif; ?>

    </section>
</div>
    
<?php endwhile; ?>
    
<?php get_footer(); ?>