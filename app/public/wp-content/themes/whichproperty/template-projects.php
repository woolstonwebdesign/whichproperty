<?php /* Template Name: Projects */ ?>
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

        <div class="propertyWrap">
        	<div class="wrapper">
            	<h1>Projects</h1>
                
				<?php if(get_field('property_list')) : ?>
                <?php while(the_repeater_field('property_list')): ?>
                <div class="property">
                    <div class="wrapper">
                        <h2><strong><?php the_sub_field('bold_heading'); ?></strong> <?php the_sub_field('normal_heading'); ?></h2>
                        <?php if(get_sub_field('properties')) : ?>
                            <ul>
                            <?php while(the_repeater_field('properties')): ?>
                                
                                <?php
                                $post_object = get_sub_field('property');
                                if($post_object):
                                    $post  = $post_object;
                                    setup_postdata($post);
                                    
                                    $variable = get_field('content', $post->ID);
                                    $excerpt_length = 30; // 20 words
                                    $excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
                                    $variable = wp_trim_words( $variable, $excerpt_length, $excerpt_more );					
                                ?>				
                                <li>
                                    <?php the_post_thumbnail() ?>
                                    <div class="copy">
                                        <h3><?php the_title(); ?></h3>
                                        <p><?php echo $variable ?></p>
                                        <a href="<?php the_permalink(); ?>">More ></a>
                                    </div>                            
                                </li>
                                <?php wp_reset_postdata(); ?>
                                <?php endif; ?>
                                
                            <?php endwhile; ?>
                        </ul>
                        <?php endif; ?>
                        <div class="clear">
                        <?php 
                            $term_id =  get_sub_field('link');
                            $term_link = get_term_link( $term_id, 'area' );
                        ?>
                            <a class="icon eye" href="<?php echo $term_link ?>"><strong>See All</strong> <?php the_sub_field('bold_heading'); ?> <?php the_sub_field('normal_heading'); ?></a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
        
<!-- <?php
/* $loop = new WP_Query( array( 'post_type' => 'projects','posts_per_page' => 23,'paged'=>$paged) );
if ( $loop->have_posts() ) : ?> 
<ul>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<?php
        $variable = get_field('content', $loop->ID);
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
<?php endif;*/  ?>--> 
                  
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
