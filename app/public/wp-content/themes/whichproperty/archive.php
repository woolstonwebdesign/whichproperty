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
            	<h1><?php printf( __( 'Category: %s' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>

				<?php if (have_posts()) : ?>
    			<ul>
				<?php while (have_posts()) : the_post(); ?>
                	<li>
                        <?php the_post_thumbnail(); ?>
                        <div class="copy">
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(__('Read more'));?>
                            <a href="<?php the_permalink() ?>">More ></a>
                        </div>
                    </li>
				<?php endwhile;?>
				</ul>
                <div class="clear"></div>
				<?php endif; ?>
                    
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
        
        <div class="sidebar">
        	<?php dynamic_sidebar( 'Sidebar' ); ?>
		</div>

    </section>
</div>

<?php get_footer(); ?>
