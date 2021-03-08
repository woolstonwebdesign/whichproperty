<?php get_header(); ?>
<div id="content" >
    <section>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    
        <div class="heroSlider">
            <ul>
                <li>
					<?php dynamic_sidebar( 'Blog Hero Image' ) ?>
                </li>
            </ul>
        </div>
        
        <div class="blogSide">
            <div class="wrapper">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
        </div>
        
	<?php endwhile; ?>
    
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

