-- Tải file .env_main và bỏ đuôi _main và copy vào project để chạy
--29/06/2021
- Code migration: books, categories
- Chức năng:
+ thêm category:
++ hiển thị giao diện thêm category
-> route: /category/create (get)
-> controller: CategoryController (create)
-> views: category/create.blade.php
-> model: 
++ thêm mới vào categories
-> route: /category/create (post)
-> controller: CategoryController (store)
-> views: 
-> model: 
+ hiển thị danh sách categories:
++ hiển thị giao diện với bảng dữ liệu category
-> route: /category (get)
-> controller: CategoryController (index)
-> views: category/index.blade.php
-> model:
- 01/07/2021: ( sửa, xóa ajax):
 + Sửa 1 chuyên ngành
++ hiển thị form sửa bản ghi chuyên ngành
-> route: /category/{id}/edit (get)
-> controller: CategoryController (edit)
-> views: category/edit.blade.php
-> model: 
++ cập nhật thông tin chuyên ngành sửa từ giao diện lên server
-> route: /category/edit (put)
-> controller: CategoryController (update)
-> views: category/edit.blade.php
-> model: 

+ Xóa category:
++ Xóa
-> route: /category/delete (delete)
-> controller: CategoryController (destroy)
-> views: category/index.blade.php
-> model: 

- 03/07/2021:
+ tạo model
+ resouce
+ crud book
- 06/07/2021:
+ validate server: 
->validate theo request (submit), 
->validate theo object request (make:request)
->validate Validate::make (ajax)
+ ghep theme + chia layout

- 08/07/2021:
-> phân trang
-> authentication sử dụng auth scaffolding bootstrap
-> middleware
-> Auth