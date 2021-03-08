	
<?php get_header(); ?>

<div id="content" >
    <section>

        <div class="heroSlider">
            <ul>
                <li>
					<?php dynamic_sidebar( 'Hero Image' ) ?>
                </li>
            </ul>
        </div>

        <div class="filter">
        	<div class="wrapper">
            	<h2><strong>WHICH PROPERTY</strong> is the perfect fit for you?</h2>
				<?php echo do_shortcode( '[searchandfilter post_types="projects" taxonomies="locations,bedrooms,1_bedroom,2_bedrooms,3_bedrooms,4_bedrooms"]' ); ?>
            </div>
        </div>

        <div class="property">
        	<div class="wrapper">
            	<h1>SEARCH RESULTS</h1>

				<?php if (have_posts()) : ?>

    			<ul>
				<?php while (have_posts()) : the_post(); ?>
				<?php
						$variable = get_field('content', get_the_ID());
						$excerpt_length = 30; 
						$excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
						$variable = wp_trim_words( $variable, $excerpt_length, $excerpt_more );					
					?>	                    
                	<li>
                        <?php the_post_thumbnail(); ?>
                        <div class="copy">
                            <h3><?php the_title(); ?></h3>
							<p><?php echo $variable ?></p>
                            <a href="<?php the_permalink() ?>">More ></a>
                        </div>
                    </li>
				<?php endwhile;?>
				</ul>
                <?php else : ?>
                <h3>Sorry there are no results<br/><br/></h3>
				<?php endif; ?>
                <div class="clear"></div>
                <nav class="oldernewer">
                    <div class="older">
                        <p>
                            <?php next_posts_link('&laquo; Older Entries') ?>
                        </p>
                    </div><!--.older-->
                    <div class="newer">
                        <p>
                            <?php previous_posts_link('Newer Entries &raquo;') ?>
                        </p>
                    </div><!--.older-->
                </nav><!--.oldernewer-->
                
            </div>
        </div>
        
       <!-- <div class="sidebar">
        	<h2>Locations:</h2>
			<?php /* $categories = get_categories('taxonomy=locations&post_type=projects'); ?>
                <?php foreach ($categories as $category) : ?>
                    <li><a href="<?php echo get_category_link($category->cat_ID); ?>"><?php echo $category->name; ?></a></li>
            <?php endforeach; */ ?>
        </div>-->
        
    </section>
</div>

<?php get_footer(); ?>
