window.addEventListener("DOMContentLoaded", () => {
    // --- DATA ---
    // Dữ liệu từ 4 file ảnh đã được gộp và cấu trúc hóa
    const sectionsData1 = [
        {
            title: "QUY TRÌNH XUẤT, NHẬP KHẨU CHO NGƯỜI MỚI BẮT ĐẦU",
            items: [
                { text: "Quy trình nhập khẩu cho người mới bắt đầu", icon: "q" },
                { text: "Quy trình xuất khẩu cho người mới bắt đầu", icon: "q" },
            ]
        },
        {
            title: "KỸ THUẬT NGHIỆP VỤ NGOẠI THƯƠNG",
            subSections: [
                {
                    title: "Các phương thức giao dịch trên thị trường thế giới",
                    items: [{ text: "Các Phương Thức Giao Dịch Trên Thị Trường Thế Giới", icon: "q" }]
                },
                {
                    title: "INCOTERM",
                    items: [
                        { text: "INCOTERMS 2020 - Tóm tắt nhanh các điểm chính dành cho người sử dụng", icon: "q" },
                        { text: "INCOTERMS 2020 - Hướng dẫn toàn tập, chi tiết từ A đến Z cập nhật mới nhất", icon: "q" },
                        { text: "EXW - GIAO TẠI XƯỞNG", icon: "q" },
                        { text: "FCA - GIAO HÀNG CHO NGƯỜI CHUYÊN CHỞ", icon: "q" },
                        { text: "CPT - CƯỚC PHÍ TRẢ TỚI", icon: "q" },
                        { text: "CIP - CƯỚC PHÍ VÀ BẢO HIỂM TRẢ TỚI", icon: "q" },
                        { text: "DAP - GIAO HÀNG TẠI NƠI ĐẾN", icon: "q" },
                        { text: "DPU - GIAO HÀNG TẠI ĐỊA ĐIỂM DỠ HÀNG", icon: "q" },
                        { text: "DDP - GIAO HÀNG ĐÃ THÔNG QUAN NHẬP KHẨU", icon: "q" },
                        { text: "FAS - GIAO DỌC MẠN TÀU", icon: "q" },
                        { text: "FOB - GIAO HÀNG TRÊN TÀU", icon: "q" },
                        { text: "CFR - TIỀN HÀNG VÀ CƯỚC PHÍ", icon: "q" },
                        { text: "CIF - TIỀN HÀNG, PHÍ BẢO HIỂM VÀ CƯỚC PHÍ", icon: "q" },
                    ]
                },
                {
                    title: "Hợp đồng Mua Bán Hàng Hóa Quốc Tế",
                    items: [
                        { text: "Hợp đồng ngoại thương - Nội dung chi tiết và chuyên sâu", icon: "q" },
                        { text: "Hợp đồng ngoại thương - Hướng dẫn đọc hiểu nhanh", icon: "q" },
                        { text: "Hợp đồng 3 bên, 4 bên, hợp đồng ủy thác xuất nhập khẩu", icon: "q" },
                    ]
                }
            ]
        },
        {
            title: "Thanh Toán Quốc Tế",
            items: [
                { text: "Tổng quan về thanh toán trong thương mại quốc tế", icon: "q" },
                { text: "Tiêu chí phương thức thanh toán trong tờ khai hải quan", icon: "q" },
                { text: "Phương thức thanh toán L/C", icon: "q" },
                { text: "Phương thức thanh toán nhờ thu", icon: "q" },
                { text: "Phương thức thanh toán T/T", icon: "q" },
                { text: "Phương thức thanh toán biên mậu", icon: "q" },
                { text: "Phương thức thanh toán ghi sổ", icon: "q" },
                { text: "Hối phiếu", icon: "q" },
                { text: "Séc Quốc tế", icon: "q" },
            ]
        },
        {
            title: "Chứng Từ Thương Mại Quốc Tế",
            items: [
                { text: "Chứng từ thương mại quốc tế", icon: "q" },
            ]
        }
    ];
    const sectionsData2 = [
        {
            title: "Xuất xứ hàng hóa và FTA",
            subSections: [
                {
                    title: "Thông tin chung về Xuất xứ hàng hóa và FTA",
                    items: [
                        { text: "Danh sách các FTA Việt Nam tham gia", icon: "diamond" },
                        { text: "Danh sách các mẫu C/O tại Việt Nam", icon: "diamond" },
                        { text: "Xuất Xứ Hàng Hóa, Quy Tắc Xuất Xứ và Kiểm Tra Xuất Xứ Hàng Hóa Tại Việt Nam", icon: "diamond" },
                        { text: "Quy Tắc Xuất Xứ Trong Các FTA Mà Việt Nam Là Thành Viên", icon: "diamond" },
                        { text: "Những Điều Cần Biết Về Các FTA Việt Nam Tham Gia", icon: "diamond" },
                        { text: "Ý nghĩa của các thuật ngữ tiêu chí xuất xứ C/O", icon: "diamond" }
                    ]
                },
                {
                    title: "Các FTA cụ thể",
                    items: [
                        { text: "Hiệp định thương mại hàng hóa ASEAN (ATIGA)", icon: "diamond" },
                        {
                            text: "Hiệp định thương mại tự do ASEAN - Trung Quốc (ACFTA)", icon: "diamond",
                            nestedItems: [
                                { text: "Những lưu ý về C/O Form E đối với hàng nhập từ Trung Quốc", icon: "dollar" },
                                { text: "Hỏi đáp về việc tên nhà sản xuất thể hiện ở ô số 7 C/O Form E", icon: "dollar" },
                                { text: "C/O Form E 3 bên", icon: "dollar" }
                            ]
                        },
                        { text: "Hiệp Định Thương Mại Tự Do ASEAN – Hàn Quốc (AKFTA)", icon: "diamond" },
                        { text: "Hiệp Định Đối Tác Kinh Tế Toàn Diện ASEAN – Nhật Bản (AJCEP)", icon: "diamond" },
                        { text: "Hiệp Định Thương Mại Tự Do ASEAN – Ấn Độ (AIFTA)", icon: "diamond" },
                        { text: "Hiệp định thương mại tự do ASEAN – Australia và New Zealand", icon: "diamond" },
                        { text: "Hiệp định thương mại tự do Việt Nam – Nhật Bản (VJEPA)", icon: "diamond" },
                        { text: "Hiệp định thương mại tự do Việt Nam – Chile (VCFTA)", icon: "diamond" },
                        { text: "Hiệp định thương mại tự do Việt Nam – Hàn Quốc (VKFTA)", icon: "diamond" },
                        { text: "Hiệp định thương mại tự do Việt Nam – Liên minh kinh tế Á – Âu (FTA VN-EAEU)", icon: "diamond" },
                        { text: "Hiệp định thương mại tự do ASEAN – Hongkong (AHKFTA)", icon: "diamond" },
                        { text: "Hiệp định Đối tác Toàn diện và Tiến bộ Xuyên Thái Bình Dương (CPTPP)", icon: "diamond" },
                        {
                            text: "Hiệp định thương mại tự do Việt Nam và Liên minh Châu Âu (EVFTA)", icon: "diamond",
                            nestedItems: [
                                { text: "Làm thế nào để hưởng thuế nhập khẩu ưu đãi đặc biệt từ Châu Âu?", icon: "dollar" },
                                { text: "Mã Số Rex Là Gì? Vai Trò Của Mã REX Trong Xuất Nhập Khẩu", icon: "dollar" },
                                { text: "Hướng Dẫn Tra Thuế Và Thủ Tục Nhập Khẩu Hàng Hóa Vào EU", icon: "dollar" }
                            ]
                        },
                        { text: "Hiệp Định Thương Mại Tự do Việt Nam - Vương quốc Anh (UKVFTA)", icon: "diamond" },
                        { text: "Hiệp định Đối tác Kinh tế Toàn diện Khu vực (RCEP)", icon: "diamond" }
                    ]
                }
            ]
        }
    ];
    const sectionsData3 = [
            {
            title: "Phân loại hàng hóa và xác định mã HS cho hàng hóa",
            items: [
                { text: "Định nghĩa mã HS và hướng dẫn đọc hiểu HS", icon: "check" },
                { text: "Các Quy tắc Phân loại Hàng Hóa", icon: "check" },
                { text: "Hướng dẫn xác định nhanh mã HS", icon: "check" },
                { text: "Danh mục Hàng hóa Xuất khẩu Nhập khẩu Việt Nam", icon: "check" },
            ]
        },
        {
            title: "Quản lý nhà nước về Hàng hóa xuất nhập khẩu",
            items: [
                { text: "Chính sách quản lý hàng hóa xuất khẩu nhập khẩu", icon: "q" },
                { text: "Kiểm tra Chuyên ngành hàng hóa Xuất Nhập khẩu", icon: "q" },
                { text: "Quyền kinh doanh xuất khẩu, nhập khẩu", icon: "q" },
                { text: "Quy Định Hiện Hành Về Nhãn Hàng Hóa Nhập Khẩu", icon: "q" },
                { text: "Quy Định Hiện Hành về Nhãn Hàng Hóa Xuất Khẩu", icon: "q" },
            ]
        },
        {
            title: "Trị giá hải quan hàng hóa xuất nhập khẩu",
            items: [
                { text: "Trị giá hải quan đối với hàng hóa nhập khẩu", icon: "q" },
                { text: "Trị giá hải quan đối với hàng hóa xuất khẩu", icon: "q" },
            ]
        },
        {
            title: "Thuế xuất khẩu nhập khẩu hàng hóa",
            subSections: [
                {
                    title: "Thuế khi nhập khẩu hàng hóa",
                    items: [
                        { text: "Thuế với nhập khẩu hàng hóa", icon: "dollar" },
                        { text: "Thuế nhập khẩu và các quy định hiện hành về thuế nhập khẩu", icon: "dollar" },
                        { text: "Thuế giá trị gia tăng (VAT) đối với hàng nhập khẩu", icon: "dollar" },
                        { text: "Thuế tiêu thụ đặc biệt đối với hàng nhập khẩu", icon: "dollar" },
                        { text: "Thuế bảo vệ môi trường đối với hàng nhập khẩu", icon: "dollar" },
                        { text: "Thuế tự vệ đối với hàng nhập khẩu", icon: "dollar" },
                        { text: "Thuế chống bán phá giá đối với hàng nhập khẩu", icon: "dollar" },
                        { text: "Thuế chống trợ cấp đối với hàng nhập khẩu", icon: "dollar" },
                    ]
                },
                {
                    title: "Thuế khi xuất khẩu hàng hóa",
                    items: [
                        { text: "Hướng dẫn xác định thuế xuất khẩu của hàng hóa", icon: "dollar" },
                        { text: "Danh mục các mặt hàng chịu thuế xuất khẩu", icon: "dollar" },
                    ]
                }
            ]
        },
        {
            title: "Thủ tục hải quan",
            items: [
                { text: "Thủ tục hải quan đối với hàng hóa xuất khẩu, nhập khẩu", icon: "doc" },
                { 
                    text: "Các chỉ tiêu trên tờ khai nhập khẩu", 
                    icon: "doc",
                    nestedItems: [{text: "Các chỉ tiêu trên tờ khai nhập khẩu", icon: "doc"}] 
                },
                { 
                    text: "Mẫu Loại Hình Tờ Khai Hải Quan", 
                    icon: "doc",
                    nestedItems: [{text: "Mẫu Loại Hình Tờ Khai Hải Quan", icon: "doc"}] 
                },
                { 
                    text: "Hướng Dẫn Lập Giấy Nộp Tiền Vào Ngân Sách Nhà Nước Lĩnh Vực Xuất Nhập Khẩu", 
                    icon: "doc",
                    nestedItems: [{text: "Hướng Dẫn Lập Giấy Nộp Tiền Vào Ngân Sách Nhà Nước Lĩnh Vực Xuất Nhập Khẩu", icon: "doc"}] 
                },
            ]
        }
    ];
    const sectionsData4 = [
        {
            title: "Vận tải và Giao nhận trong Thương mại quốc tế",
            items: [
                { text: "Tổng quan về vận tải và giao nhận trong thương mại quốc tế", icon: "q" },
                { text: "Đại lý hải quan là gì? Khác nhau giữa đại lý và người khai thuê hải quan", icon: "q" },
            ]
        },
        {
            title: "Các phương thức vận tải hàng hóa thương mại quốc tế",
            subSections: [
                {
                    title: "Vận Chuyển Hàng Hóa Bằng Đường Biển",
                    items: [
                        { text: "Vận chuyển hàng hóa bằng đường biển", icon: "bullet" },
                        { text: "Vận đơn đường biển", icon: "bullet" },
                        { text: "Các Loại Tàu Biển", icon: "bullet" },
                        { text: "Container trong vận chuyển hàng hóa đường biển", icon: "bullet" },
                    ]
                },
                {
                    title: "Vận Chuyển Hàng Hóa Bằng Đường Hàng Không",
                    items: [
                        { text: "Vận Chuyển Hàng Hóa Bằng Đường Hàng không", icon: "bullet" },
                        { text: "Vận đơn đường hàng không", icon: "bullet" },
                        { text: "Cách tính trọng lượng tính cước hàng không", icon: "bullet" },
                    ]
                },
                { title: "Vận chuyển hàng hóa quốc tế bằng ô tô", items: [] },
                { title: "Vận chuyển hàng hóa bằng đường sắt", items: [] },
                { title: "Vận chuyển hàng hóa bằng container", items: [] },
                { title: "Vận chuyển hàng hóa đa phương thức", items: [] },
                {
                    title: "Vận chuyển hàng hóa nguy hiểm",
                    items: [
                        { text: "Vận chuyển hàng hoá nguy hiểm bằng đường biển", icon: "bullet" },
                        { text: "MSDS là gì? Mục đích và công dụng của MSDS?", icon: "bullet" },
                    ]
                }
            ]
        },
        {
            title: "Sở hữu trí tuệ trong XNK hàng hóa",
            items: [{ text: "Thương hiệu và Sở hữu trí tuệ trong Xuất nhập khẩu hàng hóa", icon: "bullet" }]
        },
        {
            title: "Tổn thất và Bảo hiểm Hàng hóa",
            items: [
                { text: "Bảo hiểm hàng hóa xuất nhập khẩu", icon: "dollar" },
                { text: "Tổn thất và bồi thường trong vận chuyển hàng hóa đường biển", icon: "dollar" },
            ]
        },
        {
            title: "Vi phạm hành chính trong lĩnh vực hải quan",
            items: [{ text: "Vi Phạm Hành Chính Trong Lĩnh Vực Hải Quan", icon: "dollar" }]
        },
        {
            title: "Thủ tục nhập khẩu xuất khẩu một số mặt hàng",
            items: [
                { text: "Thủ tục và thuế nhập khẩu mỹ phẩm", icon: "q" },
                { text: "Thủ tục nhập khẩu thực phẩm", icon: "q" },
                { text: "Thủ tục nhập khẩu phụ tùng ô tô", icon: "q" },
            ]
        }
    ];


    // --- RENDER LOGIC ---
    const container = document.getElementById('course-section');
    if (!container) return;

    // Bộ sưu tập các icon SVG
    const icons = {
        q: `<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400 mr-3 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>`,
        dollar: `<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400 mr-3 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8v1m0 6v1m6-4h-2m-4 0H8m11-4h.01M12 2a10 10 0 100 20 10 10 0 000-20z" /></svg>`,
        check: `<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-500 mr-3 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>`,
        diamond: `<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-cyan-500 mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20"><path d="M10 12.586l-4.293-4.293a1 1 0 011.414-1.414L10 9.758l3.879-3.879a1 1 0 111.414 1.414L11.414 11l3.879 3.879a1 1 0 01-1.414 1.414L10 12.586l-3.879 3.879a1 1 0 01-1.414-1.414L8.586 11 4.707 7.121a1 1 0 011.414-1.414L10 9.758z" /></svg>`,
        doc: `<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400 mr-3 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>`,
        bullet: `<div class="h-2 w-2 bg-gray-400 rounded-full mr-4 flex-shrink-0 mt-2"></div>`
    };

    const createItemHTML = (item) => {
        let content = '';
        const itemIcon = icons[item.icon] || icons['bullet']; // Mặc định là icon bullet
        
        content += `
            <div class="flex items-start text-gray-800 hover:text-orange-600 cursor-pointer">
                ${itemIcon}
                <span>${item.text}</span>
            </div>
        `;
        
        if (Array.isArray(item.nestedItems)) {
            content += '<div class="mt-2 space-y-2 pl-7">';
            item.nestedItems.forEach(nested => {
                    const nestedIcon = icons[nested.icon] || icons['bullet'];
                content += `
                    <div class="flex items-start text-gray-700 hover:text-orange-600 cursor-pointer">
                        ${nestedIcon}
                        <span>${nested.text}</span>
                    </div>
                `;
            });
            content += '</div>';
        }
        return content;
    };

    const allSectionsData = [...sectionsData1, ...sectionsData2, ...sectionsData3, ...sectionsData4];

    const htmlContent = allSectionsData.map((section, index) => {
        const separator = index > 0 ? `<div class="relative w-full border-t-2 border-orange-700 m-2"></div>` : '';

        let sectionHTML = `
            <div>
                ${separator}
                <h2 class="text-lg font-bold text-[#F05A28] uppercase tracking-wide">${section.title}</h2>
        `;

        if (section.items && section.items.length > 0) {
            sectionHTML += '<div class="mt-4 space-y-3">';
            sectionHTML += section.items.map(createItemHTML).join('');
            sectionHTML += '</div>';
        }

        if (section.subSections) {
            section.subSections.forEach(subSection => {
                sectionHTML += `
                    <div class="mt-5">
                        <h3 class="text-base font-semibold text-gray-900 ${subSection.items.length === 0 ? 'hover:text-orange-500 cursor-pointer' : ''}">${subSection.title}</h3>
                        ${subSection.items.length > 0 ? `<div class="mt-3 space-y-3">${subSection.items.map(createItemHTML).join('')}</div>` : ''}
                    </div>
                `;
            });
        }

        sectionHTML += '</div>';
        return sectionHTML;
    }).join('');

    container.innerHTML = htmlContent;
});