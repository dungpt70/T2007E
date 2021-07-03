<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // validate
    // dB
    // logic
    return view('welcome');
});
Route::get('/hello', [HelloController::class, "xinchao"]);
Route::get('/hello2/{classname}/{username}', [HelloController::class, "xinchao2"]);
//Route::get('/monhoc/create',[])
/*
 - Chức năng thêm mới môn học:
 + route: uri: /monhoc/create -> get
 + controller: MonHocController ( function create)
 + model (*): MonHoc ( đối tượng môn học <=> 1 record trong bản monhoc) -> eloquent/ query builder
 + view: monhoc/create.blade.php
 - chức năng submit thêm mới môn học:
 + route: uri: /monhoc/create -> post
 + controller: MonHocController ( function insert )
 + model(*)
 + view: 
 
 - chức năng hiển thị ds sinh viên trong lớp:
 + route: uri: /dssv -> get
 + controller: DSSinhVienController ( 
    . function index: 
     -> tạo 1 mảng chứa thông tin của sinh viên ( mã, tên, ngày sinh, địa chỉ, điểm toán, điểm văn, điểm anh ) 
     và trả lại view: danhsachsv.blade.php để hiển thị bảng danh sách sinh viên.
     -> Các ô có điểm ( toán || văn || anh ) < 4, thì ô đó có nền màu đỏ.
     -> thêm 1 cột là điểm trung bình và hiển ra ra
 + model(*)
 + view: danhsachsv.blade.php
 * */
// them moi
 Route::get('/category/create', [CategoryController::class, 'create']);
 Route::post('/category/create', [CategoryController::class, 'store'])->name('category.themmoi');
 // hien thi danh sach
 Route::get('/category', [CategoryController::class, 'index'])->name('category');
 // cap nhat
 Route::get('/category/{id}/edit',[CategoryController::class, 'edit']);
 Route::put('/category/edit',[CategoryController::class, 'update'])->name('category.capnhat');
 // xóa
 Route::delete('/category/delete',[CategoryController::class, 'destroy'])->name('category.xoa');
 
 // quan ly sach
 Route::resource("/book", BookController::class); // tương ứng với 7 uri
 
 
























