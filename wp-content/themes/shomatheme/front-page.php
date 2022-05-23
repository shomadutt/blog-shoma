<?php get_header(); ?>

<section class="page-wrap">

    <div class="container">
        <h1>
            <?php the_title(); ?>
        </h1>

        <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid mb-3 img-thumbnail" alt="<?php the_title(); ?>">

        <?php get_template_part('includes/section', 'content'); ?>

    </div>

</section>

<?php get_footer(); ?>