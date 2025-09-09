<?php get_header(); ?>
<section class="hero-section">
    <div class="z-10 w-full h-screen flex items-center justify-center pt-20"> 
        <div class="content-overlay"></div>
        <div class="absolute inset-0 flex flex-col sm:flex-col lg:flex-row items-center justify-center mt-20">
            <div class="w-2/3 lg:w-1/2 flex flex-col justify-center items-start sm:pl-16 z-10">
                <h1 class="text-white text-xl sm:text-2xl font-semibold mb-2">CHÀO MỪNG ĐẾN VỚI</h1>
                <h2 class="text-white text-2xl sm:text-6xl font-bold mb-4"><?php echo do_shortcode('[business_name]');?></h2>
                <div class="w-20 h-1 bg-white mb-4"></div>
                <p class="text-white text-lg mb-6 max-w-md leading-relaxed">Đơn vị cung cấp Dịch vụ Vận chuyển Quốc Tế, dịch vụ hải quan trọn gói và xin giấy phép xuất - nhập khẩu!</p>
                <button class="bg-transparent border border-white text-white px-6 py-3 rounded-md text-lg font-semibold hover:bg-white hover:text-cyan-700 transition duration-300">CHI TIẾT</button>
            </div>

            <div class="w-1/2 hidden lg:flex justify-center items-start pt-20 z-10 my-auto">
                <div class="bg-primary-lighter bg-opacity-85 p-8 rounded-lg shadow-xl max-w-lg w-full">
                    <h3 class="text-gray-800 text-xl font-bold mb-4">TRA CỨU MÃ HS HẢI QUAN THEO MÔ TẢ THÔNG DỤNG</h3>
                    <p class="text-gray-600 text-sm mb-2">*Gõ số hiệu để tìm kiếm, ví dụ: "85021100", hoặc</p>
                    <p class="text-gray-600 text-sm mb-4">*Nhập từ khóa để tìm kiếm trong mô tả hàng hóa.</p>
                    <p class="text-gray-600 text-sm font-semibold mb-2">Ví dụ: "tổ máy phát điện"</p>
                    <input type="text" placeholder="Tìm kiếm mã hs, mô tả" class="w-full border border-gray-300 rounded-md p-3 mb-4 focus:outline-none focus:ring-2 focus:ring-cyan-500" />
                    <div class="flex space-x-4">
                        <button class="flex-1 bg-accent-light text-gray-700 font-semibold py-3 rounded-md hover:bg-orange-300 transition duration-300">LIÊN HỆ TƯ VẤN</button>
                        <button class="flex-1 bg-primary-dark text-white font-semibold py-3 rounded-md hover:bg-primary-darker transition duration-300">HS SEARCH</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="lg:hidden relative flex items-center justify-center my-10 z-10">
    <div class="max-w-4xl px-4 md:w-1/2 flex justify-center items-start z-30 my-auto">
        <div class="bg-primary-lighter bg-opacity-85 p-8 rounded-lg shadow-xl w-full">
            <h3 class="text-gray-800 text-xl font-bold mb-4">TRA CỨU MÃ HS HẢI QUAN THEO MÔ TẢ THÔNG DỤNG</h3>
            <p class="text-gray-600 text-sm mb-2">*Gõ số hiệu để tìm kiếm, ví dụ: "85021100", hoặc</p>
            <p class="text-gray-600 text-sm mb-4">*Nhập từ khóa để tìm kiếm trong mô tả hàng hóa.</p>
            <p class="text-gray-600 text-sm font-semibold mb-2">Ví dụ: "tổ máy phát điện"</p>
            <input type="text" placeholder="Tìm kiếm mã hs, mô tả" class="w-full border border-gray-300 rounded-md p-3 mb-4 focus:outline-none focus:ring-2 focus:ring-cyan-500" />
            <div class="flex space-x-4">
                <button class="flex-1 bg-accent-light text-gray-700 font-semibold py-3 rounded-md hover:bg-accent-light transition duration-300">LIÊN HỆ TƯ VẤN</button>
                <button class="flex-1 bg-primary-dark text-white font-semibold py-3 rounded-md hover:bg-primary-darker transition duration-300">HS SEARCH</button>
            </div>
        </div>
    </div>
