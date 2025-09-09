<?php get_header(); ?>
    <!-- Section : Carousel -->
    <section class="relative z-0">
        <div id="indicators-carousel" class="relative w-full" data-carousel="static">
            <!-- Carousel wrapper -->
            <div id="carousel" class="relative min-h-[800px] sm:min-h-[500px] overflow-hidden md:h-96 clip-banner">
                <!-- Item 1 -->
                <div class="hidden" data-carousel-item="active">
                    <img src="/wp-content/themes/logictis-theme/assets/images/imgi_5_1200.jpg" class="absolute block w-full h-full lg:h-fit -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div class="hidden sm:block fadeInRight absolute right-64 top-64 bg-gradient-to-r from-black/5 to-black/80 rounded-r-xl text-xl text-white font-bold pr-12 pl-32 py-4">
                        DỊCH VỤ THÔNG QUAN - VẬN CHUYỂN QUỐC TẾ
                    </div>
                    <div class="hidden sm:block fadeInRight absolute right-0 bottom-16 bg-gradient-to-l from-black/50 to-black/80 rounded-l-xl text-xl text-white font-bold pr-32 pl-12 py-4">
                        <?php echo do_shortcode('[business_name]'); ?>
                    </div> 
                </div>
                <!-- Item 2 -->
                <div class="hidden" data-carousel-item>
                    <img src="/wp-content/themes/logictis-theme/assets/images/imgi_6_16617.jpg" class="absolute block w-full h-full lg:h-fit -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div class="hidden sm:block fadeInRight absolute right-64 top-64 bg-gradient-to-r from-black/5 to-black/80 rounded-r-xl text-xl text-white font-bold pr-12 pl-32 py-4">
                        Tư vấn thủ tục Nhanh gọn - Đầy đủ - Tận tâm
                    </div>
                    <div class="hidden sm:block fadeInRight absolute right-0 bottom-16 bg-gradient-to-l from-black/50 to-black/80 rounded-l-xl text-xl text-white font-bold pr-32 pl-12 py-4">
                        CHI PHÍ TIẾT KIỆM NHẤT
                    </div>
                </div>
                <!-- Item 3 - Local Video -->
                <div class="hidden" data-carousel-item>
                    <video autoplay muted loop playsinline
                        class="absolute block w-full h-full object-cover top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                        <source src="/wp-content/themes/logictis-theme/assets/videos/Logistics Video Background.mp4" type="video/mp4">
                        Trình duyệt không hỗ trợ video.
                    </video>
                    <div class="hidden sm:block fadeInRight absolute right-64 top-64 bg-gradient-to-r from-black/5 to-black/80 rounded-r-xl text-xl text-white font-bold pr-12 pl-32 py-4">
                        Liên hệ Hotline: <?php echo do_shortcode('[business_hotline]'); ?>
                    </div>
                    <div class="hidden sm:block fadeInRight absolute right-0 bottom-16 bg-gradient-to-l from-black/50 to-black/80 rounded-l-xl text-xl text-white font-bold pr-32 pl-12 py-4">
                        Email: <?php echo do_shortcode('[business_email]'); ?>
                    </div>
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-16 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-12 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-12 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </section>
    <!-- End Section : Carousel -->

    <section class="bg-cover bg-center py-16" style="background-image:url(/wp-content/themes/logictis-theme/assets/images/imgi_25_world-map-47959_1280.png) !important">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-[#ff8906] tracking-tight sm:text-4xl">
                    DỊCH VỤ VẬN CHUYỂN HÀNG HÓA QUỐC TẾ ĐƯỜNG BIỂN
                </h2>
            </div>

            <div class="flex flex-col lg:flex-row items-center lg:space-x-12">
                <div class="lg:w-1/2 mb-8 lg:mb-0">
                    <p class="text-xl text-gray-700 leading-relaxed mb-6">
                    <?php echo do_shortcode('[business_name]'); ?> cung cấp các dịch vụ vận chuyển đường biển quốc tế cho hàng hóa xuất nhập
                    khẩu từ các cảng biển trên thế giới về Hải Phòng, Đà Nẵng, Hồ Chí Minh, Quy Nhơn,
                    ... theo các phương thức giao hàng khác nhau như giao nhận hàng tại cảng (CY-CY) (CFS-CFS),
                    giao nhận hàng tại xưởng (DOOR-CY) (CY-DOOR) và giao hàng đến tận tay người nhận (DOOR-DOOR).
                    </p>

                    <p class="text-xl font-bold text-[#ff8906] mb-4">
                    Chúng tôi cung cấp các dịch vụ vận chuyển đường biển quốc tế toàn diện cho mọi loại
                    hàng hóa:
                    </p>

                    <ul class="space-y-2 text-xl text-gray-700">
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-[#ff8906] mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Vận chuyển đường biển hàng container (FCL)
                        </li>
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-[#ff8906] mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Vận chuyển đường biển hàng lẻ (LCL)
                        </li>
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-[#ff8906] mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Vận chuyển đường biển hàng lạnh
                        </li>
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-[#ff8906] mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Dịch vụ vận chuyển hàng dự án
                        </li>
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-[#ff8906] mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Vận chuyển đường biển hàng siêu trường, siêu trọng
                        </li>
                    </ul>
                </div>

                <div class="lg:w-1/2">
                    <img class="w-full h-auto" src="/wp-content/themes/logictis-theme/assets/images/imgi_7_Untitled-design.png" alt="Vận chuyển đường biển">
                </div>
            </div>

            <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="relative group">
                    <img class="w-full h-48 object-cover rounded-lg shadow-lg" src="/wp-content/themes/logictis-theme/assets/images/imgi_8_tan_vu__12.jpg" alt="Cảng biển Hải Phòng">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-white text-xl font-bold">Cảng biển Hải Phòng</p>
                    </div>
                </div>
                <div class="relative group">
                    <img class="w-full h-48 object-cover rounded-lg shadow-lg" src="/wp-content/themes/logictis-theme/assets/images/imgi_9_630-large-e7698c802bb516b0be68dd270e9de707.jpg" alt="Cảng biển Đà Nẵng">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-white text-xl font-bold">Cảng biển Đà Nẵng</p>
                    </div>
                </div>
                <div class="relative group">
                    <img class="w-full h-48 object-cover rounded-lg shadow-lg" src="/wp-content/themes/logictis-theme/assets/images/imgi_10_5117-26352928332-e22eb76419-b.jpg" alt="Cảng biển Hồ Chí Minh">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-white text-xl font-bold">Cảng biển Hồ Chí Minh</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-white py-16 bg-cover bg-center" style="background-image:url(/wp-content/themes/logictis-theme/assets/images/imgi_24_5-2.jpg) !important">
        <div class="p-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-white bg-opacity-80 rounded-xl py-12 sm:px-4 md:px-8">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-[#f25f4c] tracking-tight sm:text-4xl">
                        Vận chuyển nhập khẩu hàng hóa - đường biển
                        </h2>
                    </div>

                    <div class="flex items-center justify-center">
                        <div class="text-black lg:w-2/3 mb-8 lg:mb-0">
                            <p class="text-lg leading-relaxed mb-6">
                                Chào mừng quý khách đến với dịch vụ vận chuyển hàng hóa đường biển nhập khẩu của chúng tôi - một giải pháp toàn diện và
                                đáng tin cậy cho mọi nhu cầu logistics của bạn đến Việt Nam.
                            </p>

                            <p class="text-lg font-bold leading-relaxed mb-6">
                                Dịch vụ của chúng tôi không chỉ bao gồm quá trình vận chuyển hiệu quả mà còn đảm bảo tuân thủ mọi quy định hải
                                quan và pháp luật liên quan. Đội ngũ chuyên gia tận tâm của chúng tôi luôn sẵn sàng hỗ trợ bạn từ khâu lên lịch vận
                                tải, xử lý hải quan đến giao hàng tận nơi.
                            </p>

                            <p class="text-lg leading-relaxed mb-6">
                                Chúng tôi cung cấp dịch vụ vận chuyển hàng hóa đường biển tại hầu hết tất cả các cảng biển tại Việt Nam, gồm: Hải Phòng
                                (HPH); Đà Nẵng (DAD); Hồ Chí Minh (SGN); Quy Nhơn, ...
                            </p>

                            <p class="text-lg leading-relaxed mb-6">
                                Với mạng lưới đối tác toàn cầu và hệ thống theo dõi hiện đại, chúng tôi cam kết đưa hàng hóa của bạn đến đích một cách
                                nhanh chóng và an toàn nhất. Hãy để chúng tôi đồng hành cùng bạn trong trình nhập khẩu, để bạn có thể tập trung hoàn
                                toàn vào phát triển kinh doanh của mình.
                            </p>

                            <p class="text-xl font-bold text-[#f25f4c] leading-relaxed">
                                Hãy liên hệ với chúng tôi ngay hôm nay để biết thêm thông tin và nhận báo giá tốt nhất cho dịch vụ vận chuyển hàng
                                hóa đường biển nhập khẩu của bạn!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8">
                    <div class="relative group text-center">
                        <img class="w-full h-44 border-4 border-[#e3ad6f] object-cover rounded-lg shadow-lg mb-2" src="/wp-content/themes/logictis-theme/assets/images/imgi_12_12.png" alt="Linh kiện, phụ tùng ô tô">
                        <div class="absolute h-44 inset-0 bg-[#edc292] bg-opacity-50 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <p class="absolute bottom-1 text-black text-sm font-bold">Linh kiện, phụ tùng ô tô</p>
                        </div>
                    </div>
                    <div class="relative group text-center">
                        <img class="w-full h-44 border-4 border-[#e3ad6f] object-cover rounded-lg shadow-lg mb-2" src="/wp-content/themes/logictis-theme/assets/images/imgi_13_13.png" alt="Thực phẩm thường">
                        <div class="absolute h-44 inset-0 bg-[#edc292] bg-opacity-50 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <p class="absolute bottom-1 text-black text-sm font-bold">Thực phẩm thường dùng</p>
                        </div>
                    </div>
                    <div class="relative group text-center">
                        <img class="w-full h-44 border-4 border-[#e3ad6f] object-cover rounded-lg shadow-lg mb-2" src="/wp-content/themes/logictis-theme/assets/images/imgi_14_14.png" alt="Mỹ phẩm">
                        <div class="absolute h-44 inset-0 bg-[#edc292] bg-opacity-50 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <p class="absolute bottom-1 text-black text-sm font-bold">Mỹ phẩm</p>
                        </div>
                    </div>
                    <div class="relative group text-center">
                        <img class="w-full h-44 border-4 border-[#e3ad6f] object-cover rounded-lg shadow-lg mb-2" src="/wp-content/themes/logictis-theme/assets/images/imgi_15_15.png" alt="Hàng hóa khác">
                        <div class="absolute h-44 inset-0 bg-[#edc292] bg-opacity-50 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <p class="absolute bottom-1 text-black text-sm font-bold">Thiết bị y tế</p>
                        </div>
                    </div>
                    <div class="relative group text-center">
                        <img class="w-full h-44 border-4 border-[#e3ad6f] object-cover rounded-lg shadow-lg mb-2" src="/wp-content/themes/logictis-theme/assets/images/imgi_16_Untitled-design-1.png" alt="Gỗ và sản phẩm gỗ">
                        <div class="absolute h-44 inset-0 bg-[#edc292] bg-opacity-50 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <p class="absolute bottom-1 text-black text-sm font-bold">Hàng hoá khác</p>
                        </div>
                    </div>
                    <div class="relative group text-center">
                        <img class="w-full h-44 border-4 border-[#e3ad6f] object-cover rounded-lg shadow-lg mb-2" src="/wp-content/themes/logictis-theme/assets/images/imgi_17_16.png" alt="Thiết bị y tế">
                        <div class="absolute h-44 inset-0 bg-[#edc292] bg-opacity-50 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <p class="absolute bottom-1 text-black text-sm font-bold">Gỗ và sản phẩm gỗ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-white py-16 bg-cover bg-center" style="background-image:url(/wp-content/themes/logictis-theme/assets/images/imgi_48_5-2-1.jpg) !important">
        <div class="p-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-white bg-opacity-80 rounded-xl py-12 px-4 sm:px-4 md:px-8">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-[#f25f4c] tracking-tight sm:text-4xl">
                        Vận chuyển xuất khẩu hàng hóa - đường biển
                        </h2>
                    </div>

                    <div class="flex items-center justify-center">
                        <div class="text-black lg:w-2/3 mb-8 lg:mb-0">
                            <p class="text-lg leading-relaxed mb-6">
                                Chúng tôi xin kính chào quý khách hàng với dịch vụ xuất khẩu hàng hóa đường biển của chúng tôi từ Việt Nam - một giải pháp vận chuyển linh hoạt và độc đáo để hỗ trợ kế hoạch mở rộng quốc tế của bạn. Với một đội ngũ chuyên gia chất lượng và năng động, chúng tôi cam kết đồng hành với bạn qua mọi bước trong quá trình xuất khẩu.
                            </p>

                            <p class="text-lg leading-relaxed mb-6">
                                Dịch vụ của chúng tôi không chỉ tập trung vào việc đưa hàng hóa đến nơi đích một cách an toàn và kịp thời mà còn chú trọng đến trải nghiệm của khách hàng. Chúng tôi hiểu rằng xuất khẩu không chỉ là vận chuyển hàng hóa, mà còn là việc xử lý mọi thủ tục phức tạp, từ hải quan đến tài liệu chứng nhận.
                            </p>

                            <p class="text-lg leading-relaxed mb-6">
                                Với sự linh hoạt và hiệu quả, chúng tôi sẽ tối ưu hóa quy trình của bạn, giảm thiểu thời gian và chi phí, từ khi hàng hóa rời khỏi cảng cho đến khi nó đến tay khách hàng. Bạn có thể tin tưởng vào khả năng của chúng tôi để tạo ra một chuỗi cung ứng xuất khẩu mạnh mẽ và bền vững cho doanh nghiệp của bạn.
                            </p>

                            <p class="text-lg leading-relaxed mb-6">
                                Để hỗ trợ khách hàng tốt nhất, chúng tôi luôn phát triển và xây dựng mối quan hệ với các đối tác tại tất cả các quốc gia trên thế giới <span class="font-bold">(Châu Âu, Châu Á, Châu Úc, Châu Phi, Châu Mỹ). Do đó hàng hóa của bạn sẽ được vận chuyển tới mọi ngóc ngách của thế giới qua dịch vụ vận chuyển đường biển của <?php echo do_shortcode('[business_name]'); ?>.</span>
                            </p>

                            <p class="text-lg leading-relaxed mb-6">
                                <ul class="pl-8 mb-6">
                                    <li class="list-disc"><span class="font-bold">Bắc Mỹ:</span> Canada, USA, Greenland thuộc Đan Mạch, ...</li>
                                    <li class="list-disc"><span class="font-bold">Nam Mỹ:</span> Peru, Venezuela, Ecuador, Guyana, Brazil, Argentina, Chile, Colombia, Bolivia, ...</li>
                                    <li class="list-disc"><span class="font-bold">Châu Âu:</span> Nga, Ukraine, Pháp, Tây Ban Nha, Thụy Điển, Đức, Thổ Nhĩ Kỳ, Ba Lan, Ý, Anh, Bồ Đào Nha, Hy Lạp, Romania, Na Uy, Hà Làn, Bỉ, Áo, Séc, Hungary, ...</li>
                                    <li class="list-disc"><span class="font-bold">Châu Á:</span> Trung Quốc, Nhật Bản, Ấn Độ, Hàn Quốc, Indonesia, Saudi Arabia, Đài Loan, UAE, ...</li>
                                    <li class="list-disc"><span class="font-bold">Châu Úc:</span> Úc, New Zealand, Fiji, ...</li>
                                    <li class="list-disc"><span class="font-bold">Châu Phi:</span> Ai Cập, Algeria, Libya, Ma-rốcBénin, Bờ Biển Ngà, Burkina Faso, Cape Verde, Gambia, ....</li>
                                </ul>
                            </p>

                            <p class="text-xl font-bold text-[#f25f4c] leading-relaxed">
                                Đừng ngần ngại liên hệ với chúng tôi ngay hôm nay để khám phá cách chúng tôi có thể hỗ trợ bạn vượt qua mọi thách thức trong hành trình xuất khẩu của bạn. Chúng tôi sẽ hân hạnh được làm đối tác chiến lược của bạn trên con đường quốc tế.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                    <div class="relative group text-center">
                        <img class="w-full h-44 object-cover rounded-lg shadow-lg mb-2" src="/wp-content/themes/logictis-theme/assets/images/imgi_9_Chau-A.jpg" alt="Linh kiện, phụ tùng ô tô">
                        <div class="absolute h-44 inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <p class="absolute bottom-1 text-white text-sm font-bold">Châu Á</p>
                        </div>
                    </div>
                    <div class="relative group text-center">
                        <img class="w-full h-44 object-cover rounded-lg shadow-lg mb-2" src="/wp-content/themes/logictis-theme/assets/images/imgi_19_bandochauphi.jpg" alt="Thực phẩm thường">
                        <div class="absolute h-44 inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <p class="absolute bottom-1 text-white text-sm font-bold">Châu Phi</p>
                        </div>
                    </div>
                    <div class="relative group text-center">
                        <img class="w-full h-44 object-cover rounded-lg shadow-lg mb-2" src="/wp-content/themes/logictis-theme/assets/images/imgi_7_so-sanh-dac-diem-dia-hinh-nam-mi-voi-dac-diem-dia-hinh-bac-mi.jpg" alt="Mỹ phẩm">
                        <div class="absolute h-44 inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <p class="absolute bottom-1 text-white text-sm font-bold">Bắc Mĩ và Nam Mĩ</p>
                        </div>
                    </div>
                    <div class="relative group text-center">
                        <img class="w-full h-44 object-cover rounded-lg shadow-lg mb-2" src="/wp-content/themes/logictis-theme/assets/images/imgi_8_european-union-countries-map-eu-member-country-vector-24821779-e1629205125609.jpg" alt="Hàng hóa khác">
                        <div class="absolute h-44 inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <p class="absolute bottom-1 text-white text-sm font-bold">Châu Âu</p>
                        </div>
                    </div>
                    <div class="relative group text-center">
                        <img class="w-full h-44 object-cover rounded-lg shadow-lg mb-2" src="/wp-content/themes/logictis-theme/assets/images/imgi_10_imager_2_25968_700.jpg" alt="Gỗ và sản phẩm gỗ">
                        <div class="absolute h-44 inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <p class="absolute bottom-1 text-white text-sm font-bold">Châu Úc</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section : Carousel -->
    <section class="bg-white p-12">
        <!-- From Uiverse.io by PriyanshuGupta28 --> 
        <div class="marquee">
        <div class="marquee_header text-blue-950 font-bold">NHÀ CUNG CẤP</div>
        <div class="marquee__inner">
            <div class="marquee__group">
                <span><img class="w-fit h-44 scale-75 object-cover rounded-lg shadow-lg mb-2" src="/wp-content/themes/logictis-theme/assets/images/imgi_12_hang-tau-cosco.jpg"></span>
                <span><img class="w-fit h-44 scale-75 object-cover rounded-lg shadow-lg mb-2" src="/wp-content/themes/logictis-theme/assets/images/imgi_15_YANGMING-LOGO.jpg"></span>
                <span><img class="w-fit h-44 scale-75 object-cover rounded-lg shadow-lg mb-2" src="/wp-content/themes/logictis-theme/assets/images/imgi_25_OOCL_logo_logotype_emblem.png"></span>
                <span><img class="w-fit h-44 scale-75 object-cover rounded-lg shadow-lg mb-2" src="/wp-content/themes/logictis-theme/assets/images/imgi_23_image-asset.png"></span>
                <span><img class="w-fit h-44 scale-75 object-cover rounded-lg shadow-lg mb-2" src="/wp-content/themes/logictis-theme/assets/images/imgi_14_unnamed.jpg"></span>
            </div>

            <div class="marquee__group">
                <span><img class="w-fit h-44 scale-75 object-cover rounded-lg shadow-lg mb-2" src="/wp-content/themes/logictis-theme/assets/images/imgi_12_hang-tau-cosco.jpg"></span>
                <span><img class="w-fit h-44 scale-75 object-cover rounded-lg shadow-lg mb-2" src="/wp-content/themes/logictis-theme/assets/images/imgi_15_YANGMING-LOGO.jpg"></span>
                <span><img class="w-fit h-44 scale-75 object-cover rounded-lg shadow-lg mb-2" src="/wp-content/themes/logictis-theme/assets/images/imgi_25_OOCL_logo_logotype_emblem.png"></span>
                <span><img class="w-fit h-44 scale-75 object-cover rounded-lg shadow-lg mb-2" src="/wp-content/themes/logictis-theme/assets/images/imgi_23_image-asset.png"></span>
                <span><img class="w-fit h-44 scale-75 object-cover rounded-lg shadow-lg mb-2" src="/wp-content/themes/logictis-theme/assets/images/imgi_14_unnamed.jpg"></span>
            </div>
        </div>
        </div>
    </section>
    <!-- End Section : Carousel -->
<?php get_footer(); ?>