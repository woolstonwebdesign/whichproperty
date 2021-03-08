	
<?php get_header(); ?>

<div id="content" >
    <section>

        <div class="heroSlider">
            <ul>
                <li>
					<?php dynamic_sidebar( 'Blog Hero Image' ) ?>
                </li>
            </ul>
        </div>

        <div class="property">
        	<div class="wrapper">
            	<h1><?php printf( __( 'Category Archives: %s' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>

				<?php if (have_posts()) : ?>
    			<ul>
				<?php while (have_posts()) : the_post(); ?>
                	<li>
                        <?php the_post_thumbnail(); ?>
                        <div class="copy">
                            <h3><?php the_title(); ?></h3>
                            <?php the_excerpt();?>
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
            <div class="filter">
                <div class="wrapper">
                    <img src="<?php bloginfo( 'template_url' ); ?>/_templateFiles/images/icon-news-white.png" />
                    <p><strong>Stay Informed</strong><br/>Subscribe to our e-Newsletter</p>
					<a class="typeform-share button" href="https://whichproperty.typeform.com/to/XB043Y" data-mode="popup" style="display:inline-block;text-decoration:none;background-color:#003059;color:white;cursor:pointer;font-size:14px;line-height:50px;text-align:center;margin:0;height:50px;padding:0px 15px;border-radius:25px;max-width:100%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;font-weight:bold;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;width:145px;" data-hide-headers=true data-hide-footer=true data-submit-close-delay="5" target="_blank">Subscribe Now </a> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm_share", b="https://embed.typeform.com/"; if(!gi.call(d,id)){ js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>
                </div>
            </div>
		</div>

    </section>
</div>

<?php get_footer(); ?>