</div>
    
<section class="bg-primary-light py-6 px-4 md:py-10 lg:py-1 flex flex-col md:flex-row items-center justify-center space-y-6 md:space-y-0 md:space-x-6 lg:space-x-1">
    <div class="flex flex-col md:flex-row items-center text-center md:text-left p-4 max-w-xl w-full">
        <div class="flex-shrink-0 mb-4 md:mb-0 md:mr-6">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/search-1.png" alt="Biểu thuế" class="w-20 h-20 md:w-28 md:h-28 object-contain" />
        </div>
        <div class="flex-grow">
            <h3 class="text-white text-2xl md:text-2xl font-bold mb-2 leading-snug">Biểu thuế xuất nhập khẩu 2025</h3>
            <p class="text-white text-base md:text-md mb-4">Danh sách tên hàng hóa, mã HS và thông tin thuế XNK mới nhất</p>
            <button class="relative z-10 bg-transparent border-2 border-white text-white px-6 py-2 rounded-md text-lg md:text-xl font-semibold hover:bg-white hover:text-[#429E9A] transition duration-300 shadow-md">TRA CỨU</button>
        </div>
    </div>
    <div class="hidden md:block w-px h-32 bg-white"></div>
    <div class="flex flex-col md:flex-row items-center text-center md:text-left p-4 max-w-xl w-full">
        <div class="flex-shrink-0 mb-4 md:mb-0 md:mr-6">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/master-1.png" alt="Khóa học" class="w-20 h-20 md:w-28 md:h-28 object-contain" />
        </div>
        <div class="flex-grow">
            <h3 class="text-white text-2xl md:text-2xl font-bold mb-2 leading-snug">Khóa học Master ngành XNK</h3>
            <p class="text-white text-base md:text-md mb-4">Nâng cao kiến thức xuất nhập khẩu với chuyên gia hàng đầu</p>
            <button class="relative z-10 bg-transparent border-2 border-white text-white px-6 py-2 rounded-md text-lg md:text-xl font-semibold hover:bg-white hover:text-[#429E9A] transition duration-300 shadow-md">ĐĂNG KÝ</button>
        </div>
    </div>
