# Sử dụng image Nginx nhẹ, ổn định
FROM nginx:stable-alpine

# Copy file cấu hình Nginx tùy chỉnh (cho SPA routing)
COPY nginx.conf /etc/nginx/conf.d/default.conf

# Copy toàn bộ source code vào thư mục serve của Nginx
COPY . /usr/share/nginx/html

# Mở cổng 80
EXPOSE 80

# Chạy Nginx khi container khởi động
CMD ["nginx", "-g", "daemon off;"]
