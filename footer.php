<footer class="footer-section bg-[#0a0a0a] text-white py-12 mt-16 md:py-5 px-4 md:px-8 lg:px-16">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3 md:gap-12">
            <div class="flex flex-col items-center my-2 md:my-14 md:items-start text-center md:text-left">
                <h3 class="font-bold text-xl mb-4">Về chúng tôi</h3>
                <div class="flex items-center mb-4">
                    <?php echo do_shortcode('[business_logo]'); ?>      
                    <?php echo do_shortcode('[business_name]'); ?>                   
                </div>
                <p class="text-sm leading-relaxed mb-4">Đơn vị cung cấp dịch vụ vận chuyển quốc tế và thủ tục thông quan!</p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/imgi_17__dmca_premi_badge_2.png" alt="DMCA Protected" class="w-32 h-auto" /> 
            </div>

            <div class="flex flex-col items-center my-2 md:my-14 md:items-start text-center md:text-left">
                <h3 class="font-bold text-xl mb-4 border-b-4 border-red-800">Liên kết</h3>
                <?php 
                    wp_nav_menu( array(
                        'theme_location' => 'footer-menu',
                        'container'      => 'ul',
                        'menu_class'     => 'space-y-2 text-sm',
                    ) );
                ?>
            </div>

            <div class="flex flex-col items-center my-2 md:my-14 md:items-start text-center md:text-left">
                <h3 class="font-bold text-xl mb-4 border-b-4 border-red-800">Liên hệ</h3>
                <ul class="space-y-2 text-sm">
                    <li>Địa chỉ: <?php echo do_shortcode('[business_address]'); ?></li>
                    <li>Hotline: <?php echo do_shortcode('[business_hotline]'); ?></li>
                    <li>E-mail: <?php echo do_shortcode('[business_email]'); ?></li>
                    <li>Website: <?php echo do_shortcode('[business_website]'); ?></li>
                    <li>SĐT: <?php echo do_shortcode('[business_phone]'); ?></li>
                </ul>
            </div>

            <div class="flex flex-col items-center my-2 md:my-14 md:items-start text-center md:text-left">
                <h3 class="font-bold text-xl mb-4">Nhận tư vấn miễn phí</h3>
                <input type="email" placeholder="Email*" class="w-full p-3 rounded-md mb-3 bg-white bg-opacity-20 text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white" />
                <textarea placeholder="Thông tin cần tư vấn" rows="3" class="w-full p-3 rounded-md mb-4 bg-white bg-opacity-20 text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white"></textarea>
                <button class="bg-primary hover:bg-primary-hover text-white font-bold py-3 px-6 rounded-md w-full transition duration-300">Tư vấn ngay</button>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/imgi_18_Da-thong-bao.png" alt="Đã thông báo Bộ Công Thương" class="w-40 h-auto mt-6" /> 
            </div>
        </div>

        <div class="border-t border-white border-opacity-30 mt-12 pt-6 text-center text-sm flex flex-col md:flex-row justify-center items-center gap-2 md:space-y-0">
            <p class="border-r-2 border-white px-2">&copy; 2021. All rights reserved. Designed by INNOCOM</p>
            <div class="flex items-center space-x-6">
                <a href="tel:0886115726" class="border-r-2 border-white px-2 hover:underline">08.8611.5726</a>
                <a href="http://hptoancau.com" target="_blank" class="hover:underline">hptoancau.com</a>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>