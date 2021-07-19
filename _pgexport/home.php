<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php PG_Helper::rememberShownPost(); ?>
        <div>
            <div class="flex flex-col mx-8 my-4 lg:ml-[50%]">
                <div class="border-b-4 border-black flex flex-col w-full">
                    <h3><?php _e( 'Heading 3', 'shutupasecond' ); ?></h3>
                    <p class="text-xs my-2"><?php _e( 'July 5, 2021', 'shutupasecond' ); ?></p>
                    <p><?php _e( 'In the summer of 2011, I quit my job, moved into an attic apartment in a brownstone, and wrote for my damn life. I was in Covington, a river town that\'s just a flip-flop\'s throw...', 'shutupasecond' ); ?></p>
                    <a class="btn block mx-auto my-4" href="#"><?php _e( 'Read More', 'shutupasecond' ); ?></a>
                </div>
            </div>
            <div class="flex flex-col mx-8 my-4 lg:mr-[50%]">
                <div class="border-b-4 border-black flex flex-col w-full">
                    <h3><?php _e( 'Heading 3', 'shutupasecond' ); ?></h3>
                    <p class="text-xs my-2"><?php _e( 'July 5, 2021', 'shutupasecond' ); ?></p>
                    <p><?php _e( 'In the summer of 2011, I quit my job, moved into an attic apartment in a brownstone, and wrote for my damn life. I was in Covington, a river town that\'s just a flip-flop\'s throw...', 'shutupasecond' ); ?></p>
                    <a class="btn block mx-auto my-4" href="#"><?php _e( 'Read More', 'shutupasecond' ); ?></a>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'shutupasecond' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>