<?php
/*
Plugin Name: Business Info
Description: Plugin quản lý thông tin doanh nghiệp bằng Redux Framework (v3.6.18) + shortcode + Gutenberg block.
Version: 1.1
Author: Nguyễn Viết Anh Quyền
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Chặn truy cập trực tiếp
}

// Kiểm tra Redux có chưa
if ( ! class_exists( 'Redux' ) ) {
    add_action( 'admin_notices', function() {
        echo '<div class="notice notice-error"><p><strong>Business Info</strong> cần plugin <a href="https://github.com/reduxframework/redux-framework/releases/tag/3.6.18" target="_blank">Redux Framework 3.6.x</a> để hoạt động.</p></div>';
    });
    return;
}

/**
 * === Redux Config ===
 */
$opt_name = 'business_info';

// Cấu hình panel
$args = array(
    'opt_name'           => $opt_name,
    'display_name'       => 'Thông tin DN',
    'display_version'    => '1.0.0',
    'menu_type'          => 'menu',
    'allow_sub_menu'     => true,
    'menu_title'         => 'Thông tin DN',
    'page_title'         => 'Cấu hình Doanh nghiệp',
    'page_slug'          => 'business-info',
    'menu_icon'          => 'dashicons-building',
    'page_priority'      => 3,
    'customizer'         => false,
    'dev_mode'           => false,
    'update_notice'      => false,
    'output'             => false,
    'compiler'           => false,
);
Redux::setArgs( $opt_name, $args );

// Section 1: Thông tin chung
Redux::setSection( $opt_name, array(
    'title'  => 'Thông tin chung',
    'id'     => 'general_info',
    'fields' => array(
        array(
            'id'    => 'company_name',
            'type'  => 'text',
            'title' => 'Tên công ty',
        ),
        array(
            'id'    => 'company_logo',
            'type'  => 'media',
            'title' => 'Logo',
        ),
        array(
            'id'    => 'company_email',
            'type'  => 'text',
            'title' => 'Email',
        ),
        array(
            'id'    => 'company_hotline',
            'type'  => 'text',
            'title' => 'Hotline',
        ),
        array(
            'id'    => 'company_phone',
            'type'  => 'text',
            'title' => 'Số điện thoại',
        ),
        array(
            'id'    => 'company_address',
            'type'  => 'textarea',
            'title' => 'Địa chỉ',
        ),
        array(
            'id'    => 'company_website',
            'type'  => 'text',
            'title' => 'Website',
        ),
        array(
            'id'    => 'company_map',
            'type'  => 'text',
            'title' => 'Link bản đồ',
        ),
    ),
) );

// Section 2: Mạng xã hội
Redux::setSection( $opt_name, array(
    'title'  => 'Mạng xã hội',
    'id'     => 'social_info',
    'fields' => array(
        array(
            'id'    => 'facebook',
            'type'  => 'text',
            'title' => 'Facebook',
        ),
        array(
            'id'    => 'linkedin',
            'type'  => 'text',
            'title' => 'LinkedIn',
        ),
        array(
            'id'    => 'youtube',
            'type'  => 'text',
            'title' => 'YouTube',
        ),
    ),
) );

// Section 3: Footer & SEO
Redux::setSection( $opt_name, array(
    'title'  => 'Footer & SEO',
    'id'     => 'footer_seo',
    'fields' => array(
        array(
            'id'    => 'footer_text',
            'type'  => 'textarea',
            'title' => 'Nội dung Footer',
        ),
        array(
            'id'    => 'meta_description',
            'type'  => 'textarea',
            'title' => 'Meta Description',
        ),
    ),
) );

/**
 * === SHORTCODES ===
 */
function business_info_get_options() {
    return get_option( 'business_info' );
}

// Logo
add_shortcode( 'business_logo', function() {
    $options = business_info_get_options();
    if ( empty( $options['company_logo']['url'] ) ) return '';
    return '<img class="w-24 sm:w-32 h-auto" src="' . esc_url( $options['company_logo']['url'] ) . '" alt="' . esc_attr( $options['company_name'] ) . ' Logo">';
});

// Tên công ty
add_shortcode( 'business_name', function() {
    $options = business_info_get_options();
    return ! empty( $options['company_name'] ) ? esc_html( $options['company_name'] ) : '';
});

// Email công ty (Tạo link mailto:)
add_shortcode( 'business_email', function() {
    $options = business_info_get_options();
    if ( empty( $options['company_email'] ) ) return '';
    return '<a href="mailto:' . antispambot( esc_attr( $options['company_email'] ) ) . '">' . antispambot( esc_html( $options['company_email'] ) ) . '</a>';
});

