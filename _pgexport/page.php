<?php get_header(); ?>

<div class="bg-white h-full mx-auto page-content px-24 py-8 w-full lg:block">
    <h2 class="mb-8 text-center"><?php wp_title(); ?></h2>
    <div class="border-4 border-black float-left max-w-[20rem] mr-4 p-2 rounded">
        <?php echo PG_Image::getPostImage( null, 'full', null, 'both', null ) ?>
    </div>
    <!-- start slipsum code -->
    <?php the_content(); ?>
    <!-- end slipsum code -->
</div>            

<?php get_footer(); ?>