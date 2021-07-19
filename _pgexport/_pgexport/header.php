<?php get_header(); ?>

<?php if( function_exists( 'wp_body_open' ) ) wp_body_open(); ?> 
<header class="bg-black container mx-auto"> 
    <nav class="flex flex-wrap font-display items-center max-w-[1284px] mx-auto px-4 py-5 text-white"> 
        <a href="<?php echo esc_url( home_url() ); ?>" class="hover:underline mr-auto" rel="home"><?php bloginfo( 'name' ); ?></a> 
        <button class="px-3 py-2 rounded text-white lg:hidden" data-name="nav-toggler" data-pg-ia='{"l":[{"name":"NabMenuToggler","trg":"click","a":{"l":[{"t":"^nav|[data-name=nav-menu]","l":[{"t":"set","p":0,"d":0,"l":{"class.remove":"hidden"}}]},{"t":"#gt# span:nth-of-type(1)","l":[{"t":"tween","p":0,"d":0.2,"l":{"rotationZ":45,"yPercent":300}}]},{"t":"#gt# span:nth-of-type(2)","l":[{"t":"tween","p":0,"d":0.2,"l":{"autoAlpha":0}}]},{"t":"#gt# span:nth-of-type(3)","l":[{"t":"tween","p":0,"d":0.2,"l":{"rotationZ":-45,"yPercent":-300}}]}]},"pdef":"true","trev":"true"}]}' data-pg-ia-apply="$nav [data-name=nav-toggler]"> 
            <span class="block border-b-2 border-current my-1 w-6"></span> 
            <span class="block border-b-2 border-current my-1 w-6"></span> 
            <span class="block border-b-2 border-current my-1 w-6"></span> 
        </button>                 
        <?php
            PG_Smart_Walker_Nav_Menu::$options['template'] = '<div class="flex flex-col justify-between lg:flex-row 2xl:text-2xl {CLASSES}" data-pg-collapsed id="{ID}"> 
                                                    <a class="active border-b-2 border-white px-0 py-4 lg:px-4" {ATTRS}>{TITLE}</a><a href="#" class="border-b-2 border-transparent hover:border-white px-0 py-4 lg:px-4">Home</a><a href="#" class="border-b-2 border-transparent hover:border-white px-0 py-4 lg:px-4">Home</a><a href="#" class="border-b-2 border-transparent hover:border-white px-0 py-4 lg:px-4">Home</a> 




                                                </div>';
            wp_nav_menu( array(
            	'menu' => 'primary',
            	'container' => '',
            	'items_wrap' => '<div class="%2$s hidden lg:flex lg:items-center lg:space-x-4 lg:space-y-0 lg:w-auto space-y-2 w-full" data-name="nav-menu" id="%1$s">%3$s</div>',
            	'walker' => new PG_Smart_Walker_Nav_Menu()
        ) ); ?> 
    </nav>             
</header>         
<main class="flex-shrink-0">        

<?php get_footer(); ?>