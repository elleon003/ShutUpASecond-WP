<!DOCTYPE html> 
<!--  Converted from HTML to WordPress with Pinegrow Web Editor. https://pinegrow.com  -->
<html class="h-full" <?php language_attributes(); ?>> 
    <head> 
        <meta charset="<?php bloginfo( 'charset' ); ?>"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">                   
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <meta content="Pinegrow Web Editor" name="generator">
        <?php wp_head(); ?>
    </head>     
    <body class='flex flex-col h-full <?php echo implode(' ', get_body_class()); ?>'>
        <?php if( function_exists( 'wp_body_open' ) ) wp_body_open(); ?> 
        <header class="bg-black w-full"> 
            <nav class="flex flex-wrap font-display items-center px-4 py-5 text-white w-full 2xl:max-w-[85%] 2xl:mx-auto"> 
                <a href="<?php echo esc_url( home_url() ); ?>" class="hover:underline mr-auto text-3xl" rel="home"><?php bloginfo( 'name' ); ?></a> 
                <button class="px-3 py-2 rounded text-white lg:hidden" data-name="nav-toggler" data-pg-ia='{"l":[{"name":"NabMenuToggler","trg":"click","a":{"l":[{"t":"^nav|[data-name=nav-menu]","l":[{"t":"set","p":0,"d":0,"l":{"class.remove":"hidden"}}]},{"t":"#gt# span:nth-of-type(1)","l":[{"t":"tween","p":0,"d":0.2,"l":{"rotationZ":45,"yPercent":300}}]},{"t":"#gt# span:nth-of-type(2)","l":[{"t":"tween","p":0,"d":0.2,"l":{"autoAlpha":0}}]},{"t":"#gt# span:nth-of-type(3)","l":[{"t":"tween","p":0,"d":0.2,"l":{"rotationZ":-45,"yPercent":-300}}]}]},"pdef":"true","trev":"true"}]}' data-pg-ia-apply="$nav [data-name=nav-toggler]"> 
                    <span class="block border-b-2 border-current my-1 w-6"></span> 
                    <span class="block border-b-2 border-current my-1 w-6"></span> 
                    <span class="block border-b-2 border-current my-1 w-6"></span> 
                </button>                 
                <div class="lg:flex lg:space-x-4 lg:space-y-0 lg:w-auto space-y-2 w-full hidden lg:items-center" data-name="nav-menu"> 
                    <div class="flex flex-col justify-between lg:flex-row"> 
                        <?php if ( has_nav_menu( 'primary' ) ) : ?>
                            <?php
                                PG_Smart_Walker_Nav_Menu::$options['template'] = '<a class="border-b-2 border-solid border-transparent hover:border-white hover:text-white px-0 py-4 text-white-dark lg:px-4 {CLASSES}" id="{ID}" {ATTRS}>{TITLE}</a>';
                                wp_nav_menu( array(
                                	'container' => '',
                                	'theme_location' => 'primary',
                                	'items_wrap' => '%3$s',
                                	'walker' => new PG_Smart_Walker_Nav_Menu()
                            ) ); ?>
                        <?php endif; ?> 
                    </div>                     
                </div>                 
            </nav>             
        </header>         
        <main class="bg-white flex-shrink-0">