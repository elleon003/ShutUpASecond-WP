
        </main>         
        <footer class="align-middle bg-black flex flex-col mt-auto px-4 py-8">
            <div class="flex flex-col justify-center text-white md:flex-row">
                <p class="text-sm">&copy; <?php
                        echo date("Y")
                    ?> <a class="hover:text-accent text-sm" href="<?php echo esc_url( home_url() ); ?>"><?php _e( 'Shut Up A Second.', 'shutupasecond' ); ?></a></p>
                <p class="hidden px-4 text-sm md:inline">|</p>
                <a class="hover:text-accent text-sm" href="<?php echo esc_url( get_page_link( PG_Helper::getPostFromSlug( 'privacy-policy', 'page' ) ) ); ?>"><?php _e( 'Privacy Policy', 'shutupasecond' ); ?></a>
            </div>
            <div class="flex justify-center my-4 text-white"> 
                <p class="text-sm"><?php _e( 'Site Build By', 'shutupasecond' ); ?> <a class="text-sm text-accent hover:underline" href="https://sageninecreative.com"><?php _e( 'Sage Nine Creative', 'shutupasecond' ); ?></a></p> 
            </div>
        </footer>         
        <?php wp_footer(); ?>
    </body>     
</html>