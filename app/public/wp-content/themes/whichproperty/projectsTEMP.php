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

        <div class="property">
        	<div class="wrapper">
            	<h1>Projects</h1>
				<?php
				
                $cat_args = array (
                'taxonomy' => 'area'
                );
                $categories = get_categories ( $cat_args );
				
				foreach ( $categories as $category ) {
				$cat_query = null;
				$args = array (
					'order' => 'ASC',
					'orderby' => 'name',
					'posts_per_page' => 23,
					'post_type' => 'projects',
					'taxonomy' => 'area',
					'term' => $category->slug
					);
				
				$cat_query = new WP_Query( $args );
				if ( $cat_query->have_posts() ) : 
				?>
                <h2><?php echo $category->name ?></h2>
    			<ul>
                <?php while ( $cat_query->have_posts() ) : $cat_query->the_post(); ?>
				<?php
						$variable = get_field('content', $cat_query->ID);
						$excerpt_length = 30; 
						$excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
						$variable = wp_trim_words( $variable, $excerpt_length, $excerpt_more );					
					?>	                    
                    <li>
                        <?php the_post_thumbnail(); ?>
                        <div class="copy">
                            <h3><?php the_title(); ?></h3>
							<p><?php echo $variable ?></p>
                            <a href="<?php the_permalink(); ?>">More ></a>
                        </div>
                    </li>
				<?php endwhile;?>
				</ul>
                <div class="clear"></div>
                <div class="pagination">
                    <?php 
                    $page_query = $loop;
                    page_pagination(); ?>
                </div>
				<?php wp_reset_query(); ?>
				<?php endif; ?>                    
            </div>
        </div>

    </section>
</div>


<?php get_footer(); ?>
