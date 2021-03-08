<?php /* Template Name: Testimonials */ ?>
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
                <p class="block"><?php the_field('content'); ?></p>
            </div>
			<?php if(get_field('testimonial')) : ?>
			<?php while(the_repeater_field('testimonial')): ?>
            <div class="testimonials">
                <img src="<?php the_sub_field('image'); ?>" />
                <div class="info">
                    <p><strong><?php the_sub_field('name'); ?></strong></p>
                    <?php the_sub_field('copy'); ?>
                </div>
            </div>
			<?php endwhile; ?>
			<?php endif; ?>

    </section>
</div>
    
<?php endwhile; ?>
    
<?php get_footer(); ?>