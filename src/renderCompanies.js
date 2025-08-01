const imageUrls = [
"/public/images/imgi_12_hang-tau-cosco.jpg",
"/public/images/imgi_13_KMTC-Group.png",
"/public/images/imgi_14_unnamed.jpg",
"/public/images/imgi_20_WAN-HAI-LINE-SHIPPPING-01.jpg",
"/public/images/imgi_15_YANGMING-LOGO.jpg",
"/public/images/imgi_16_ckline_logo.png",
"/public/images/imgi_17_1200px-Emirates_logo.svg.png",
"/public/images/imgi_19_tải-xuống-1.png",
"/public/images/imgi_21_tải-xuống.png",
"/public/images/imgi_25_OOCL_logo_logotype_emblem.png",
"/public/images/imgi_23_image-asset.png",
"/public/images/imgi_18_logo-DongYoung-ngang.png",
"/public/images/imgi_24_interasia-logo.png",
];

const carousel = document.getElementById("carousel");

imageUrls.forEach((url) => {
const item = document.createElement("div");
item.className = "min-w-[25%] flex-shrink-0 p-2";

item.innerHTML = `
    <div class="bg-white p-4 rounded-lg shadow-md h-40 flex items-center justify-center overflow-hidden hover:scale-105 transition-transform">
    <img src="${url}" class="${url === "/public/images/imgi_20_WAN-HAI-LINE-SHIPPPING-01.jpg" ? "h-96" : ""} w-64 h-full object-contain" />
    </div>
`;

carousel.appendChild(item);
});

const nextBtn = document.getElementById("nextBtn");
const prevBtn = document.getElementById("prevBtn");

// Lấy số lượng item và item visible mỗi lần
const items = carousel.querySelectorAll("div.min-w-\\[25\\%\\]");
const totalItems = items.length;
const itemsPerView = 4;

let currentIndex = 0;

function updateTransform() {
  const itemWidth = items[0].offsetWidth + 16; // padding/margin nếu có
  const offset = currentIndex * itemWidth;
  carousel.style.transform = `translateX(-${offset}px)`;
}

// Next
nextBtn.addEventListener("click", () => {
  if (currentIndex < totalItems - itemsPerView) {
    currentIndex++;
    updateTransform();
  }
});

// Prev
prevBtn.addEventListener("click", () => {
  if (currentIndex > 0) {
    currentIndex--;
    updateTransform();
  }
});
