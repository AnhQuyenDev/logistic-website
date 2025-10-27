<?php
/*
Plugin Name: Business Info
Description: Plugin quản lý thông tin doanh nghiệp + quản lý đối tác/khách hàng theo nhóm (Redux Framework + CRUD).
Version: 4.1
Author: Nguyễn Viết Anh Quyền
*/

if ( ! defined( 'ABSPATH' ) ) exit;

// ========================== KIỂM TRA REDUX ==========================
if ( ! class_exists( 'Redux' ) ) {
    add_action( 'admin_notices', function() {
        echo '<div class="notice notice-error"><p><strong>Business Info</strong> cần plugin <a href="https://github.com/reduxframework/redux-framework/releases/tag/3.6.18" target="_blank">Redux Framework 3.6.x</a> để hoạt động.</p></div>';
    });
    return;
}

// ========================== TẠO MENU CHA VÀ SUBMENU ==========================
// Ghi chú: ta sẽ bỏ submenu trùng "Thông tin DN" bằng cách remove_submenu_page sau khi tạo menu
add_action('admin_menu', function() {
    // Menu cha - callback hiện trang tổng (nếu muốn hiển thị nội dung)
    add_menu_page(
        'Thông tin Doanh nghiệp',
        'Thông tin DN',
        'manage_options',
        'business_main_menu',
        'business_main_page',
        'dashicons-building',
        3
    );

    // Submenu: CRUD đối tác
    add_submenu_page(
        'business_main_menu',
        'Quản lý Đối tác',
        'Đối tác / Khách hàng',
        'manage_options',
        'business-partners',
        'business_partners_page'
    );

    // LƯU Ý: Redux sẽ tạo mục "Cấu hình DN" dựa vào page_parent (xem phần Redux setArgs).
    // Bây giờ gỡ bỏ submenu mặc định trùng với parent để tránh menu thừa.
}, 9 );

// Sau cùng, remove cái submenu trùng (nếu WordPress đã tự thêm), đẩy priority cao để chạy sau khi tất cả menu đã đăng ký
add_action('admin_menu', function() {
    remove_submenu_page( 'business_main_menu', 'business_main_menu' );
}, 999 );

// Callback trang cha (nếu bấm vào icon menu chính)
function business_main_page(){
    echo '<div class="wrap"><h1>Quản lý Thông tin Doanh nghiệp</h1><p>Chọn mục con để quản lý.</p></div>';
}

// ========================== CẤU HÌNH REDUX ==========================
$opt_name = 'business_info';
Redux::setArgs( $opt_name, array(
    'opt_name'        => $opt_name,
    'display_name'    => 'Thông tin DN',
    'menu_type'       => 'submenu',
    'allow_sub_menu'  => true,
    'page_parent'     => 'business_main_menu',
    'menu_title'      => 'Cấu hình DN',
    'page_title'      => 'Cấu hình Doanh nghiệp',
    'page_slug'       => 'business-info',
    'dev_mode'        => false,
    'update_notice'   => false,
    'show_import_export' => false,
));


// Enqueue fontawesome cho admin
function bp_enqueue_admin_assets() {
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css' );
}
add_action( 'admin_enqueue_scripts', 'bp_enqueue_admin_assets' );

// ========================== SECTION: Thông tin chung (Redux) ==========================
Redux::setSection( $opt_name, array(
    'title'  => 'Thông tin chung',
    'id'     => 'general_info',
    'fields' => array(
        array( 'id' => 'company_name', 'type' => 'text', 'title' => 'Tên công ty' ),
        array( 'id' => 'company_logo', 'type' => 'media', 'title' => 'Logo' ),
        array( 'id' => 'company_email', 'type' => 'text', 'title' => 'Email' ),
        array( 'id' => 'company_hotline', 'type' => 'text', 'title' => 'Hotline' ),
        array( 'id' => 'company_phone', 'type' => 'text', 'title' => 'Số điện thoại' ),
        array( 'id' => 'company_address', 'type' => 'textarea', 'title' => 'Địa chỉ' ),
        array( 'id' => 'company_website', 'type' => 'text', 'title' => 'Website' ),
        array(
            'id'       => 'company_map',
            'type'     => 'textarea',
            'title'    => 'Bản đồ Google Maps (iframe)',
            'subtitle' => 'Dán mã nhúng (iframe) của Google Maps vào đây.',
            'validate' => 'html_custom', // Cho phép HTML thô
            'allowed_html' => array( // Giới hạn thẻ an toàn (iframe)
                'iframe' => array(
                    'src' => array(),
                    'width' => array(),
                    'height' => array(),
                    'style' => array(),
                    'allowfullscreen' => array(),
                    'loading' => array(),
                    'referrerpolicy' => array(),
                ),
            ),
        ),
    ),
));

