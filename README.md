# Quản lý giỏ hàng

Hiện dữ liệu,quản lý giỏ hàng

## Bắt Đầu

Sau đây là các bước cơ bản để bắt đầu sử dụng dự án Laravel.

### Yêu Cầu

Trước khi bắt đầu, bạn cần có cài đặt [PHP](https://www.php.net/) và [Composer](https://getcomposer.org/) trên máy tính của bạn. Bạn cũng cần cài đặt [MySQL](https://www.mysql.com/) để làm cơ sở dữ liệu.

### Cài Đặt

1. Sao chép dự án về máy tính của bạn và di chuyển vào thư mục dự án:
   git clone https://github.com/vohavinhtan01012001/backend-cart.git
   
2.Cài đặt các phụ thuộc bằng Composer:
    composer install
3.Vào mysql workbench tạo database có tên: laravel

4.Chạy lệnh migrate để tạo bảng trong cơ sở dữ liệu:
    php artisan migrate
    
5.Để thêm dữ liệu mẫu vào cơ sở dữ liệu, bạn có thể chạy lệnh seed:
    php artisan db:seed
6.Chạy Dự Án:
    php artisan serve

7.Dự án sẽ được chạy tại http://localhost:8000 trên trình duyệt của bạn.
