<?php
/*
 Template Name: Full Width Page
 Template Post Type: post, page
*/
?>
<?php get_header(); ?>

<div class="flex flex-col h-full max-w-[960px] min-height mx-auto pb-16 px-8 w-full md:px-24">
    <h2 class="mb-8 py-8"><?php the_title(); ?></h2>
    <!-- start slipsum code -->
    <?php the_content(); ?>
    <!-- end slipsum code -->
</div>            

<?php get_footer(); ?>