<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\CategoryController;

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
 Route::get('/category/create', [CategoryController::class, 'create']);
 Route::post('/category/create', [CategoryController::class, 'store'])->name('category.themmoi');
 Route::get('/category', [CategoryController::class, 'index'])->name('category');
























