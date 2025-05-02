# Inertia Template

Một template được tạo ra nhằm đơn giản hóa quá trình thiết lập dự án sử dụng Laravel 10, Inertia.js v2, Vue 3 và Tailwind CSS v3.

## Hướng dẫn cài đặt

Mở terminal tại thư mục bạn muốn tạo dự án, sau đó chạy lệnh sau:

```bash
git clone https://github.com/tomnguyenhieu/inertia_template.git <tên-dự-án-của-bạn>
```

Hoặc bạn có thể nhấn nút "Use this template" → "Create new repository" trên GitHub để tạo một repository mới từ template này, sau đó clone repository vừa tạo về máy.

## Các bước sử dụng

Sau khi clone về máy, nếu thư mục có chứa .git, hãy xóa thư mục đó để khởi tạo lại Git nếu cần.

Tiếp theo, chạy lần lượt các lệnh sau để cài đặt dependencies:

```bash
composer install

npm install

php artisan key:generate
```

Sau đó, đổi tên file .env.example thành .env và cấu hình các thông số trong file này như thông thường (database, mail, v.v.).

## Khởi chạy dự án

Nếu không sử dụng Laragon, chạy 2 lệnh sau:

```bash
php artisan serve

npm run dev
```

Nếu sử dụng Laragon, chỉ cần chạy:

```bash
npm run dev
```
