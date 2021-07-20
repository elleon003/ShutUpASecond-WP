<?php get_header(); ?>

<div class="flex flex-col">
    <?php if ( have_posts() ) : ?>
        <div class="flex flex-col flex-wrap mx-auto lg:flex-row">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php PG_Helper::rememberShownPost(); ?>
                <div <?php post_class( 'flex flex-col lg:max-h-[30em] lg:min-h-[25em] lg:w-[42%] mx-auto my-4 px-8 py-4 w-full xl:w-[33%]' ); ?> id="post-<?php the_ID(); ?>">
                    <div class="flex flex-col w-full">
                        <h3 class="text-2xl"><?php the_title(); ?></h3>
                        <p class="text-xs my-2"><?php the_time( get_option( 'date_format' ) ); ?></p>
                        <?php the_excerpt( ); ?>
                        <a class="block btn mt-4 mx-auto" href="<?php echo esc_url( get_permalink() ); ?>"><?php _e( 'Read More', 'shutupasecond' ); ?></a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'shutupasecond' ); ?></p>
    <?php endif; ?>
</div>
<?php if ( PG_Pagination::isPaginated() ) : ?>
    <div class="flex flex-col items-center justify-center mb-8 mx-auto pt-8 w-full lg:w-5/6"> 
        <?php if( PG_Pagination::getCurrentPage() < PG_Pagination::getMaxPages() ) : ?>
            <a class="btn h-12 my-4" <?php echo PG_Pagination::getNextHrefAttribute(); ?>>  <?php _e( 'Next Page &gt;&gt;', 'shutupasecond' ); ?> </a>
        <?php endif; ?>
        <div class="text-xl">
            <?php _e( 'Page', 'shutupasecond' ); ?>
            <span class="font-bold"><?php echo PG_Pagination::getCurrentPage(); ?></span> 
            <?php _e( 'of', 'shutupasecond' ); ?> 
            <span class="font-bold"><?php echo PG_Pagination::getMaxPages(); ?></span>
        </div>
        <?php if( PG_Pagination::getCurrentPage() > 1 ) : ?>
            <a class="btn h-12 my-4" <?php echo PG_Pagination::getPreviousHrefAttribute(); ?>>  <?php _e( '&lt;&lt; Previous Page', 'shutupasecond' ); ?></a>
        <?php endif; ?> 
    </div>
<?php endif; ?>
<div class="bg-white border-black border-t-4 flex flex-col lg:flex-row">
    <div class="border-black mx-auto py-8 lg:border-l-4 lg:border-r-4 lg:px-4 lg:w-2/6"> 
        <?php
            echo do_shortcode("[sibwp_form id=1]")
        ?> 
    </div>
</div>            

<?php get_footer(); ?>