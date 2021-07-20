<?php get_header(); ?>

<div class="bg-white flex flex-col mx-auto page-content px-8 py-8 w-full md:block lg:px-24" id="post-container">
    <h2 class="block mb-8 mx-auto md:mx-0"><?php the_title(); ?></h2>
    <p class="font-bold text-sm"><?php the_time( get_option( 'date_format' ) ); ?></p>
    <?php echo PG_Image::getPostImage( null, 'full', array(
        	'class' => 'border-4 border-black float-left mr-4 p-2 rounded w-full md:max-w-[25rem] lg:max-w-[35rem]'
    ), 'both', null ) ?>
    <!-- start slipsum code -->
    <?php the_content(); ?>
    <!-- end slipsum code -->
</div>
<div class="flex flex-col items-center justify-center my-8 w-full"> 
    <h2 class="my-4"><?php _e( 'Share this post', 'shutupasecond' ); ?></h2> 
    <?php
        echo do_shortcode("[DISPLAY_ULTIMATE_PLUS]")
    ?>
</div>
<div class="flex flex-col items-center justify-center mb-8 mt-4 mx-auto w-full lg:w-5/6"> 
    <?php
        $prev_post = get_previous_post(true,'');
        $next_post = get_next_post(true,'');
    ?>
    <?php
        if (!empty( $prev_post )):
    ?>
    <div class="btn h-12 my-4"> 
        <?php
            previous_post_link();
            endif;
        ?> 
    </div>
    <?php
        if (!empty( $next_post )):
    ?>
    <div class="btn h-12 my-4"> 
        <?php
            next_post_link();
            endif;
        ?>
    </div>                 
</div>
<div class="bg-white border-black border-t-4 flex flex-col lg:flex-row">
    <div class="border-black mx-auto py-8 lg:border-l-4 lg:border-r-4 lg:px-4 lg:w-2/6"> 
        <?php
            echo do_shortcode("[sibwp_form id=1]")
        ?> 
    </div>
</div>            

<?php get_footer(); ?>