<?php
/*
 Template Name: Full Width Page
 Template Post Type: post, page
*/
?>
<?php get_header(); ?>

<div class="bg-white mx-auto page-content px-24 py-8 w-full lg:block">
    <h2 class="mb-8 text-center"><?php the_title(); ?></h2>
    <!-- start slipsum code -->
    <?php the_content(); ?>
    <!-- end slipsum code -->
</div>            

<?php get_footer(); ?>