// ========================== SECTION: Mạng xã hội (Redux) ==========================
Redux::setSection( $opt_name, array(
    'title'  => 'Mạng xã hội',
    'id'     => 'social_info',
    'fields' => array(
        array( 'id' => 'facebook', 'type' => 'text', 'title' => 'Facebook' ),
        array( 'id' => 'linkedin', 'type' => 'text', 'title' => 'LinkedIn' ),
        array( 'id' => 'youtube', 'type' => 'text', 'title' => 'YouTube' ),
    ),
));

// ========================== SECTION: Footer & SEO (Redux) ==========================
Redux::setSection( $opt_name, array(
    'title'  => 'Footer & SEO',
    'id'     => 'footer_seo',
    'fields' => array(
        array( 'id' => 'footer_text', 'type' => 'textarea', 'title' => 'Nội dung Footer' ),
        array( 'id' => 'meta_description', 'type' => 'textarea', 'title' => 'Meta Description' ),
    ),
));

// ========================== TẠO BẢNG ĐỐI TÁC ==========================
register_activation_hook( __FILE__, function() {
    global $wpdb;
    $table = $wpdb->prefix . 'business_partners';
    $charset = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE IF NOT EXISTS $table (
        id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        logo VARCHAR(255) DEFAULT '',
        website VARCHAR(255) DEFAULT '',
        group_name VARCHAR(255) DEFAULT '',
        order_index INT(11) DEFAULT 0,
        width INT(11) DEFAULT 200,
        height INT(11) DEFAULT 150,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) $charset;";
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
});

