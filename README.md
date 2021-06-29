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
