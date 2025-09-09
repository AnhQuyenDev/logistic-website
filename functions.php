<?php

/**
 * Enqueue theme scripts and styles.
 */
function hptc_theme_scripts() {
    // QUAN TRỌNG: Hãy cập nhật lại đúng tên file CSS/JS sau mỗi lần build
    $css_file_path = '/assets/css/index-B_VShdu_.css'; // Thay bằng tên file CSS mới nhất của bạn
    $js_file_path  = '/assets/js/index-BJ9SlqJ9.js'; // Thay bằng tên file JS mới nhất của bạn

    wp_enqueue_style('hptc-style', get_template_directory_uri() . $css_file_path);
    wp_enqueue_script('hptc-main-js', get_template_directory_uri() . $js_file_path, array(), '1.0', true);

    // --> SỬA LỖI: "Gửi" dữ liệu từ PHP sang JavaScript
    // Mảng chứa các đường dẫn ảnh tĩnh
    $company_image_urls = [
        get_template_directory_uri() . '/assets/images/imgi_12_hang-tau-cosco.jpg',
        get_template_directory_uri() . '/assets/images/imgi_13_KMTC-Group.png',
        get_template_directory_uri() . '/assets/images/imgi_14_unnamed.jpg',
        get_template_directory_uri() . '/assets/images/imgi_20_WAN-HAI-LINE-SHIPPPING-01.jpg',
        get_template_directory_uri() . '/assets/images/imgi_15_YANGMING-LOGO.jpg',
        get_template_directory_uri() . '/assets/images/imgi_16_ckline_logo.png',
        // Thêm các ảnh khác vào đây...
    ];

    // Hàm wp_localize_script sẽ tạo một đối tượng JavaScript tên là `companyData`
    wp_localize_script('hptc-main-js', 'companyData', array(
        'imageUrls' => $company_image_urls,
    ));

    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'hptc_theme_scripts');


/**
 * Register navigation menus.
 */
function hptc_register_menus() {
    register_nav_menus(
        array(
            'primary_menu' => __( 'Primary Menu', 'hptc-theme' ), // Nên có text-domain
            'footer_menu'  => __( 'Footer Menu', 'hptc-theme' )
        )
    );
}
add_action( 'init', 'hptc_register_menus' );


/**
 * Adds custom classes to the navigation menu links.
 * This single function handles all menu locations.
 */
add_filter( 'nav_menu_link_attributes', function( $atts, $item, $args ) {
    if ( isset($args->theme_location) && $args->theme_location === 'primary-menu' ) {
        $classes = 'my-5 hover:bg-primary-dark p-2 rounded-md transition duration-300';
        if ( in_array( 'current-menu-item', $item->classes ) ) {
            $classes .= ' bg-primary-dark';
        }

        $atts['class'] = $classes;
    }
    return $atts;
}, 10, 3 );

add_filter( 'nav_menu_link_attributes', function( $atts, $item, $args ) {
    if ( isset($args->theme_location) && $args->theme_location === 'footer-menu' ) {
        
        // Class mặc định cho tất cả link footer
        $classes = 'block transform hover:text-red-800 hover:translate-x-1 transition duration-100';

        // Nếu là trang hiện tại → giữ màu đỏ luôn
        if ( in_array( 'current-menu-item', $item->classes ) ) {
            $classes .= ' text-red-800';
        }

        $atts['class'] = $classes;
    }
    return $atts;
}, 10, 3 );

?>