// Hotline công ty (Tạo link tel:)
add_shortcode('business_hotline', function() {
    $options = business_info_get_options();
    if ( empty( $options['company_hotline'] ) ) return '';
    // Xóa khoảng trắng để link tel hoạt động tốt
    $hotline_href = preg_replace( '/\s+/', '', $options['company_hotline'] );
    return '<a href="tel:' . esc_attr( $hotline_href ) . '">' . esc_html( $options['company_hotline'] ) . '</a>';
});

// Số điện thoại công ty (Tạo link tel:)
add_shortcode('business_phone', function() {
    $options = business_info_get_options();
    if ( empty( $options['company_phone'] ) ) return '';
    $phone_href = preg_replace( '/\s+/', '', $options['company_phone'] );
    return '<a href="tel:' . esc_attr( $phone_href ) . '">' . esc_html( $options['company_phone'] ) . '</a>';
});

// Địa chỉ
add_shortcode( 'business_address', function() {
    $options = business_info_get_options();
    return ! empty( $options['company_address'] ) ? '<span>' . esc_html( $options['company_address'] ) . '</span>' : '';
});

// Website công ty (Tạo link <a>)
add_shortcode( 'business_website', function() {
    $options = business_info_get_options();
    if ( empty( $options['company_website'] ) ) return '';
    return '<a href="' . esc_url( $options['company_website'] ) . '" target="_blank" rel="noopener noreferrer">' . esc_html( $options['company_website'] ) . '</a>';
});

// Link bản đồ (Tạo link <a>)
add_shortcode( 'business_map', function() {
    $options = business_info_get_options();
    if ( empty( $options['company_map'] ) ) return '';
    return '<a href="' . esc_url( $options['company_map'] ) . '" target="_blank" rel="noopener noreferrer">Xem trên bản đồ</a>';
});
//=======================================Shortcode Mạng xã hội=======================================//
// Facebook
add_shortcode( 'business_facebook', function() {
    $options = business_info_get_options();
    return ! empty( $options['facebook'] )
        ? '<a href="' . esc_url( $options['facebook'] ) . '" target="_blank">Facebook</a>'
        : '';
});

// LinkedIn
add_shortcode( 'business_linkedin', function() {
    $options = business_info_get_options();
    return ! empty( $options['linkedin'] )
        ? '<a href="' . esc_url( $options['linkedin'] ) . '" target="_blank">LinkedIn</a>'
        : '';
});

// YouTube
add_shortcode( 'business_youtube', function() {
    $options = business_info_get_options();
    return ! empty( $options['youtube'] )
        ? '<a href="' . esc_url( $options['youtube'] ) . '" target="_blank">YouTube</a>'
        : '';
});


//===============================================Shortcode Footer======================================//
// Footer
add_shortcode( 'business_footer', function() {
    $options = business_info_get_options();
    return ! empty( $options['footer_text'] )
        ? wpautop( esc_html( $options['footer_text'] ) )
        : '';
});

// Shortcode tổng hợp
add_shortcode( 'business_info', function() {
    ob_start();
    echo do_shortcode('[business_logo]');
    echo '<h3>' . do_shortcode('[business_name]') . '</h3>';
    echo do_shortcode('[business_address]');

    echo '<p><strong>Email:</strong> ' . do_shortcode('[business_email]') . '</p>';
    echo '<p><strong>Hotline:</strong> ' . do_shortcode('[business_hotline]') . '</p>';
    echo '<p><strong>Điện thoại:</strong> ' . do_shortcode('[business_phone]') . '</p>';
    echo '<p><strong>Website:</strong> ' . do_shortcode('[business_website]') . '</p>';

    echo '<p>' . do_shortcode('[business_facebook]') . ' | ' . do_shortcode('[business_linkedin]') . ' | ' . do_shortcode('[business_youtube]') . '</p>';
    echo do_shortcode('[business_footer]');
    return ob_get_clean();
});

/**
 * === GUTENBERG BLOCKS ===
 */
function business_info_register_blocks() {
    // Map block => shortcode
    $blocks = array(
        'business/info'     => 'business_info',
        'business/logo'     => 'business_logo',
        'business/name'     => 'business_name',
        'business/address'  => 'business_address',
        'business/facebook' => 'business_facebook',
        'business/linkedin' => 'business_linkedin',
        'business/youtube'  => 'business_youtube',
        'business/footer'   => 'business_footer',
    );

    foreach ( $blocks as $block => $shortcode ) {
        register_block_type( $block, array(
            'render_callback' => function() use ( $shortcode ) {
                return do_shortcode( "[$shortcode]" );
            }
        ));
    }
}
add_action( 'init', 'business_info_register_blocks' );
