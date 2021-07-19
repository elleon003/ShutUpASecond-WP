<?php get_header(); ?>

<div class="bg-white mx-auto page-content px-24 py-8 w-full lg:block">
    <h2 class="mb-8 text-center"><?php the_title(); ?></h2>
    <div class="border-4 border-black float-left max-w-[20rem] mr-4 p-2 rounded">
        <?php echo PG_Image::getPostImage( null, 'full', null, 'both', null ) ?>
    </div>
    <!-- start slipsum code -->
    <?php the_content(); ?>
    <!-- end slipsum code -->
</div>
<div class="bg-white border-black border-t-4 flex flex-col lg:flex-row">
    <div class="border-black mx-auto py-8 lg:border-l-4 lg:border-r-4 lg:px-4 lg:w-2/6"> 
        <?php
            echo do_shortcode("[sibwp_form id=1]")
        ?> 
    </div>
</div>            

<?php get_footer(); ?>