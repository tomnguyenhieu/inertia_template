# Inertia Template

Một template được tạo ra nhằm đơn giản hóa quá trình thiết lập dự án sử dụng Laravel 10, Inertia.js v2, Vue 3 và Tailwind CSS v3.

## Hướng dẫn cài đặt

Mở terminal tại thư mục bạn muốn tạo dự án, sau đó chạy lệnh sau:

```bash
git clone https://github.com/tomnguyenhieu/inertia_template.git <tên-dự-án-của-bạn>
```

Hoặc bạn có thể nhấn nút "Use this template" → "Create new repository" trên GitHub để tạo một repository mới từ template này, sau đó clone repository vừa tạo về máy.

## Các bước sử dụng

Sau khi clone về máy, chạy lệnh này để xóa thư mục .git:

```bash
rm -rf .git
```

Tiếp theo, chạy lần lượt các lệnh sau để cài đặt dependencies:

```bash
composer install

npm install
```

Sau đó, chạy lệnh dưới đây để tạo file .env và cấu hình các thông số trong file này như thông thường (database, mail, v.v.):

```bash
cp .env.example .env
```

Chạy tiếp lệnh sau để generate key cho dự án:

```bash
php artisan key:generate
```

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
