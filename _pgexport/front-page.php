<?php get_header(); ?>

<div class="bg-white flex flex-col lg:flex-row">
    <div class="border-b-4 border-black w-full lg:w-[60%]">
        <img src="<?php echo PG_Image::getUrl( get_theme_mod( 'Home Image', 'http://pinegrow.com/placeholders/img20.jpg' ), 'large' ) ?>" class="w-full"/>
    </div>
    <div class="border-b-4 flex flex-col justify-center w-full lg:border-black lg:border-l-4 lg:w-[40%]">
        <h2 class="font-bold px-4 py-8 2xl:text-4xl"><?php echo get_theme_mod( 'Intro', __( 'I tell other people&apos;s stories for a living. Here, I tell mine.', 'shutupasecond' ) ); ?></h2>
        <p class="pb-8 px-4 2xl:text-2xl"><?php echo get_theme_mod( 'Intro Paragraph', __( 'Stay a while, read a couple.', 'shutupasecond' ) ); ?></p>
        <a class="btn mb-8 mx-auto self-start text-white" href="<?php echo get_theme_mod( 'About Link' ); ?>"><?php echo get_theme_mod( 'About Button Text', __( 'Who\'s this guy?', 'shutupasecond' ) ); ?></a>
    </div>
</div>
<?php
    $latest_post_query_args = array(
    	'post_type' => 'post',
    	'posts_per_page' => 1,
    	'order' => 'DESC',
    	'orderby' => 'date'
    )
?>
<?php $latest_post_query = new WP_Query( $latest_post_query_args ); ?>
<?php if ( $latest_post_query->have_posts() ) : ?>
    <?php while ( $latest_post_query->have_posts() ) : $latest_post_query->the_post(); ?>
        <?php PG_Helper::rememberShownPost(); ?>
        <div <?php post_class( 'bg-white flex flex-col lg:flex-row' ); ?> id="post-<?php the_ID(); ?>">
            <div class="border-b-4 flex flex-col justify-center w-full lg:border-r-4 lg:w-[40%]">
                <h2 class="font-display mx-8 my-4 text-4xl text-accent xl:text-5xl"><?php _e( 'Latest Blog Post', 'shutupasecond' ); ?></h2>
                <h3 class="font-bold mx-8 text-2xl xl:text-3xl"><?php the_title(); ?></h3>
                <p class="mx-8 my-8"><?php echo get_the_excerpt(); ?></p>
                <a class="btn mb-8 mx-auto" href="<?php echo esc_url( get_permalink() ); ?>"><?php _e( 'Read More', 'shutupasecond' ); ?></a>
            </div>
            <div class="border-b-4 w-full lg:w-[60%]">
                <?php if ( has_post_thumbnail( get_the_ID() ) ) : ?>
                    <?php echo PG_Image::getPostImage( null, 'full', array(
                        	'class' => 'block'
                    ), 'both', null ) ?>
                <?php else : ?>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/little-boy-looking-out.jpg" class="block"/>
                <?php endif; ?>
            </div>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'shutupasecond' ); ?></p>
<?php endif; ?>
<div class="bg-white flex flex-col lg:flex-row">
    <div class="border-black mx-auto py-8 lg:border-l-4 lg:border-r-4 lg:px-4 lg:w-2/6">
        <?php the_content(); ?>
    </div>
</div>            

<?php get_footer(); ?>