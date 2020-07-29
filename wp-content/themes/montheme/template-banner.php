<?php 
/**
 * Template Name: Page avec bannière
 */
?>

<?php get_header() ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="container-fluid banner-fluid">
            <div class="container banner">
                <h2><?php the_title() ?></h2>
            </div>
        </div>
        <p>
            <img src="<?php the_post_thumbnail_url() ?>" alt="" class="img-fluid img-thumbnail">
        </p>
        <?php the_content() ?>
        
<?php endwhile;
endif; ?>

<?php get_footer() ?>