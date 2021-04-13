<?php /* Template Name: Group Home */ ?>
<?php 
    get_header(); 

    $logo_args = array(
        'posts_per_page' => 1,
        'post_type' => 'attachment',
        'name' => 'Which Property Group'
    );
    $logo = new WP_Query($logo_args);
    // var_dump($logo);
    wp_reset_query();
    if (have_posts()) while (have_posts()): the_post();
        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
?>
<style>
    html { margin-top: 0 !important; }
</style>
<div class="home-group-backdrop" style="background-image: url(<?php echo $featured_img_url; ?>);">
    <header class="group-home-header">
        <img src="<?php echo $logo->posts[0]->guid; ?>" />
    </header>

    <div id="content">
        <section>
            <?php the_content();    ?>
        </section>
    </div>
</div><!--  backdrop    -->
    
<?php endwhile; ?>
<footer class="group-footer">
<?php dynamic_sidebar( 'Group Home Footer' ); ?>
</footer>