</section>
<section>
    <div class="dot-pattern-bg py-16 px-4 md:px-4 lg:px-16">
        <div class="max-w-6xl mx-auto bg-primary-light bg-opacity-80 p-6 md:p-8 rounded-lg shadow-xl mb-12">
            <h2 class="text-white text-2xl md:text-xl font-bold mb-4">TRA CỨU MÃ KHO, MÃ CẢNG</h2>
            <p class="text-white text-lg mb-4">Gõ tên kho hoặc cảng để tìm kiếm. Ví dụ: "Cảng Hải Phòng"</p>
            <div class="flex flex-col md:flex-row gap-4 items-center">
                <input type="text" placeholder="Tìm theo Mã kho, Mã kho ngoại quan hoặc Cảng cửa khẩu"
                    class="w-full md:w-auto flex-grow p-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400 text-gray-700 placeholder-gray-400 text-lg" />
                <button class="bg-primary-darker hover:bg-red-800 text-white font-semibold py-3 px-6 rounded-md transition duration-300 shadow-md w-full md:w-auto text-lg">
                    Tìm kiếm
                </button>
            </div>
        </div>

        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-primary-light bg-opacity-80 p-6 md:p-12 rounded-lg shadow-xl flex items-center justify-between text-white cursor-pointer">
                <h3 class="text-2xl md:text-2xl font-bold">Quy đổi CHARGEABLE WEIGHT</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pointer-icon.png" class="h-12 w-12 md:h-24 md:w-24 object-contain">
            </div>
            <div class="bg-primary-light bg-opacity-80 p-6 md:p-8 rounded-lg shadow-xl flex items-center justify-between text-white cursor-pointer">
                <h3 class="text-2xl md:text-2xl font-bold">Quy đổi CBM SEA LCL</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pointer-icon.png" class="h-12 w-12 md:h-24 md:w-24 object-contain">
            </div>
        </div>

        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex flex-col md:space-y-8">
                    <h2 class="hidden md:block text-2xl md:text-3xl font-bold text-right text-gray-600 mb-8">
                        Những kiến thức cơ bản <br> 
                        <span class="text-gray-800 text-4xl md:text-5xl">VỀ XUẤT <br> 
                            NHẬP KHẨU
                        </span>
                    </h2>
                    <div class="md:py-12 md:px-8 lg:px-0 lg:py-0">
                        <div class="max-w-4xl mx-auto"> 
                            <div class="w-full bg-gray-100 p-6 rounded-lg shadow-lg hover:bg-accent-light transition ease-in-out duration-300 group">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-8">
                                    <div class="bg-center bg-[length:150%] p-6 rounded-lg shadow-lg text-white flex flex-col justify-between h-48 md:h-56 relative overflow-hidden cursor-pointer
                                                hover:-translate-y-1 hover:shadow-black transition-all duration-500" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/imgi_8_airplanes-background-2.jpg) !important">
                                        <h3 class="text-xl font-bold z-10">Hồ sơ của chúng tôi</h3>
                                        <a href="#" class="text-white text-lg hover:underline z-10">Xem thêm</a>
                                    </div>
                                    <div class="bg-gradient-to-br from-primary to-primary-lighter p-6 rounded-lg shadow-lg text-white flex flex-col justify-between h-48 md:h-56 relative overflow-hidden cursor-pointer
                                                hover:-translate-y-1 hover:shadow-black transition-all duration-500">
                                        <h3 class="text-xl font-bold mb-2 z-10">Dịch vụ chúng tôi cung cấp</h3>
                                        <a href="#" class="text-white text-lg hover:underline z-10">Xem thêm</a>
                                    </div>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-800 mb-2">THÔNG TIN HAY SỬ DỤNG</h3>
                                <p class="text-gray-600 mb-4">Trong xuất nhập khẩu</p>
                                <button class="bg-primary group-hover:bg-primary-darker text-white font-semibold py-2 px-4 rounded-md transition duration-300">
                                    Xem thêm
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="md:hidden block text-2xl md:text-3xl font-bold text-center text-gray-600 mb-8">
                    Những kiến thức cơ bản <br> 
                    <span class="text-gray-800 text-4xl md:text-5xl">VỀ XUẤT <br> 
                        NHẬP KHẨU
                    </span>
                </h2>
                <div class="space-y-4">
                    <div id="topic-list">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-gradient-to-b from-primary-light to-white relative">
    <div class="relative max-w-6xl mx-auto py-16 px-4 md:px-8 lg:px-16 z-10">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-plane.png" alt="Airplane" 
            class="hidden lg:block absolute left-0 bottom-0 transform translate-y-1/3 w-96 opacity-80 pointer-events-none z-0" />
        <div class="relative z-10 flex flex-col lg:flex-row items-center lg:items-start gap-12">
            <div class="lg:w-1/3 lg:text-left mb-8 lg:mb-0">
                <p class="text-white text-center md:text-right text-xl md:text-2xl mb-2 font-light">Dịch vụ chính</p>
                <h2 class="text-white text-center md:text-right text-4xl md:text-5xl lg:text-5xl font-bold leading-tight">
                CHÚNG TÔI <br> MANG LẠI
                </h2>
            </div>
            <div class="lg:w-2/3 grid grid-cols-1 md:grid-cols-2 gap-4 w-full">
                <div class="bg-white p-2 rounded-lg shadow-lg flex flex-col items-center md:items-start text-center md:text-left">
                    <div class="flex flex-row items-center-center gap-4 py-1 mb-4 w-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/imgi_10_cargo-1.png" class="h-10 w-10">
                        <h3 class="text-sm md:text-lg font-bold text-gray-800 mb-1">
                            Vận chuyển quốc tế <br> đường biển
                        </h3>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Cước vận chuyển quốc tế nhập khẩu đường biển (nguyên container, hàng lẻ) và đường hàng không...
                    </p>
                </div>
                <div class="bg-white p-2 rounded-lg shadow-lg flex flex-col items-center md:items-start text-center md:text-left">
                    <div class="flex flex-row items-center-center gap-4 py-1 mb-4 w-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/imgi_11_airplane-1.png" class="h-10 w-10">
                        <h3 class="text-sm md:text-lg font-bold text-gray-800 mb-2">
                            Vận chuyển quốc tế <br> đường hàng không
                        </h3>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Dịch vụ vận chuyển nội địa đường bộ, container, đường biển, hàng không...
                    </p>
                </div>
                <div class="bg-white p-2 rounded-lg shadow-lg flex flex-col items-center md:items-start text-center md:text-left">
                    <div class="flex flex-row items-center-center gap-4 py-1 mb-4 w-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/imgi_12_declaration-of-independence-1.png" class="h-10 w-10">
                        <h3 class="text-sm md:text-lg font-bold text-gray-800 mb-2">
                            Dịch vụ hải quan & Giấy <br> phép chuyên ngành
                        </h3>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Dịch vụ hải quan tại các cảng Hà Nội, Hải Phòng, Đà Nẵng, Hồ Chí Minh...
                    </p>
                </div>
                <div class="bg-white p-2 rounded-lg shadow-lg flex flex-col items-center md:items-start text-center md:text-left">
                    <div class="flex flex-row items-center-center gap-4 py-1 mb-4 w-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/imgi_13_Group.png" class="h-10 w-10">
                        <h3 class="text-sm md:text-lg font-bold text-gray-800 mb-2">
                            Tư vấn & Các dịch vụ <br> logistics phụ trợ khác
                        </h3>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Tư vấn giải pháp logistics: mã HS, thuế xuất nhập, hợp đồng thương mại...
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-white py-16 px-4 md:px-8 lg:px-16">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col lg:flex-row items-center lg:items-start justify-between mb-12 gap-8">
            <div class="text-center lg:text-left lg:w-1/3">
                <p class="text-gray-600 text-xl md:text-2xl mb-2 text-right">Những con số nói lên</p>
                <h2 class="text-gray-700 text-4xl md:text-5xl lg:text-6xl text-right font-bold">GIÁ TRỊ CỦA <br> CHÚNG TÔI</h2>
            </div>
            <div class="lg:w-2/3 flex flex-col md:flex-row items-center gap-8">
                <div class="flex-1 flex items-start text-gray-700 text-base md:text-lg leading-relaxed bg-gray-50 p-6 rounded-lg shadow-sm">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/imgi_14_Group-1.png" class="mx-5">
                    <p>Từng thành viên và tất cả tập thể HP Toàn Cầu luôn luôn tâm niệm và thể hiện các giá trị cốt lõi của tập thể Chính trực – Tận tâm – Trí tuệ trong tất cả các hoạt động của công ty.</p>
                </div>
                <div class="flex-shrink-0 flex flex-col items-center space-y-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/imgi_15_Goods.png" alt="Small Airplane" class="w-80 h-auto">
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 text-center mt-12">
            <div>
                <p class="text-primary-light text-4xl md:text-5xl">+10000</p>
                <p class="text-gray-700 text-lg font-bold">Loại Mặt Hàng</p>
            </div>
            <div>
                <p class="text-primary-light text-4xl md:text-5xl">+120</p>
                <p class="text-gray-700 text-lg font-bold">Quốc Gia</p>
            </div>
            <div>
                <p class="text-primary-light text-4xl md:text-5xl">+1500</p>
                <p class="text-gray-700 text-lg font-bold">Khách Hàng</p>
            </div>
            <div>
                <p class="text-primary-light text-4xl md:text-5xl">+10000</p>
                <p class="text-gray-700 text-lg font-bold">Đối Tác Trên Toàn Cầu</p>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>