// ========================== CRUD LOGIC ==========================
function business_partners_crud_callback() {
    global $wpdb;
    $table = $wpdb->prefix . 'business_partners';

    // === Cập nhật ===
    if ( isset($_POST['bp_update']) && check_admin_referer('bp_nonce_action','bp_nonce_field') ) {
        $id          = intval($_POST['bp_edit_id']);
        $new_order   = intval($_POST['bp_order']);
    
        // Lấy order cũ
        $old_order = $wpdb->get_var( $wpdb->prepare("SELECT order_index FROM $table WHERE id = %d", $id) );

        if ( $old_order != $new_order ) {
            // Kiểm tra xem có thằng nào đang giữ order đó không
            $conflict_id = $wpdb->get_var( $wpdb->prepare("SELECT id FROM $table WHERE order_index = %d", $new_order) );
    
            if ( $conflict_id ) {
                // Nếu có, hoán đổi: thằng kia lấy order cũ
                $wpdb->update( $table, array( 'order_index' => $old_order ), array( 'id' => $conflict_id ) );
            }
        }

        // Giờ mới cập nhật đối tác hiện tại
        $wpdb->update( $table, array(
            'name'       => sanitize_text_field( $_POST['bp_name'] ),
            'logo'       => esc_url_raw( $_POST['bp_logo'] ),
            'website'    => esc_url_raw( $_POST['bp_website'] ),
            'group_name' => sanitize_text_field( $_POST['bp_group'] ),
            'order_index'=> $new_order,
            'width'      => intval($_POST['bp_width']),
            'height'     => intval($_POST['bp_height']),
        ), array( 'id' => $id ) );

        echo '<div class="notice notice-success is-dismissible"><p>Đã cập nhật thông tin đối tác và hoán đổi thứ tự!</p></div>';
}

    // === Thêm mới ===
    if ( isset($_POST['bp_add']) && check_admin_referer('bp_nonce_action','bp_nonce_field') ) {
        $new_order = intval($_POST['bp_order']);
    
        // 1 Không cho STT âm
        if ( $new_order < 0 ) {
            echo '<div class="notice notice-error is-dismissible"><p>STT không được nhỏ hơn 0!</p></div>';
        } else {
            // 2️ Kiểm tra xem có ai đang giữ STT đó không
            $conflict_id = $wpdb->get_var( $wpdb->prepare("SELECT id FROM $table WHERE order_index = %d", $new_order) );
    
            if ( $conflict_id ) {
                // Lấy STT lớn nhất hiện có
                $max_order = $wpdb->get_var("SELECT MAX(order_index) FROM $table");
                $next_order = $max_order ? $max_order + 1 : 1;
    
                // Cập nhật thằng bị trùng sang STT mới (đẩy xuống)
                $wpdb->update( $table, array( 'order_index' => $next_order ), array( 'id' => $conflict_id ) );
            }
    
            // 3️ Thêm đối tác mới
            $wpdb->insert( $table, array(
                'name'       => sanitize_text_field( $_POST['bp_name'] ),
                'logo'       => esc_url_raw( $_POST['bp_logo'] ),
                'website'    => esc_url_raw( $_POST['bp_website'] ),
                'group_name' => sanitize_text_field( $_POST['bp_group'] ),
                'order_index'=> $new_order,
                'width'      => intval($_POST['bp_width']),
                'height'     => intval($_POST['bp_height']),
                'created_at' => current_time('mysql'),
            ));
    
            echo '<div class="notice notice-success is-dismissible"><p>Thêm đối tác thành công! (Đã xử lý xung đột thứ tự nếu có)</p></div>';
        }
    }


    // === Xóa ===
    if ( isset($_POST['bp_delete']) && check_admin_referer('bp_nonce_action','bp_nonce_field') ) {
        $wpdb->delete( $table, array( 'id' => intval($_POST['bp_id']) ) );
        echo '<div class="notice notice-success is-dismissible"><p>️ Đã xóa đối tác!</p></div>';
    }

    // === Load dữ liệu để sửa ===
    $edit_partner = null;
    if ( isset($_POST['bp_edit']) && check_admin_referer('bp_nonce_action','bp_nonce_field') ) {
        $id = intval($_POST['bp_id']);
        $edit_partner = $wpdb->get_row( $wpdb->prepare("SELECT * FROM $table WHERE id = %d", $id) );
    }

    // Sắp theo order_index tăng dần, id desc để giữ thứ tự rõ ràng
    $partners = $wpdb->get_results( "SELECT * FROM $table ORDER BY order_index ASC, id DESC" );

    ob_start();
    ?>
    <div style="padding:15px;">
        <h2><?php echo $edit_partner ? '<i class="fa-solid fa-pen-to-square"></i> Cập nhật đối tác' : '<i class="fa-solid fa-plus"></i> Thêm Đối tác / Khách hàng'; ?></h2>
        <form method="post">
            <?php wp_nonce_field('bp_nonce_action','bp_nonce_field'); ?>
            <?php if ( $edit_partner ): ?>
                <input type="hidden" name="bp_edit_id" value="<?php echo $edit_partner->id; ?>">
            <?php endif; ?>

            <table class="form-table">
                <tr>
                    <th scope="row"><label for="bp_name">Tên đối tác</label></th>
                    <td>
                        <input type="text" id="bp_name" name="bp_name" class="regular-text" required
                               value="<?php echo esc_attr($edit_partner->name ?? ''); ?>">
                    </td>
                </tr>

                <tr>
                    <th scope="row"><label for="bp_order">STT (số thứ tự)</label></th>
                    <td>
                        <input type="number" id="bp_order" name="bp_order" class="regular-text" value="<?php echo esc_attr($edit_partner->order_index ?? 0); ?>">
                        <p class="description">Số thứ tự nhỏ hơn sẽ hiển thị trước.</p>
                    </td>
                </tr>

                <tr>
                    <th scope="row"><label for="bp_width">Chiều rộng (px)</label></th>
                    <td>
                        <input type="number" id="bp_width" name="bp_width" class="regular-text" value="<?php echo esc_attr($edit_partner->width ?? 200); ?>">
                    </td>
                </tr>

                <tr>
                    <th scope="row"><label for="bp_height">Chiều cao (px)</label></th>
                    <td>
                        <input type="number" id="bp_height" name="bp_height" class="regular-text" value="<?php echo esc_attr($edit_partner->height ?? 150); ?>">
                    </td>
                </tr>

                <tr>
                    <th scope="row"><label>Logo</label></th>
                    <td>
                        <input type="hidden" name="bp_logo" id="bp_logo" value="<?php echo esc_attr($edit_partner->logo ?? ''); ?>">
                        <img id="bp_logo_preview" src="<?php echo esc_url($edit_partner->logo ?? ''); ?>"
                            style="max-height:50px;<?php echo empty($edit_partner->logo)?'display:none;':'' ?>margin-right:10px;vertical-align:middle;">
                        <button type="button" class="button" id="bp_logo_button">
                            <?php echo $edit_partner ? 'Thay logo' : 'Chọn logo'; ?>
                        </button>
                        <button type="button" class="button" id="bp_logo_remove" style="<?php echo empty($edit_partner->logo)?'display:none;':'' ?>">
                            Xoá
                        </button>
                    </td>
                </tr>

                <tr>
                    <th scope="row"><label for="bp_website">Website</label></th>
                    <td>
                        <input type="url" id="bp_website" name="bp_website" class="regular-text"
                               value="<?php echo esc_attr($edit_partner->website ?? ''); ?>">
                    </td>
                </tr>

                <tr>
                    <th scope="row"><label for="bp_group">Nhóm</label></th>
                    <td>
                        <input type="text" id="bp_group" name="bp_group" class="regular-text"
                               value="<?php echo esc_attr($edit_partner->group_name ?? ''); ?>">
                    </td>
                </tr>
            </table>

            <?php if ( $edit_partner ): ?>
                <p class="submit">
                    <button class="button button-primary" name="bp_update">Cập nhật</button>
                    <a href="<?php echo admin_url('admin.php?page=business-partners'); ?>" class="button">Hủy</a>
                </p>
            <?php else: ?>
                <p class="submit">
                    <button class="button button-primary" name="bp_add">Thêm</button>
                </p>
            <?php endif; ?>
        </form>

        <h2><i class="fa-solid fa-list-check" style="margin-right:8px;"></i>Danh sách Đối tác</h2>
        <table class="wp-list-table widefat striped fixed">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên</th>
                    <th scope="col">STT</th>
                    <th scope="col">Logo</th>
                    <th scope="col">Kích thước</th>
                    <th scope="col">Website</th>
                    <th scope="col">Nhóm</th>
                    <th scope="col">Ngày tạo</th>
                    <th scope="col">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($partners)): ?>
                    <tr><td colspan="9">Chưa có đối tác nào.</td></tr>
                <?php else:
                foreach ($partners as $p): ?>
                    <tr>
                        <td><?php echo esc_html($p->id); ?></td>
                        <td><strong><?php echo esc_html($p->name); ?></strong></td>
                        <td><?php echo esc_html($p->order_index); ?></td>
                        <td><?php if ($p->logo) echo '<img src="'.esc_url($p->logo).'" style="max-height:40px;">'; ?></td>
                        <td><?php echo intval($p->width) . ' x ' . intval($p->height); ?></td>
                        <td><?php if ($p->website) echo '<a href="'.esc_url($p->website).'" target="_blank" rel="noopener noreferrer">'.esc_html($p->website).'</a>'; ?></td>
                        <td><?php echo esc_html($p->group_name); ?></td>
                        <td><?php echo esc_html($p->created_at); ?></td>
                        <td>
                            <form method="post" style="display:inline;">
                                <?php wp_nonce_field('bp_nonce_action','bp_nonce_field'); ?>
                                <input type="hidden" name="bp_id" value="<?php echo $p->id; ?>">
                                <button name="bp_edit" class="button button-primary" title="Sửa"><i class="fa-solid fa-pen"></i></button>
                            </form>
                            <form method="post" style="display:inline;">
                                <?php wp_nonce_field('bp_nonce_action','bp_nonce_field'); ?>
                                <input type="hidden" name="bp_id" value="<?php echo $p->id; ?>">
                                <button name="bp_delete"
                                        class="button button-secondary"
                                        style="background:#dc3545;border-color:#dc3545;color:#fff;"
                                        onclick="return confirm('Xóa đối tác này?')"
                                        title="Xóa">
                                  <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; endif; ?>
            </tbody>
        </table>
    </div>
    <?php
    return ob_get_clean();
}


