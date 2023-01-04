<?php
/*
* This template is used display single pages
*/
get_header();
?>
        <div class="page-custom-header">
            <img src="<?php header_image(); ?>" width="<?php echo absint(get_custom_header()->width) ?>" width="<?php echo absint(get_custom_header()->height) ?>" class="img-fluid">
        </div>
        <div class="row ml-0 mr-0">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <h1><?php the_title() ?></h1>
                    <p><?php the_content(); ?></p>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        

<?php 
get_footer();
?>

