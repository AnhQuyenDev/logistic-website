window.addEventListener("DOMContentLoaded", () => {
  const topics = [
    "Thủ tục xuất khẩu các mặt hàng thông dụng",
    "Xuất nhập khẩu giữa Việt Nam và các nước/vùng lãnh thổ",
    "Tổng quan về Vận chuyển quốc tế cho người xuất nhập khẩu",
    "Kỹ thuật nghiệp vụ ngoại thương",
    "Phân loại hàng hóa và Xác định mã HS của Hàng hóa",
    "Quản lý nhà nước hàng hóa xuất nhập khẩu",
    "Trị giá hải quan hàng hóa xuất nhập khẩu",
    "Thuế, tính thuế khi xuất nhập khẩu hàng hóa",
    "Thủ tục hải quan",
    "Xuất xứ hàng hóa và Hiệp định thương mại tự do",
    "Vận tải và giao vận trong thương mại quốc tế",
    "Sở hữu trí tuệ",
    "Tổn thất và Bảo hiểm Hàng hóa"
  ];

  const container = document.getElementById("topic-list");

  const topicItems = topics
    .map((title) => {
      return `
        <div class="bg-white p-3 my-2 rounded-lg shadow-md border border-gray-200 hover:bg-primary group transition-colors duration-300 ease-linear">
          <div class="flex justify-between items-center cursor-pointer">
            <h4 class="text-lg font-semibold text-gray-800 group-hover:text-white transition-colors">${title}</h4>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 group-hover:text-white transition-colors"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M6 9l6 6l6 -6"></path>
            </svg>
          </div>
        </div>
      `;
    })
    .join("");

  container.innerHTML = topicItems;
});