function business_partners_page() {
    echo '<div class="wrap"><h1>Đối tác / Khách hàng</h1>';
    echo business_partners_crud_callback();
    echo '</div>';
}

// ========================== SHORTCODES ==========================
function business_info_get_options() {
    return get_option( 'business_info' );
}

add_shortcode( 'business_logo', function() {
    $o = business_info_get_options();
    if ( empty( $o['company_logo']['url'] ) ) return '';
    return '<img class="w-24 sm:w-32 h-auto" src="' . esc_url( $o['company_logo']['url'] ) . '" alt="' . esc_attr( $o['company_name'] ) . ' Logo">';
});

add_shortcode( 'business_name', fn()=> esc_html( business_info_get_options()['company_name'] ?? '' ) );

add_shortcode( 'business_email', function() {
    $o = business_info_get_options();
    if ( empty( $o['company_email'] ) ) return '';
    return '<a href="mailto:' . antispambot( esc_attr( $o['company_email'] ) ) . '">' . antispambot( esc_html( $o['company_email'] ) ) . '</a>';
});

add_shortcode( 'business_hotline', function() {
    $o = business_info_get_options();
    if ( empty( $o['company_hotline'] ) ) return '';
    $tel = preg_replace( '/\s+/', '', $o['company_hotline'] );
    return '<a href="tel:' . esc_attr( $tel ) . '">' . esc_html( $o['company_hotline'] ) . '</a>';
});

