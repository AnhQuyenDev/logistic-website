<?php get_header(); ?>
    <section class="relative w-full h-[400px] bg-cover bg-center" style="background-image:url(/wp-content/themes/logictis-theme/assets/images/imgi_14_18.jpg) !important"></section>

    <section class="relative py-16 bg-cover bg-center" style="background-image:url(/wp-content/themes/logictis-theme/assets/images/imgi_25_world-map-47959_1280.png) !important">
        <div class="relative container mx-auto px-4">
            <h2 class="bg-[#dd7d49] text-white text-center font-bold uppercase p-4 text-lg md:text-xl shadow-md rounded-xl">
                Đăng ký nhận email chia sẻ thông tin, kiến thức, văn bản pháp luật trong lĩnh vực vận tải quốc tế và thủ tục hải quan ( Miễn phí)
            </h2>

            <div class="bg-white/95 p-8 shadow-md rounded-b-xl">
                <form action="#" method="POST">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6 mb-8">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-800">Tên <span class="text-red-500">*</span></label>
                            <input type="text" name="name" id="name" required class="mt-1 block w-full bg-slate-100 border-gray-300 rounded-sm shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500">
                        </div>
                        <div>
                            <label for="import_market" class="block text-sm font-medium text-gray-800">Thị trường nhập khẩu</label>
                            <input type="text" name="import_market" id="import_market" placeholder="VD: Mỹ, Anh, Trung Quốc, Y,..." class="mt-1 block w-full bg-slate-100 border-gray-300 rounded-sm shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-800">Email <span class="text-red-500">*</span></label>
                            <input type="email" name="email" id="email" required class="mt-1 block w-full bg-slate-100 border-gray-300 rounded-sm shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500">
                        </div>
                        <div>
                            <label for="export_market" class="block text-sm font-medium text-gray-800">Thị trường xuất khẩu</label>
                            <input type="text" name="export_market" id="export_market" placeholder="VD: Mỹ, Anh, Trung Quốc, Y,..." class="mt-1 block w-full bg-slate-100 border-gray-300 rounded-sm shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div>
                            <h3 class="font-bold text-gray-800 mb-4">Nghề nghiệp</h3>
                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <input id="forwarder" name="profession" type="radio" class="focus:ring-orange-500 h-4 w-4 text-orange-600 border-gray-300">
                                    <label for="forwarder" class="ml-3 block text-sm font-medium text-gray-700">Forwarder</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="trading" name="profession" type="radio" class="focus:ring-orange-500 h-4 w-4 text-orange-600 border-gray-300">
                                    <label for="trading" class="ml-3 block text-sm font-medium text-gray-700">Công ty thương mại</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="student" name="profession" type="radio" class="focus:ring-orange-500 h-4 w-4 text-orange-600 border-gray-300">
                                    <label for="student" class="ml-3 block text-sm font-medium text-gray-700">Sinh viên</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="prof_other" name="profession" type="radio" class="focus:ring-orange-500 h-4 w-4 text-orange-600 border-gray-300">
                                    <label for="prof_other" class="ml-3 block text-sm font-medium text-gray-700">Khác</label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h3 class="font-bold text-gray-800 mb-4">Lĩnh vực quan tâm</h3>
                            <div class="space-y-3">
                                <div class="flex items-center"><input id="cosmetics" type="checkbox" class="focus:ring-orange-500 h-4 w-4 text-orange-600 border-gray-300 rounded-sm"><label for="cosmetics" class="ml-3 text-sm font-medium text-gray-700">Mỹ phẩm</label></div>
                                <div class="flex items-center"><input id="functional_foods" type="checkbox" class="focus:ring-orange-500 h-4 w-4 text-orange-600 border-gray-300 rounded-sm"><label for="functional_foods" class="ml-3 text-sm font-medium text-gray-700">Thực phẩm chức năng</label></div>
                                <div class="flex items-center"><input id="chemicals" type="checkbox" class="focus:ring-orange-500 h-4 w-4 text-orange-600 border-gray-300 rounded-sm"><label for="chemicals" class="ml-3 text-sm font-medium text-gray-700">Hóa chất</label></div>
                                <div class="flex items-center"><input id="medical_equipment" type="checkbox" class="focus:ring-orange-500 h-4 w-4 text-orange-600 border-gray-300 rounded-sm"><label for="medical_equipment" class="ml-3 text-sm font-medium text-gray-700">Thiết bị y tế</label></div>
                                <div class="flex items-center"><input id="telecom_equipment" type="checkbox" class="focus:ring-orange-500 h-4 w-4 text-orange-600 border-gray-300 rounded-sm"><label for="telecom_equipment" class="ml-3 text-sm font-medium text-gray-700">Thiết bị viễn thông</label></div>
                                <div class="flex items-center"><input id="machinery" type="checkbox" class="focus:ring-orange-500 h-4 w-4 text-orange-600 border-gray-300 rounded-sm"><label for="machinery" class="ml-3 text-sm font-medium text-gray-700">Máy móc</label></div>
                                <div class="flex items-center"><input id="docs_knowledge" type="checkbox" class="focus:ring-orange-500 h-4 w-4 text-orange-600 border-gray-300 rounded-sm"><label for="docs_knowledge" class="ml-3 text-sm font-medium text-gray-700">Văn bản & Kiến thức XNK nói chung</label></div>
                                <div class="flex items-center"><input id="interest_other" type="checkbox" class="focus:ring-orange-500 h-4 w-4 text-orange-600 border-gray-300 rounded-sm"><label for="interest_other" class="ml-3 text-sm font-medium text-gray-700">Khác</label></div>
                            </div>
                        </div>

                        <div>
                            <h3 class="font-bold text-gray-800 mb-4">Hiệp định thương mại</h3>
                            <div class="space-y-3">
                            <div class="flex items-center"><input id="acfta" type="checkbox" class="focus:ring-orange-500 h-4 w-4 text-orange-600 border-gray-300 rounded-sm"><label for="acfta" class="ml-3 text-sm font-medium text-gray-700">ACFTA</label></div>
                            <div class="flex items-center"><input id="cptpp" type="checkbox" class="focus:ring-orange-500 h-4 w-4 text-orange-600 border-gray-300 rounded-sm"><label for="cptpp" class="ml-3 text-sm font-medium text-gray-700">CPTPP</label></div>
                            <div class="flex items-center"><input id="evfta" type="checkbox" class="focus:ring-orange-500 h-4 w-4 text-orange-600 border-gray-300 rounded-sm"><label for="evfta" class="ml-3 text-sm font-medium text-gray-700">EVFTA</label></div>
                            <div class="flex items-center"><input id="atiga" type="checkbox" class="focus:ring-orange-500 h-4 w-4 text-orange-600 border-gray-300 rounded-sm"><label for="atiga" class="ml-3 text-sm font-medium text-gray-700">ATIGA</label></div>
                            <div class="flex items-center"><input id="akfta" type="checkbox" class="focus:ring-orange-500 h-4 w-4 text-orange-600 border-gray-300 rounded-sm"><label for="akfta" class="ml-3 text-sm font-medium text-gray-700">AKFTA</label></div>
                            <div class="flex items-center"><input id="ajcep" type="checkbox" class="focus:ring-orange-500 h-4 w-4 text-orange-600 border-gray-300 rounded-sm"><label for="ajcep" class="ml-3 text-sm font-medium text-gray-700">AJCEP</label></div>
                            <div class="flex items-center"><input id="agreement_other" type="checkbox" class="focus:ring-orange-500 h-4 w-4 text-orange-600 border-gray-300 rounded-sm"><label for="agreement_other" class="ml-3 text-sm font-medium text-gray-700">Khác</label></div>
                            </div>
                            
                            <div class="mt-8">
                                <button type="submit" class="bg-gray-500 text-white font-semibold py-2 px-8 rounded-sm hover:bg-gray-600 transition-colors duration-300 shadow-sm">
                                    Đăng ký
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

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
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.045484083324!2d105.85049557591786!3d20.99092888924195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac1f73752841%3A0x880486259349887f!2zQ8O0bmcgVHkgVE5ISCBIUCBUb8OgbiBD4bqndQ!5e0!3m2!1sen!2svn!4v1660000000000!5m2!1sen!2svn" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>