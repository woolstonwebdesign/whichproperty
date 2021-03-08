<?php get_header(); ?>
<div id="content" >
    <section>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    
        <div class="heroSlider">
            <ul>
                <li>
                	<img src="<?php the_field('hero_image'); ?>" />
                </li>
            </ul>
        </div>
        
        <div class="copy">
            <div class="wrapper">
                <?php the_field('content'); ?>
            </div>
        </div>
        
	<?php endwhile; ?>
    
    
    </section>
</div>
<?php get_footer(); ?>

