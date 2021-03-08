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

        <div class="properties">
            <div class="wrapper">
                <div class="copy">
					<h1>SEARCH: <?php the_search_query(); ?></h1>
                </div>
				<?php if (have_posts()) : ?>
                <ul>
                <?php while (have_posts()) : the_post(); ?>
				<?php
					$variable = get_field('content', $post->ID);
					$excerpt_length = 40; // 20 words
					$excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
					$variable = wp_trim_words( $variable, $excerpt_length, $excerpt_more );					
				?> 
                    <li>
                        <?php the_post_thumbnail(); ?>
                        <div class="copy">
                            <h3><?php the_title(); ?></h3>
                            <?php if (!empty($variable)) { ?>
                                <p><?php echo $variable ?></p>
							<?php } else { ?>
                                <p><?php the_excerpt(); ?></p>
                            <?php } ?>
                            <a href="<?php the_permalink() ?>">More ></a>
                        </div>
                    </li>
                    <?php endwhile; else: ?>
                        <div class="no-results">
                            <h2>No Results</h2>
                            <p>Please feel free try again!</p>
                        </div><!--no-results-->
                    <?php endif; ?>
                    </ul>
                
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
                    
                <div class="clear"></div>
            </div>
        </div>
            
    </section>
</div>

<?php get_footer(); ?>
