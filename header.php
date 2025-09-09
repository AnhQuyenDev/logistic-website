<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
</head>
<?php
// Xác định URL ảnh nền theo trang
$bg_url = '';

if ( is_front_page() || is_page('gioi-thieu') ) {
    $bg_url = get_template_directory_uri() . '/assets/images/bg-body.png';
}
?>

<body <?php body_class(); ?> 
<?php if ( $bg_url ): ?>
    style="background: url('<?php echo esc_url($bg_url); ?>') top center / cover no-repeat fixed;"
<?php endif; ?>
>
<div class="relative">
    <section id="header" class="fixed top-0 left-0 w-full z-20 p-0">
        <div class="absolute inset-0 bg-gradient-to-b from-black/90 to-transparent z-[-1] pointer-events-none"></div>
        <header class="py-4 flex items-center justify-center md:justify-between">
            <div class="flex flex-col">
                <div class="flex items-center border-b border-white space-x-4 py-1">
                    <div class="flex items-center text-white text-sm space-x-1 ml-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M2 12h20M12 2a15.3 15.3 0 010 20M12 2a15.3 15.3 0 000 20" />
                        </svg>
                        <span>Languages</span>
                    </div>
                    <div class="relative">
                        <input type="text" placeholder="Search..." class="rounded-md pl-3 pr-8 py-1 bg-white/20 text-white placeholder-white/70 text-sm focus:outline-none w-32" /> 
                        <button class="absolute right-1 top-1/2 -translate-y-1/2 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <circle cx="11" cy="11" r="8" />
                                <path d="M21 21l-4.35-4.35" />
                            </svg>
                        </button>
                    </div>
                    <div class="bg-primary text-white text-sm font-semibold rounded-md px-3 py-2 text-center shadow-lg">
                        <p>Hotline</p>
                        <p class="text-xs font-normal"><?php echo do_shortcode('[business_hotline]'); ?></p>
                    </div>
                </div>

                <nav class="flex items-center justify-between py-4 -my-3 space-x-5 bg-transparent relative z-20">
                    <div class="flex-shrink-0">
                        <a href="<?php echo home_url(); ?>">
                            <?php echo do_shortcode('[business_logo]')?>                        
                        </a>
                    </div>
                    <div class="md:hidden">
                        <button id="menu-toggle" class="text-white focus:outline-none z-50 relative">
                            <svg id="icon-open" class="w-6 h-6 block" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <svg id="icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <?php 
                        wp_nav_menu( array(
                            'theme_location' => 'primary-menu',
                            'menu_id'        => 'nav-menu',
                            'container'      => 'ul',
                            'menu_class'     => 'md:flex flex-wrap items-start gap-x-3 gap-y-4 text-white font-bold text-base uppercase',
                        ) );
                    ?>
                </nav>
            </div>
        </header>
    </section>
    </div>