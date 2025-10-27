<?php get_header(); ?>
    <section class="relative w-full h-[400px] bg-cover bg-center" style="background-image:url(/wp-content/themes/logictis-theme/assets/images/imgi_14_18.jpg) !important"></section>

    <section class="relative w-full bg-[#fccccc] py-20 px-4 overflow-hidden">
        <div class="absolute inset-0 z-0 flex items-center justify-center opacity-40">
            <img src="/wp-content/themes/logictis-theme/assets/images/image.png" class="h-full w-full object-cover">
        </div>

        <div class="relative z-10 max-w-4xl mx-auto text-center text-black">
            <h2 class="text-3xl md:text-4xl font-bold uppercase tracking-wide">
                Nhận cước vận chuyển xuất nhập khẩu nhanh chóng!
            </h2>
            <p class="mt-4 text-lg max-w-2xl mx-auto">
                Vui lòng điền các thông tin sau để chúng tôi cung cấp báo giá chi tiết cho bạn
            </p>

            <form action="#" method="POST" class="mt-12 text-left">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <input type="text" name="subject" id="subject" placeholder="Chủ đề" class="w-full bg-white/95 backdrop-blur-sm rounded-md border-0 p-4 text-gray-900 placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-orange-500 transition">
                    </div>
                    <div>
                        <input type="text" name="full_name" id="full_name" placeholder="Họ tên" class="w-full bg-white/95 backdrop-blur-sm rounded-md border-0 p-4 text-gray-900 placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-orange-500 transition">
                    </div>
                    <div>
                        <input type="email" name="email" id="email" placeholder="Địa chỉ email" class="w-full bg-white/95 backdrop-blur-sm rounded-md border-0 p-4 text-gray-900 placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-orange-500 transition">
                    </div>
                    <div>
                        <input type="tel" name="phone" id="phone" placeholder="Nhập số điện thoại" class="w-full bg-white/95 backdrop-blur-sm rounded-md border-0 p-4 text-gray-900 placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-orange-500 transition">
                    </div>
                    <div class="md:col-span-2">
                        <input type="text" name="locations" id="locations" placeholder="Điểm đi/ điểm đến cụ thể" class="w-full bg-white/95 backdrop-blur-sm rounded-md border-0 p-4 text-gray-900 placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-orange-500 transition">
                    </div>
                    <div class="md:col-span-2">
                        <input type="text" name="incoterm" id="incoterm" placeholder="Điều kiện XNK (Incoterm - Fas, Exw...)" class="w-full bg-white/95 backdrop-blur-sm rounded-md border-0 p-4 text-gray-900 placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-orange-500 transition">
                    </div>
                    <div class="md:col-span-2">
                        <textarea name="details" id="details" rows="5" placeholder="Thông tin chi tiết về mặt hàng (Tên cụ thể, số lượng, trọng lượng, kích thước, catalogue...)" class="w-full bg-white/95 backdrop-blur-sm rounded-md border-0 p-4 text-gray-900 placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-orange-500 transition"></textarea>
                    </div>
                </div>

                <div class="mt-8 text-center">
                    <button type="submit" class="bg-[#e74c3c] hover:bg-[#c0392b] text-white font-bold uppercase tracking-wider py-3 px-10 rounded-full shadow-lg transition-all transform hover:scale-105">
                        Gửi ngay
                    </button>
                </div>
            </form>
        </div>
    </section>

    <section class="bg-contain bg-center py-16 sm:py-24" style="background-image:url(/wp-content/themes/logictis-theme/assets/images/bg-body.png) !important">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-xl shadow-2xl overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div class="p-8 sm:p-12">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 border-l-4 border-blue-600 pl-4">Địa điểm văn phòng</h3>
                            <p class="mt-4 text-lg font-semibold text-gray-800"><?php echo do_shortcode('[business_name]'); ?></p>
                        </div>

                        <div class="mt-8 text-gray-600 text-base">
                            <p class="font-bold text-gray-700">Trụ sở chính</p>
                            <p class="mt-1"><?php echo do_shortcode('[business_address]'); ?></p>

                            <!-- <ul class="mt-6 space-y-6">
                                <li>
                                    <p class="font-bold text-gray-700">VP Hà Nội</p>
                                    <p class="mt-1">Số 13, lô 13 - NO03 - KĐT Đền Lừ 1 - Khu đô thị Đền Lừ, Phường Hoàng - Hà Nội</p>
                                </li>
                                <li>
                                    <p class="font-bold text-gray-700">VP Hải Phòng</p>
                                    <p class="mt-1">Công ty TNHH HP Toàn Cầu – Chi nhánh Hải Phòng</p>
                                    <p>Số 1 Kéo Quyết, Quán An, P.Hải Thành, TP Hải Phòng, Việt Nam</p>
                                </li>
                                <li>
                                    <p class="font-bold text-gray-700">VP Đà Nẵng</p>
                                    <p class="mt-1">Công ty TNHH HP Toàn Cầu – Chi nhánh Đà Nẵng</p>
                                    <p>Số 56, Đường Lê Lợi, P.Hải Châu, Quận Hải Châu, Thành Phố Đà Nẵng</p>
                                </li>
                                <li>
                                    <p class="font-bold text-gray-700">VP HCM</p>
                                    <p class="mt-1">Công ty TNHH HP Toàn Cầu – VP HCM</p>
                                    <p>201/1/10 đường Nguyễn Xí, Phường 26, quận Bình Thạnh, thành phố Hồ Chí Minh</p>
                                </li>
                            </ul> -->
                        </div>

                        <div class="mt-12">
                            <h3 class="text-xl font-bold text-gray-900 border-l-4 border-blue-600 pl-4">Thông tin liên lạc</h3>
                            <dl class="mt-6 text-base text-gray-600 space-y-3">
                                <div class="flex">
                                    <dt class="w-24 font-semibold text-gray-800">Email:</dt>
                                    <dd><a href="mailto:info@hptoancau.com" class="text-blue-600 hover:underline"><?php echo do_shortcode('[business_email]'); ?></a></dd>
                                </div>
                                <div class="flex">
                                    <dt class="w-24 font-semibold text-gray-800">Điện thoại:</dt>
                                    <dd><a href="tel:02432023242" class="text-blue-600 hover:underline"><?php echo do_shortcode('[business_phone]'); ?></a></dd>
                                </div>
                                <div class="flex">
                                    <dt class="w-24 font-semibold text-gray-800">Hotline:</dt>
                                    <dd><a href="tel:0983068770" class="text-blue-600 hover:underline"><?php echo do_shortcode('[business_hotline]'); ?></a></dd>
                                </div>
                                <div class="flex">
                                    <dt class="w-24 font-semibold text-gray-800">Website:</dt>
                                    <dd><a href="https://hptoancau.com" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline"><?php echo do_shortcode('[business_website]'); ?></a></dd>
                                </div>
                            </dl>
                        </div>

                    </div>

                    <div class="w-full h-full min-h-[400px] lg:min-h-full">
                        <?php echo do_shortcode('[business_map]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>