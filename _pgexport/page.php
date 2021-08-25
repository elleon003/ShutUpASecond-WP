<?php get_header(); ?>

<div class="bg-white flex flex-col mx-auto page-content px-8 py-8 w-full md:block lg:px-24">
    <h2 class="mb-8 text-center md:text-left"><?php the_title(); ?></h2>
    <?php echo PG_Image::getPostImage( null, 'full', array(
        	'class' => 'border-4 border-black float-left max-w-[20rem] mx-auto p-2 rounded md:ml-0 md:mr-4'
    ), 'both', null ) ?>
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