add_shortcode( 'business_phone', function() {
    $o = business_info_get_options();
    if ( empty( $o['company_phone'] ) ) return '';
    $tel = preg_replace( '/\s+/', '', $o['company_phone'] );
    return '<a href="tel:' . esc_attr( $tel ) . '">' . esc_html( $o['company_phone'] ) . '</a>';
});

add_shortcode( 'business_address', fn()=> '<span>' . esc_html( business_info_get_options()['company_address'] ?? '' ) . '</span>' );

add_shortcode( 'business_website', function() {
    $o = business_info_get_options();
    if ( empty( $o['company_website'] ) ) return '';
    return '<a href="' . esc_url( $o['company_website'] ) . '" target="_blank" rel="noopener noreferrer">' . esc_html( $o['company_website'] ) . '</a>';
});

add_shortcode( 'business_map', function() {
    $o = business_info_get_options();
    if ( empty( $o['company_map'] ) ) return '';

    $map = $o['company_map'];

    // Nếu người dùng dán iframe → hiển thị raw HTML
    if ( strpos( $map, '<iframe' ) !== false ) {
        return do_shortcode( $map ); // Cho phép render iframe
    }

    // Nếu chỉ dán link → hiển thị link bình thường
    return '<a href="' . esc_url( $map ) . '" target="_blank" rel="noopener noreferrer">Xem trên bản đồ</a>';
});


add_shortcode( 'business_facebook', fn()=>business_social_link('facebook','Facebook'));
add_shortcode( 'business_linkedin', fn()=>business_social_link('linkedin','LinkedIn'));
add_shortcode( 'business_youtube', fn()=>business_social_link('youtube','YouTube'));

function business_social_link($id,$label){
    $o = business_info_get_options();
    return ! empty( $o[$id] ) ? '<a href="' . esc_url( $o[$id] ) . '" target="_blank">'.$label.'</a>' : '';
}

add_shortcode( 'business_footer', function() {
    $o = business_info_get_options();
    return ! empty( $o['footer_text'] ) ? wpautop( esc_html( $o['footer_text'] ) ) : '';
});

// ========================== SHORTCODE ĐỐI TÁC (với border đỏ & left alignment khi wrap) ==========================
add_shortcode( 'business_partners', function() {
    global $wpdb;
    $table = $wpdb->prefix . 'business_partners';
    $partners = $wpdb->get_results( "SELECT * FROM $table ORDER BY order_index ASC, id DESC" );

    if ( empty( $partners ) ) return '';

    ob_start();
    ?>
    <style>
        .business-partners {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
            gap: 20px;
            padding: 20px 0;
        }

        .partner-item {
            flex: 1 1 calc(20% - 20px);
            max-width: calc(20% - 20px);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .partner-item-inner {
            background: #fff;
            border: 2px solid #e53935;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            transition: all .25s ease;
        }

        .partner-item-inner:hover {
            transform: translateY(-4px);
            box-shadow: 0 4px 10px rgba(229, 57, 53, 0.25);
        }

        .partner-item img {
            width: auto;
            height: auto;
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            filter: grayscale(30%);
            transition: all .3s ease;
            display: block;
            margin: auto;
        }

        .partner-item img:hover {
            filter: grayscale(0%);
            transform: scale(1.05);
        }

        /* Tablet: 2 logo mỗi hàng */
        @media (max-width: 992px) {
            .partner-item {
                flex: 1 1 calc(50% - 20px);
                max-width: calc(50% - 20px);
            }
        }

        /* Mobile: 1 logo mỗi hàng */
        @media (max-width: 600px) {
            .partner-item {
                flex: 1 1 100%;
                max-width: 100%;
                justify-content: center;
            }
        }
    </style>

    <div class="business-partners">
        <?php foreach ( $partners as $p ): ?>
            <?php if ( $p->logo ): ?>
                <div class="partner-item">
                    <div class="partner-item-inner" 
                         style="width:<?php echo intval($p->width) ?: 180; ?>px;
                                height:<?php echo intval($p->height) ?: 150; ?>px;">
                        <?php if ( $p->website ): ?>
                            <a href="<?php echo esc_url($p->website); ?>" target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo esc_url($p->logo); ?>" alt="<?php echo esc_attr($p->name); ?>">
                            </a>
                        <?php else: ?>
                            <img src="<?php echo esc_url($p->logo); ?>" alt="<?php echo esc_attr($p->name); ?>">
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <?php
    return ob_get_clean();
});

// ========================== JQUERY MEDIA: Upload Logo (admin) ==========================
add_action('admin_enqueue_scripts', function() {
    wp_enqueue_media();
    wp_enqueue_script('jquery');
    $script = <<<JS
jQuery(document).ready(function($){
    function initLogoUploader(btnSelector, inputSelector, previewSelector, removeSelector, titleText){
        var frame;
        $(btnSelector).on('click', function(e){
            e.preventDefault();
            if (frame) { frame.open(); return; }
            frame = wp.media({
                title: titleText || 'Chọn ảnh',
                button: { text: 'Chọn ảnh' },
                multiple: false
            });
            frame.on('select', function(){
                var attachment = frame.state().get('selection').first().toJSON();
                $(inputSelector).val(attachment.url);
                $(previewSelector).attr('src', attachment.url).show();
                $(removeSelector).show();
            });
            frame.open();
        });

        $(removeSelector).on('click', function(e){
            e.preventDefault();
            $(inputSelector).val('');
            $(previewSelector).hide();
            $(this).hide();
        });
    }

    initLogoUploader('#bp_logo_button', '#bp_logo', '#bp_logo_preview', '#bp_logo_remove', 'Chọn logo đối tác');
});
JS;
    wp_add_inline_script( 'jquery', $script );
});
